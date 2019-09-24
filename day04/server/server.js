const express = require('express');
const session = require('express-session');
const bodyParser = require('body-parser');
const app = express();

const ex00 = require('../ex00/index.js').index;
const ex01 = require('../ex01/create').create;
const ex02 = require('../ex02/modif').modif;
const ex03_login = require('../ex03/login').login;
const ex03_logout = require('../ex03/logout').logout;
const ex03_whoami = require('../ex03/whoami').whoami;

const port = 8080;
const host = '127.0.0.1';
const msg = `Server is running on port https://${host}:${port}`;

app.use(session({
    secret: '#@42DAY04SESSION@#',
    resave: false,
    saveUninitialized: true
}));

app.use(express.json());

app.use(bodyParser.urlencoded({
    extended: false
}));

app.get('/', (req, res) => {
    res.send(msg);
});

app.get('/j04/ex00/index.js', (req, res) => {
    ex00(req, res);
});

app.get('/j04/ex01/create.js', (req, res) => {
    ex01(req, res);
});

app.post('/j04/ex01/create.js', (req, res) => {
    ex01(req, res);
});

app.get('/j04/ex02/modif.js', (req, res) => {
    ex02(req, res);
});

app.post('/j04/ex02/modif.js', (req, res) => {
    ex02(req, res);
});

app.get('/j04/ex03/login.js', (req, res) => {
    ex03_login(req, res);
});

app.get('/j04/ex03/logout.js', (req, res) => {
    ex03_logout(req, res);
});

app.get('/j04/ex03/whoami.js', (req, res) => {
    ex03_whoami(req, res);
});

app.listen(port, () => console.log(msg));