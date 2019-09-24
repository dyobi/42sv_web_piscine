module.exports.cookie_crisp = (req, res) => {
    try {
        var i = req.query;
        if (i.action === 'get' && i.name) {
            res.send(req.cookies[i.name]);
        }
        else if (i.action === 'set' && i.name && i.value) {
            res.cookie(i.name, i.value).send();
        }
        else if (i.action === 'del' && i.name) {
            res.clearCookie(i.name).send();
        }
        else {
            throw 'error';
        }
    }
    catch {
        res.send('Invalid Parameter');
    }
};