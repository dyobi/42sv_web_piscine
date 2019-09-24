module.exports.logout = (req, res) => {
	req.session.destroy();
	res.status(200);
	res.end();
}