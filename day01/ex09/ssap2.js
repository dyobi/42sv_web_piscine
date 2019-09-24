var arr = process.argv;

if (process.argv.length > 2) {
    var temp = arr[2]
    for (var i = 3; i < process.argv.length; i++) {
        temp = temp + ' ' + arr[i];
    }
    temp = temp.trim().split(/\s+/).sort();
    temp.sort((a, b) => {
        for (var i = 0; a[i] && b[i]; i++)
        {
            if(a[i] != b[i]) {
                if(a[i].match(/[a-zA-Z]/) && !b[i].match(/[a-zA-Z]/))
                    return (-1);
                else if(!a[i].match(/[a-zA-Z]/) && b[i].match(/[a-zA-Z]/))
                    return (1);
                else if(a[i].match(/[0-9]/) && !b[i].match(/[0-9]/))
                    return (-1);
                else if(!a[i].match(/[0-9]/) && b[i].match(/[0-9]/))
                    return (1);
                else if(a[i].toLowerCase() >= b[i].toLowerCase())
                    return (1);
                else
                    return (-1);
            }
        }
    });
    for (i = 0; i < temp.length; i++) {
        console.log(temp[i]);
    }
}