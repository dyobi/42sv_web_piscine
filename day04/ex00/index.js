module.exports.index = (req, res) => {
    sess = req.session;
    q = req.query;

    if(q.submit === 'OK') {
        sess.login = q.login;
        sess.passwd = q.passwd;
    }

    res.set({
        'Content-Type': 'text/html'
    });
    var form = `<html><body>
<form name="index.js" method="get">
Username: <input type="text" name="login" value="${sess.login === undefined ? '' : sess.login}" />
<br />
Password: <input type="passowold" name="passwd" value="${sess.passwd === undefined ? '' : sess.passwd}" />
<input type="submit" name="submit" value="OK"/>
</form>
</body></html>`;
    res.status(200);
    res.send(form);
}