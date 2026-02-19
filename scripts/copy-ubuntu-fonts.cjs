/**
 * Copy Ubuntu font files (400, 500, 700) from @fontsource/ubuntu to assets/fonts/ubuntu.
 * Run automatically after npm install via postinstall, or manually: npm run copyfonts
 */
const fs = require('fs');
const path = require('path');

const fromDir = path.join(__dirname, '../node_modules/@fontsource/ubuntu/files');
const toDir = path.join(__dirname, '../assets/fonts/ubuntu');
const files = [
  'ubuntu-latin-400-normal.woff2',
  'ubuntu-latin-500-normal.woff2',
  'ubuntu-latin-700-normal.woff2',
];

if (!fs.existsSync(fromDir)) {
  console.warn('copy-ubuntu-fonts: @fontsource/ubuntu not found. Run npm install.');
  process.exit(0);
}

fs.mkdirSync(toDir, { recursive: true });

for (const file of files) {
  const src = path.join(fromDir, file);
  const dest = path.join(toDir, file);
  if (fs.existsSync(src)) {
    fs.copyFileSync(src, dest);
    console.log('copy-ubuntu-fonts:', file);
  }
}
