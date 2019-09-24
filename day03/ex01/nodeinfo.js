const info = require('../ex00/node_modules/nodejs-info');

module.exports.nodeinfo = (req, res) => {
    res.send(info(res));
};