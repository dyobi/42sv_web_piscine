module.exports.print_get = (req, res) => {
    res.set('Content-Type', 'text/plain');
    var value = '';
    for(const key in req.query) {
        value += (`${key}: ${req.query[key]}\n`);
    }
    res.send(value);
};