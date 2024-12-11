const path = require('path');
const replace = require("replace");
const { exec } = require('child_process');
const fs = require('fs')



const name = path.basename(path.resolve(__dirname, '..'));

replace(
    {
        regex: /Version:\s*(.*)/,
        replacement: `Version:              ${process.env.npm_package_version}`,
        paths: [`./${name}.php`],
        recursive: true,
        silent: true,
    },
);

replace(
    {
        regex: /(.*?)_VERSION', '(.*?)'/,
        replacement: `$1_VERSION', '${process.env.npm_package_version}'`,
        paths: [`./${name}.php`],
        recursive: true,
        silent: true,
    },
);

const readme = './README.txt'

try {
    if (fs.existsSync(readme) && !process.env.npm_package_version.match(/([A-Za-z]{1,10})/)) {
        replace(
            {
                regex: /Stable tag: (.*)/,
                replacement: `Stable tag: ${process.env.npm_package_version}`,
                paths: [readme],
                recursive: true,
                silent: true,
            },
        );
    } else {
        console.log('README missing or ignored');

    }
} catch (err) {
}

exec(`git add . && git commit -m "Bumped to ${process.env.npm_package_version}"`)
