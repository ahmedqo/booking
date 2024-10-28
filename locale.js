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
    // ’
    const regex = /__\(\s*['"`]((?:[^'"`]|\\['"`]|"(?:[^"\\]|\\.)*")*?)['"`]\s*,?\s*\)/g ///__\(\s*['"`]((?:[^'"`]|\\['"`]|"(?:[^"\\]|\\.)*")*?)['"`]\s*\)/g;
    const matches = content.matchAll(regex);

    const params = Array.from(matches, match => match[1]);

    return params;
};

// Main function
const extractTextFromFiles = (dir, js) => {
    const result = {},
        files = fs.statSync(dir).isFile() ? [dir] : readFiles(dir);

    files.forEach(file => {
        const content = fs.readFileSync(file, 'utf8');
        const matches = extractText(content);
        if (matches.length) {
            result[file] = matches;
        }
    });

    return result;
};

function main() {
    const data = {},
        args = process.argv,
        ends = args.includes("--view") ? '.blade.php' : '',
        base = args.includes("--view") ? 'resources/views' : '';

    const enter = args.indexOf("--enter") !== -1 ? [args[args.indexOf("--enter") + 1] + ends] : ['app/Http/Controllers', 'app/Functions', 'resources/views'],
        leave = args.indexOf("--leave") !== -1 ? args[args.indexOf("--leave") + 1] : "locale";

    enter.forEach(_path => {
        const extractedText = extractTextFromFiles(path.join(base, _path));
        Object.values(extractedText).reduce((a, e) => [...a, ...e], []).forEach(dd => {
            data[dd] = dd;
        });
    });

    fs.writeFileSync("./" + leave + ".json", JSON.stringify(data, null, 2), 'utf8');
}

main();