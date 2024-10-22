import fs from 'fs';
import path from 'path';

// Function to read all files recursively from a directory
const readFiles = (dir, fileList = []) => {
    const st = fs.statSync(dir);

    if (st.isDirectory()) {
        const files = fs.readdirSync(dir);

        files.forEach(file => {
            const filePath = path.join(dir, file);
            const stat = fs.statSync(filePath);

            if (stat.isDirectory()) {
                readFiles(filePath, fileList);
            } else if (stat.isFile()) {
                fileList.push(filePath);
            }
        });
    } else if (st.isFile()) {
        fileList.push(dir);
    }

    return fileList;
};

// Function to extract text between __('')
const extractText = (content) => {
    // const regex = /__\((.+?)\)/gs;
    // const matches = [];
    // let match;

    // while (match = regex.exec(content)) {
    //     matches.push(match[1]);
    // }

    // return matches;

    const regex = /__\(\s*['"`]((?:[^'"`]|\\['"`]|"(?:[^"\\]|\\.)*")*?)['"`]\s*,?\s*\)/g ///__\(\s*['"`]((?:[^'"`]|\\['"`]|"(?:[^"\\]|\\.)*")*?)['"`]\s*\)/g;
    const matches = content.matchAll(regex);

    // Extract the first parameter from each match
    const params = Array.from(matches, match => match[1]);

    return params;
};

// Function to extract text between __('')
const extractText2 = (content) => {
    const regex = /\$trans\(\s*['"`]((?:[^'"`]|\\['"`]|"(?:[^"\\]|\\.)*")*?)['"`]\s*,?\s*\)/g;
    const matches = [];
    let match;

    while (match = regex.exec(content)) {
        matches.push(match[1]);
    }

    return matches;
};

// Main function
const extractTextFromFiles = (dir, js) => {
    const result = {},
        stats = fs.statSync(dir);;

    if (stats.isFile()) {
        const content = fs.readFileSync(dir, 'utf8');
        const matches = (js ? extractText2 : extractText)(content);
        if (matches.length) {
            result[dir] = matches;
        }
    } else {
        const files = readFiles(dir);
        files.forEach(file => {
            const content = fs.readFileSync(file, 'utf8');
            const matches = (js ? extractText2 : extractText)(content);
            if (matches.length) {
                result[file] = matches;
            }
        });
    }

    return result;
};

if (process.argv.includes('--js')) {
    const directoryPath = ['public/js'];
    var data = {};
    directoryPath.forEach(path => {
        const extractedText = extractTextFromFiles(path, true);
        Object.values(extractedText).reduce((a, e) => [...a, ...e], []).forEach(dd => {
            data[dd] = dd;
        });
    });

    fs.writeFileSync("./js.json", JSON.stringify(data, null, 2), 'utf8');
} else {
    const view = process.argv.indexOf("--view");
    var data = {};
    if (view !== -1) {
        const _path = process.argv[view + 1];
        if (_path) {
            const extractedText = extractTextFromFiles(path.join('resources/views', _path) + '.blade.php');
            Object.values(extractedText).reduce((a, e) => [...a, ...e], []).forEach(dd => {
                data[dd] = dd;
            });
        }
    } else {
        const directoryPath = ['app/Http/Controllers', 'app/Functions', 'resources/views'];
        directoryPath.forEach(path => {
            const extractedText = extractTextFromFiles(path);
            Object.values(extractedText).reduce((a, e) => [...a, ...e], []).forEach(dd => {
                data[dd] = dd;
            });
        });
    }

    fs.writeFileSync("./locale.json", JSON.stringify(data, null, 2), 'utf8');
}