const fs = require('fs');
const path = require('path');

const Serialize = require('../server/node_modules/php-serialize');
const hash = require('../server/node_modules/object-hash');

const fileName = path.join(__dirname, '../', 'private', 'passwd');

module.exports.auth = function auth(login, passwd) {
    try {
        var users = Serialize.unserialize(fs.readFileSync(fileName));
    } catch(err) { 
        return false;
    }
    for (var key in users) {
        if (users[key]['login'] == login)
            if (hash(passwd) === users[key]['passwd'])
                return true;
    }
    return false;
}