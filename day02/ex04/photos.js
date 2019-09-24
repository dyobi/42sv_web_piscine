const https = require('https');
const http = require('http');
const fs = require('fs');
const { spawn } = require('child_process');

main();

function main() {
    var arr = process.argv; 

    if(arr.length === 3) {
        var url = arr[2];

        if(url.match(/http\w*:\/\//) === null || url.match('www') === null || url.match(/:\/\/\//) || url.match('wwww')) {
            console.log('Invalid URL : URL should contain http:// or https:// and www (ex: https://www.42.us.org)');
            return;
        }

        var dir = url.split('://')[1].split('/')[0];
        if(url.split('/')[url.split('/').length - 1] === '') {
            url = url.slice(0, url.length - 1);
        }

        manageDir(dir);
        core(url, dir);
    }
}

function manageDir(dir) {
    if(fs.existsSync(dir)) {
        fs.readdirSync(dir).forEach(file => {
            var curPath = dir + '/' + file;
            if(fs.lstatSync(curPath).isDirectory()) {
                devareDir(curPath);
            } else {
                fs.unlinkSync(curPath);
            }
        });
        fs.rmdirSync(dir);
    }
    fs.mkdirSync(dir);
}

function core(url, dir) {
    var curl = spawn('curl', [url]);

    curl.stdout.on('data', data => {
        var html = data.toString();
        var matches = html.match(/<img.*src="(.*?)"/g);
        if(matches !== null) {
            for(var i = 0; i < matches.length; i++) {
                download(url, dir, matches[i].match(/<img.*src="(.*?)"/)[1]);
            }
        }
    });
}

function download(url, dir, match) {
    var file = match.split('/')[match.split('/').length - 1];

    if(!match.match('://')) {
        url = url + match;
    } else {
        url = match;
    }

    var touch = fs.createWriteStream(dir + "/" + file);

    if(url.match('https')) {
        https.get(url, response => {
            response.pipe(touch);
        });
    } else {
        http.get(url, response => {
            response.pipe(touch);
        });
    }
}