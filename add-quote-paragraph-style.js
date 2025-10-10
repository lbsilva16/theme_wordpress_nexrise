const fs = require('fs');
const path = 'style.css';
let css = fs.readFileSync(path, 'utf8');

const anchor = `.quote-content h2 {\r\n  font-family: "Lora", serif;\r\n  font-size: 2.8rem;\r\n  font-weight: 400;\r\n  line-height: 1.4;\r\n  text-shadow: 0 4px 16px rgba(0, 0, 0, 0.4);\r\n}\r\n`;
const addition = `.quote-content h2 {\r\n  font-family: "Lora", serif;\r\n  font-size: 2.8rem;\r\n  font-weight: 400;\r\n  line-height: 1.4;\r\n  text-shadow: 0 4px 16px rgba(0, 0, 0, 0.4);\r\n}\r\n\r\n.quote-content p {\r\n  margin-top: 1.5rem;\r\n  font-size: 1.1rem;\r\n  color: rgba(255, 255, 255, 0.85);\r\n}\r\n`;

if (!css.includes(anchor)) {
  throw new Error('Anchor block not found');
}

css = css.replace(anchor, addition);
fs.writeFileSync(path, css, 'utf8');
