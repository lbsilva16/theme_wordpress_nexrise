/**
 * Newsletter Integration with Zoho Campaigns
 * Handles form submission using Zoho's native method (hidden form + iframe)
 *
 * @package nw-avada-like
 */

(function() {
	'use strict';

	// Wait for DOM to be ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initNewsletterForm);
	} else {
		initNewsletterForm();
	}

	function initNewsletterForm() {
		const form = document.getElementById('nexrise-newsletter-form');
		
		if (!form) {
			return;
		}

		form.addEventListener('submit', handleFormSubmit);
	}

	/**
	 * Zoho Campaigns scriptless submit function (from Zoho's code)
	 */
	function zcScptlessSubmit(parentNode) {
		if (parentNode.querySelector('#zc_spmSubmit')) {
			parentNode.querySelector('#zc_spmSubmit').remove();
		}
		parentNode.submit();
	}

	function handleFormSubmit(e) {
		e.preventDefault();

		const form = e.target;
		const emailInput = document.getElementById('nexrise-footer-email');
		const messageDiv = document.getElementById('newsletter-message');
		const submitBtn = form.querySelector('.nexrise-footer__subscribe-btn');

		// Get email value
		const email = emailInput.value.trim();

		// Validate email
		if (!email || !isValidEmail(email)) {
			showMessage(messageDiv, 'Please enter a valid email address.', 'error');
			return;
		}

		// Save original button text
		const originalButtonText = submitBtn.textContent;

		// Disable submit button during request
		submitBtn.disabled = true;
		submitBtn.textContent = 'Subscribing...';

		// Remove any existing hidden Zoho form
		const existingZohoForm = document.getElementById('zoho-hidden-form');
		if (existingZohoForm) {
			existingZohoForm.remove();
		}

		// Create hidden form for Zoho submission
		const zohoForm = document.createElement('form');
		zohoForm.id = 'zoho-hidden-form';
		zohoForm.method = 'POST';
		zohoForm.action = 'https://zgpp-zppg.maillist-manage.com/weboptin.zc';
		zohoForm.target = '_zcSignup';
		zohoForm.style.display = 'none';

		// Add email field
		const emailField = document.createElement('input');
		emailField.type = 'text';
		emailField.name = 'CONTACT_EMAIL';
		emailField.value = email;
		zohoForm.appendChild(emailField);

		// Add all required hidden fields (from Zoho's working code)
		const hiddenFields = {
			'submitType': 'optinCustomView',
			'emailReportId': '',
			'formType': 'QuickForm',
			'zx': '135ea85e8',
			'zcvers': '3.0',
			'oldListIds': '',
			'mode': 'OptinCreateView',
			'zcld': '115a9c851e9be338f',
			'zctd': '115a9c851e9be2b91',
			'document_domain': '',
			'zc_Url': 'zgpp-zppg.maillist-manage.com',
			'new_optin_response_in': '0',
			'duplicate_optin_response_in': '0',
			'zc_trackCode': 'ZCFORMVIEW',
			'zc_formIx': '3zb7bfaeb2a365f7c73b06d0493a11298bff1e450c80c70e480b86d4653230bd92',
			'viewFrom': 'URL_ACTION',
			'scriptless': 'yes',
			'zc_spmSubmit': 'ZCSPMSUBMIT',
			'fieldBorder': ''
		};

		// Create and append all hidden fields
		Object.keys(hiddenFields).forEach(function(key) {
			const hiddenField = document.createElement('input');
			hiddenField.type = 'hidden';
			hiddenField.name = key;
			hiddenField.id = key === 'zc_spmSubmit' ? 'zc_spmSubmit' : '';
			hiddenField.value = hiddenFields[key];
			zohoForm.appendChild(hiddenField);
		});

		// Append form to body
		document.body.appendChild(zohoForm);

		// Listen for iframe load to detect submission completion
		const iframe = document.getElementById('_zcSignup');
		let submissionTimeout;

		const handleIframeLoad = function() {
			clearTimeout(submissionTimeout);
			
			// Wait a bit for Zoho to process
			setTimeout(function() {
				// Success - Zoho form submitted successfully
				showMessage(messageDiv, 'Sometimes our welcome email may land in your Promotions or Updates tab. Please check those folders if you don\'t see it in your main inbox.', 'success');
				emailInput.value = '';
				submitBtn.disabled = false;
				submitBtn.textContent = originalButtonText;
				
				// Clean up
				if (zohoForm.parentNode) {
					zohoForm.parentNode.removeChild(zohoForm);
				}
				iframe.removeEventListener('load', handleIframeLoad);
			}, 1000);
		};

		// Set timeout as fallback (in case iframe doesn't fire load event)
		submissionTimeout = setTimeout(function() {
			// Assume success after reasonable time
			showMessage(messageDiv, 'Sometimes our welcome email may land in your Promotions or Updates tab. Please check those folders if you don\'t see it in your main inbox.', 'success');
			emailInput.value = '';
			submitBtn.disabled = false;
			submitBtn.textContent = originalButtonText;
			
			// Clean up
			if (zohoForm.parentNode) {
				zohoForm.parentNode.removeChild(zohoForm);
			}
			iframe.removeEventListener('load', handleIframeLoad);
		}, 3000);

		// Listen for iframe load
		iframe.addEventListener('load', handleIframeLoad);

		// Submit the hidden form using Zoho's method
		try {
			zcScptlessSubmit(zohoForm);
		} catch (error) {
			console.error('Newsletter subscription error:', error);
			clearTimeout(submissionTimeout);
			showMessage(messageDiv, 'Something went wrong. Please try again later.', 'error');
			submitBtn.disabled = false;
			submitBtn.textContent = originalButtonText;
			
			// Clean up
			if (zohoForm.parentNode) {
				zohoForm.parentNode.removeChild(zohoForm);
			}
			iframe.removeEventListener('load', handleIframeLoad);
		}
	}

	function showMessage(element, text, type) {
		if (!element) {
			return;
		}

		element.textContent = text;
		element.style.color = type === 'success' ? '#4CAF50' : 'red';
		element.style.display = 'block';

		// Clear message after 5 seconds (optional)
		setTimeout(function() {
			element.textContent = '';
			element.style.display = 'none';
		}, 5000);
	}

	function isValidEmail(email) {
		const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		return emailRegex.test(email);
	}
})();
