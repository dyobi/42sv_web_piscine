if (process.argv.length < 3) {
    return;
}
else {
    var arr = process.argv[2].trim().split(/\s+|:/);
    if (arr.length != 7 || arr[4].length != 2 || arr[5].length != 2 || arr[6].length != 2) {
        console.log('Wrong Format');
        return;
    }
    var week = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
    var month = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
    for (var i = 0; i < month.length; i++) {
        if (arr[2].toLowerCase(/^\D/) == month[i]) {
            break;
        }
        if (i == 11) {
            console.log('Wrong Format');
            return;
        }
    }
    arr[2] = (i + 1).toString();
    var dayOfWeek = week[new Date(arr[3] + '-' + arr[2] + '-' + arr[1]).getDay()];
    for (i = 0; i < week.length; i++) {
        if (arr[0].toLowerCase(/^\D/) == week[i]) {
            break;
        }
        if (i == 6) {
            console.log('Wrong Format');
            return;
        }
    }
    arr[1] = parseInt(arr[1], 10);
    arr[2] = parseInt(arr[2], 10);
    arr[3] = parseInt(arr[3], 10);
    arr[4] = parseInt(arr[4], 10);
    arr[5] = parseInt(arr[5], 10);
    arr[6] = parseInt(arr[6], 10);
    if (arr[1] > 31 || arr[1] < 0 || arr[4] > 23 || arr[4] < 0 || arr[5] > 59 || arr[5] < 0|| arr[6] > 59 || arr[6] < 0) {
        console.log('Wrong Format');
        return;
    }
    console.log(Date.UTC(arr[3], arr[2] - 1, arr[1], arr[4] - 1, arr[5], arr[6]) / 1000);
}