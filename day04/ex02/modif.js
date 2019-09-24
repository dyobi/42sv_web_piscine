const fs = require('fs');
const path = require('path');

const Serialize = require('../server/node_modules/php-serialize');
const hash = require('../server/node_modules/object-hash');

const fileName = path.join(__dirname, '../', 'private', 'passwd');

module.exports.modif = (req, res) => {
    const login = req.body.login;
    const oldpasswd = req.body.oldpw;
    const newPasswd = req.body.newpw;
    const submit = req.body.submit;

    if(submit === 'OK') {
        if(login === '' || oldpasswd === '' || newPasswd === '') {
            res.status(401);
            res.end('ERROR\n');
            return ;
        }
        try {
            var users = Serialize.unserialize(fs.readFileSync(fileName));
        } catch {
            res.status(401);
            res.end('ERROR\n');
        }
        if (users !== undefined && isValidUser(login, oldpasswd, users)) {
            for (var key in users) {
                if (users[key]['login'] === login) {
                    users[key]['passwd'] = hash(newPasswd);
                }
            }
            fs.writeFileSync(fileName, Serialize.serialize(users));
            res.status(200);
            res.end('OK\n');
        } else {
            res.status(401);
            res.end('ERROR\n');
        }
    } else {
        res.sendFile(path.join(__dirname, 'index.html'));
    }
}

function isValidUser(login, oldpasswd, users) {
	for (var key in users) {
		if (users[key]['login'] == login)
			if (hash(oldpasswd) === users[key]['passwd'])
				return (true);
	}
	return (false);
}
