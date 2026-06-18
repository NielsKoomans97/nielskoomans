const mix = require('laravel-mix');
const fs = require('fs');
const path = require('path');

// Directories and files to ensure exist before building
const dirs = [
    'resources/js',
    'resources/sass',
    'resources/images',
    'public/dist',
];

const files = [
    { path: 'resources/js/app.js',      content: '// app.js\n' },
    { path: 'resources/sass/app.scss',  content: '// app.scss\n' },
];

// Create directories if they don't exist
dirs.forEach(dir => {
    if (!fs.existsSync(dir)) {
        fs.mkdirSync(dir, { recursive: true });
        console.log(`Created directory: ${dir}`);
    }
});

// Create files if they don't exist
files.forEach(({ path: filePath, content }) => {
    if (!fs.existsSync(filePath)) {
        fs.writeFileSync(filePath, content);
        console.log(`Created file: ${filePath}`);
    }
});

// Mix configuration
mix.js('resources/js/app.js', 'public/dist/app.js');
mix.sass('resources/sass/app.scss', 'public/dist/app.css');
mix.copyDirectory('resources/images', 'public/dist');