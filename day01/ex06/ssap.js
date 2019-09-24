var arr = process.argv;

if (process.argv.length > 2) {
    var temp = arr[2]
    for (var i = 3; i < process.argv.length; i++) {
        temp = temp + ' ' + arr[i];
    }
    temp = temp.trim().split(/\s+/).sort();
    for (i = 0; i < temp.length; i++) {
        console.log(temp[i]);
    }
}