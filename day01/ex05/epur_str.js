var arr = process.argv;

if (process.argv.length == 3) {
    var temp = arr[2].trim().split(/\s+/);
    for (var i = 0; i < temp.length; i++) {
        process.stdout.write(temp[i]);
        if (temp[i + 1]) {
            process.stdout.write(' ');
        }
    }
    console.log('');
}