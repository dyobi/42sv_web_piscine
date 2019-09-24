var fs = require('fs');

if (process.argv.length < 3) {
    console.log('Usage : node magnifying_glass.js FILE.')
}
else {
    var arr = process.argv[2];
    fs.readFile(arr, function read(err, data) {
        if (err) {
            console.log('Put the valid file.');
            return;
        }
        var content = data.toString();
        var a_tag = content.match(/title="(.*)">/g);
        for (var i = 0; i < a_tag.length; i++) {
            var t1 = a_tag[i].match(/title="(.*)">/)[1];
            var t2 = t1.toUpperCase();
            content = content.replace(a_tag[i], a_tag[i].replace(t1, t2));
        }
        a_tag = content.match(/<a.*?>(.*?)<|<span.*?>(.*?)<|>(.*)<\/span>|">\s+?(\w+?.*?)\s*?</g);
        for (i = 0; i < a_tag.length; i++) {
            var m1 = (a_tag[i].match(/>\s*(.*?)\s*</)[1]);
            var m2 = m1.toUpperCase();
            content = content.replace(a_tag[i], a_tag[i].replace(m1, m2));
        }
        console.log(content);
    });
}