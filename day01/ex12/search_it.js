var arr = process.argv;

if (process.argv.length < 4) {
    return;
}
var temp = arr[3].trim().split(':');
if (!arr[3].match(':')) {
    temp = temp.concat('');
}
for (var i = 4; i < process.argv.length; i++) {
    temp = temp.concat(arr[i].trim().split(':'));
    if (!arr[i].match(':')) {
        temp = temp.concat('');
    }
}
for (i = temp.length - 1; i > -1; i--) {
   if (temp[i] === (arr[2].trim())) {
      console.log(temp[i + 1]);
       return;
   }
}