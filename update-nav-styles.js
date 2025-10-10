const fs = require('fs');
const path = 'style.css';
let css = fs.readFileSync(path, 'utf8');

const navLinksBlock = `.nav-links a {\r\n  color: #000000;\r\n  text-decoration: none;\r\n  padding: 20px 25px;\r\n  display: block;\r\n  font-weight: 500;\r\n  transition: background-color 0.3s ease, color 0.3s ease;\r\n}\r\n\r\n.nav-links a:hover,\r\n.nav-links a:focus,\r\n.nav-links a.active {\r\n  background-color: #6a2a3c;\r\n  color: #ffffff;\r\n}\r\n\r\n.nav-links .highlight {\r\n  background-color: #6a2a3c;\r\n  color: #ffffff;\r\n  font-weight: 600;\r\n  margin-left: 20px;\r\n  border-radius: 0;\r\n}\r\n\r\n.nav-links .highlight:hover,\r\n.nav-links .highlight:focus {\r\n  background-color: #6a2a3c;\r\n  color: #ffffff;\r\n}\r\n`;

const navLinksReplacement = `.nav-links a {\r\n  color: #000000;\r\n  text-decoration: none;\r\n  padding: 6px 14px;\r\n  display: block;\r\n  font-weight: 500;\r\n  border-radius: 4px;\r\n  transition: all 0.3s ease;\r\n}\r\n\r\n.nav-links a:hover,\r\n.nav-links a:focus,\r\n.nav-links a.active,\r\n.nav-links li.current-menu-item > a {\r\n  background-color: #6a2a3c;\r\n  color: #ffffff;\r\n}\r\n\r\n.nav-links .highlight,\r\n.nav-links a.highlight,\r\n.nav-links .contate-nos > a,\r\n.nav-links a.contate-nos {\r\n  background-color: #6a2a3c;\r\n  color: #ffffff;\r\n  padding: 6px 16px;\r\n  border-radius: 4px;\r\n  font-weight: 600;\r\n  margin-left: 20px;\r\n  transition: all 0.3s ease;\r\n}\r\n\r\n.nav-links .highlight:hover,\r\n.nav-links .highlight:focus,\r\n.nav-links a.highlight:hover,\r\n.nav-links a.highlight:focus,\r\n.nav-links .contate-nos > a:hover,\r\n.nav-links .contate-nos > a:focus {\r\n  background-color: #6a2a3c;\r\n  color: #ffffff;\r\n}\r\n`;

if (!css.includes(navLinksBlock)) {
  throw new Error('Original nav-links block not found.');
}

css = css.replace(navLinksBlock, navLinksReplacement);

if (!css.includes('.header-separator')) {
  const insertPoint = css.indexOf('/* Navega');
  if (insertPoint === -1) {
    throw new Error('Unable to locate insertion point for header separator.');
  }
  const before = css.slice(0, insertPoint);
  const after = css.slice(insertPoint);
  const separatorStyles = `.header-separator {\r\n  width: 100%;\r\n  height: 1px;\r\n  background-color: #e0e0e0;\r\n  margin: 0;\r\n}\r\n\r\n`;
  css = before + separatorStyles + after;
}

fs.writeFileSync(path, css, 'utf8');
