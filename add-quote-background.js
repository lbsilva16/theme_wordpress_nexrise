const fs = require('fs');
const path = 'style.css';
let css = fs.readFileSync(path, 'utf8');

const target = `.quote {\r\n  position: relative;\r\n  color: var(--white);\r\n  text-align: center;\r\n  padding: 140px 0;\r\n  overflow: hidden;\r\n}\r\n`;
const replacement = `.quote {\r\n  position: relative;\r\n  color: var(--white);\r\n  text-align: center;\r\n  padding: 140px 0;\r\n  overflow: hidden;\r\n  background: var(--primary-color);\r\n}\r\n`;

if (!css.includes(target)) {
  throw new Error('Quote block without background not found');
}

css = css.replace(target, replacement);
fs.writeFileSync(path, css, 'utf8');
