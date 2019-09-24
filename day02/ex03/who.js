const { spawn } = require('child_process');
w = spawn('w', ['-h']);
d = spawn('date');

w.stdout.on('data', function(data) {
    var t1 = data.toString().split(/\s+/);
    d.stdout.on('data', function(data) {
        var t2 = data.toString().split(/\s+/);
        for (var i = 0; i * 6 < t1.length - 1; i++) {
            if (t1[i * 6] != 'kilkim') {
                break;
            }
            if (i == 0) {
                process.stdout.write(t1[i * 6] + '   ' + t1[i * 6 + 1] + '  ');
            }
            else {
                process.stdout.write(t1[i * 6] + '   ' + 'tty' + t1[i * 6 + 1] + '  ');
            }
            process.stdout.write(t2[1] + ' ' + t2[2]);
            process.stdout.write(' ' + t1[i * 6 + 3] + '\n');
        }
    });
});