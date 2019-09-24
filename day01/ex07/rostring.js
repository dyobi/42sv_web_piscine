var arr = process.argv;

if (process.argv.length > 2) {
    var temp = arr[2].trim().split(/\s+/);
    if (!temp[1]) {
        console.log(temp[0]);
    }
    else {
        for (var i = 1; i < temp.length; i++) {
            process.stdout.write(temp[i]);
            process.stdout.write(' ');
        }
        process.stdout.write(temp[0]);
        process.stdout.write('\n');
    }
}