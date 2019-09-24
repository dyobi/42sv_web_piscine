var stdin = process.openStdin();

process.stdout.write('Enter a number : ');
stdin.addListener("data", a => {
    a = a.toString().trim();
    var temp = parseInt(a, 10);
    if (!isNaN(a) && Number.isInteger(temp)) {
        if (temp % 2 == 0) {
            console.log(`The number ${temp} is even`);
        }
        else if (temp % 2 == 1) {
            console.log(`The number ${temp} is odd`);
        }
    }    
    else {
        console.log(`'${a}' is not a number`);
    }
    process.stdout.write('Enter a number : ');
});