const auth = require('./auth').auth;

module.exports.login = (req, res) => {
	const login = req.query.login;
	const passwd = req.query.passwd;
	const sess = req.session;

	if (auth(login, passwd) === true) {
		sess.loggued_on_user = login;
		res.status(200);
		res.send('OK\n');
	} else {
		sess.loggued_on_user = '';
		res.status(401);
		res.send('ERROR\n');
	}
}