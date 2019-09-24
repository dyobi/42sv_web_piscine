const dir = require('path');

module.exports.read_img = (req, res) => {
    res.set('Content-Type', 'image/png')
    res.sendfile(dir.join(__dirname, '../img/42.png'));
};