module.exports.raw_text = (req, res) => {
    res.set('Content-Type', 'text/html');
    res.send('<html><body>Hello</body></html>');
};