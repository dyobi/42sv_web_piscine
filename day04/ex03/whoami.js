module.exports.whoami = (req, res) => {
	const sess = req.session;
	if (sess.loggued_on_user !== undefined && sess.loggued_on_user !== '') {
		res.status(200);
		res.end(sess.loggued_on_user + '\n');
	} else {
		res.status(401);
		res.end('ERROR\n');
	}
}