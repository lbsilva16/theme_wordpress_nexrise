import { test, expect } from '@playwright/test';

test('Home sem erros de console e sem 404/5xx', async ({ page }) => {
  const consoleErrors: string[] = [];
  const badResponses: string[] = [];

  page.on('pageerror', e => consoleErrors.push(`pageerror: ${e.message}`));
  page.on('console', msg => {
    if (msg.type() === 'error') consoleErrors.push(`console: ${msg.text()}`);
  });
  page.on('response', resp => {
    const s = resp.status();
    const url = resp.url();
    if (url.startsWith('http://localhost:8000') && (s === 404 || s >= 500)) {
      badResponses.push(`${s} ${url}`);
    }
  });

  await page.goto('/', { waitUntil: 'domcontentloaded' });
  await page.waitForLoadState('networkidle');

  expect(consoleErrors, `Erros JS/console:\n${consoleErrors.join('\n')}`).toEqual([]);
  expect(badResponses, `Requests com 404/5xx:\n${badResponses.join('\n')}`).toEqual([]);
});
