if (process.argv.length > 2){
    var readline = require('readline');
    var rl = readline.createInterface({
      input: process.stdin,
      output: process.stdout,
      terminal: false
    });
    var linecounter = 0;
    if (process.argv[2] == "average" || process.argv[2] == "moyenne"){
      var numberOfGrades = 0;
      var averageTotal = 0;
  
      rl.on('line', function (line) {
          linecounter++; 
          if (linecounter > 1){
            var temp;
            temp = line.split(";");
            if (temp[2] != "moulinette" && temp[1] !== ''){
              averageTotal += parseInt(temp[1]);
              numberOfGrades++;
            }
          }
      }).on('close', function(){
        console.log((averageTotal / numberOfGrades).toFixed(13));
        })
    }else{
      var users = {};
      var gradeInt = 0;
      
      rl.on('line', function (line) {
        linecounter++; 
        if (linecounter > 1){
          temp = line.split(";");
          !isNaN(parseInt(temp[1])) ? gradeInt = parseInt(temp[1]) : gradeInt = 0;
          if(temp[2] != "moulinette" && temp[1] != ''){
            if (!users[temp[0]]){
              users[temp[0]] = {
                count: 1,
                total: gradeInt,
                moulinette: 0
              }
            } else{
              users[temp[0]].count += 1; 
              users[temp[0]].total += gradeInt;
            }
          } else if (temp[2] == "moulinette"){
            users[temp[0]].moulinette = temp[1];
          }
        }
      }).on('close', function(){
        const ordered = {};
        Object.keys(users).sort().forEach(function(key){
          ordered[key] = users[key];
        });
        if(process.argv[2] == "average_user" || process.argv[2] == "moyenne_user"){ 
          Object.entries(ordered).forEach(function ([key, value]){
            console.log(key + " : " + (value.total / value.count).toFixed(13))
          });
        } else if(process.argv[2] == "moulinette_variance" || process.argv[2] == "ecart_moulinette"){
          Object.entries(ordered).forEach(function ([key, value]){
            console.log(key + " : " + ((value.total / value.count) - value.moulinette).toFixed(13))
          });
      }});
    }
  }