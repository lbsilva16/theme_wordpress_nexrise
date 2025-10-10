const fs = require('fs');
const path = 'style.css';
let css = fs.readFileSync(path, 'utf8');

const search = '  overflow: hidden;\r\n';
if (!css.includes(search)) {
  throw new Error('overflow line not found');
}

css = css.replace(search, '  overflow: hidden;\r\n  background: var(--primary-color);\r\n');
fs.writeFileSync(path, css, 'utf8');
