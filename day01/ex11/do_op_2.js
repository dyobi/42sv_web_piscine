var arr = process.argv;

function op_count(str) {
    var g = 0;
    while (!(str[g] >= '0' && str[g] < '9') && str[g]) {
        g++;
    }
    while ((str[g] >= '0' && str[g] < '9') && str[g]) {
        g++;
    }
    while (str[g] != '+' && str[g] != '-' && str[g] != '%' && str[g] != '*' && str[g] != '/' && str[g]) {
        g++;
    }
    return (g);
}
if (process.argv.length == 3) {
    var nb = op_count(arr[2]);
    if (arr[2][nb] == '+') {
        var op = '+';
    }
    else if (arr[2][nb] == '-') {
        var op = '-';
    }
    else if (arr[2][nb] == '/') {
        var op = '/';
    }
    else if (arr[2][nb] == '*') {
        var op = '*';
    }
    else if (arr[2][nb] == '%') {
        var op = '%';
    }
    var left = arr[2].slice(0, nb);
    var right = arr[2].slice(nb + 1, arr[2].length + 1);
    right = right.trim();
    left = left.trim();
    if (!left || !right || isNaN(left) || isNaN(right)) {
        console.log('Syntax Error');
        return;
    }
    left = parseInt(left);
    right = parseInt(right);
    if (op == '+') {
        console.log(left + right);
    }
    else if (op == '-') {
        console.log(left - right);
    }
    else if (op == '*') {
        console.log(left * right);
    }
    else if (op == '%') {
        console.log(left % right);
    }
    else if (op == '/') {
        console.log(left / right);
    }
}
else {
    console.log('Incorrect Parameters');
}