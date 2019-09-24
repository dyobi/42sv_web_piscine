const fs = require('fs');
const path = require('path');

const Serialize = require('../server/node_modules/php-serialize');
const hash = require('../server/node_modules/object-hash');

const dirPath = path.join(__dirname, '../', 'private');
const fileName = path.join(__dirname, '../', 'private', 'passwd');

module.exports.create = (req, res) => {
	const login = req.body.login;
    const passwd = req.body.passwd;
    const submit = req.body.submit;

    if(submit === 'OK') {
        if(login === '' || passwd === '') {
            res.status(401);
            res.end('ERROR\n');
            return ;
        }
        if(!fs.existsSync(fileName)) {
            fs.mkdirSync(dirPath);
            fs.writeFileSync(fileName);
        }
        try {
            var users = Serialize.unserialize(fs.readFileSync(fileName));
        } catch {
            users = [];
        }
        if (isValidUser(login, passwd, users)) {
            if (users === []) {
                users = [{ login: login, passwd: hash(passwd) }];
            } else {
                users.unshift({ login: login, passwd: hash(passwd) });
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

function isValidUser(login, passwd, users) {
	if (login !== '' && passwd !== '') {
		for (var key in users) {
			if (users[key]['login'] == login)
				return (false);
		}
		return (true);
	}
	return (false);
}
