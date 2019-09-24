const express = require('express');
const cookieParser = require('cookie-parser');
const app = express();

const ex01 = require('../ex01/nodeinfo').nodeinfo;
const ex02 = require('../ex02/print_get').print_get;
const ex03 = require('../ex03/cookie_crisp').cookie_crisp;
const ex04 = require('../ex04/raw_text').raw_text;
const ex05 = require('../ex05/read_img').read_img;
const ex06 = require('../ex06/members_only').members_only;

const port = 8080;
const msg = `Server is on ${port}`;

app.use(cookieParser());

app.get('/', (req, res) => {
    res.send(msg);
});

app.get('/j03/ex01/phpinfo.php', (req, res) => {
    ex01(req, res);
});

app.get('/j03/ex02/print_get.php', (req, res) => {
    ex02(req, res);
});

app.get('/j03/ex03/cookie_crisp.php', (req, res) => {
    ex03(req, res);
});

app.get('/j03/ex04/raw_text.php', (req, res) => {
    ex04(req, res);
});

app.get('/j03/ex05/read_img.php', (req, res) => {
    ex05(req, res);
});

app.get('/j03/ex06/members_only.php', (req, res) => {
    ex06(req, res);
})

app.listen(port, () => console.log());