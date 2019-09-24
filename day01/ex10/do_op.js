var arr = process.argv;

if (process.argv.length == 5) {
    var left = arr[2].trim();
    var right = arr[4].trim();
    var op = arr[3].trim();
    if (isNaN(left) || isNaN(right)) {
        console.log('Syntax Error');
    }
    else {
        left = parseInt(left, 10);
        right = parseInt(right, 10);
        if (op == '+') {
            var res = left + right;
        }
        else if (op == '-') {
            var res = left - right;
        }
        else if (op == '*') {
            var res = left * right;
        }
        else if (op == '/') {
            var res = left / right;
        }
        else if (op == '%') {
            var res = left % right;
        }
        if (res) {
            console.log(res);
        }
        else if (res == 0) {
            console.log(0);
        }
    }
}
else {
    console.log('Incorrect Parameters');
}