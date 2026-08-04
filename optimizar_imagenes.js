const fs = require('fs');
const path = require('path');
const sharp = require('sharp'); 

const inputDir = path.join(__dirname, 'public', 'assets', 'img', 'servicios');
const outputDir = path.join(__dirname, 'public', 'assets', 'img', 'servicios', 'optimizadas');

if (!fs.existsSync(outputDir)){
    fs.mkdirSync(outputDir, { recursive: true });
}

fs.readdir(inputDir, (err, files) => {
    if (err) throw err;

    files.forEach(file => {
        const inputPath = path.join(inputDir, file);
        if(fs.lstatSync(inputPath).isDirectory()) return;

        const outputPath = path.join(outputDir, file.replace(/\.(png|jpg|jpeg)$/i, '.webp'));

        sharp(inputPath)
            .resize(600, null, { withoutEnlargement: true }) 
            .webp({ quality: 70 }) 
            .toFile(outputPath)
            .then(info => {
                console.log(`Optimizada: ${file} -> ${info.size / 1000} KB`);
                fs.copyFileSync(outputPath, inputPath);
            })
            .catch(err => {
                console.error(`Error optimizando ${file}:`, err);
            });
    });
});
