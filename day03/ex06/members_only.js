const fs = require('fs');
const path = require('path');
const auth = require('../ex00/node_modules/basic-auth');

module.exports.members_only = (req, res) => {
    if (auth(req) && auth(req).name == 'zaz' && auth(req).pass == 'jaimelespetitsponeys') {
       res.set('Content-Type', 'text/html');
        res.status(200);
        res.end(`<html><body>
Hello Zaz<br />
<img src='data:image/png;base64,` +
Buffer.from(fs.readFileSync(path.join(__dirname, '../', 'img', '42.png'))).toString('base64') + `'>
</body></html>
`);
   } else {
        res.status(401);
        res.set({
            'Date': new Date().toUTCString(),
            'Server': 'Node',
            'WWW-Authenticate': 'Basic realm=\'\'Member area\'\'',
            'Connection': 'close',
            'Content-Type': 'text/html',
        });
        res.end('<html><body>That area is accessible for members only</body></html>');
   }
};