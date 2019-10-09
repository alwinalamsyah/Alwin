var express = require('express');
var mysql = require('mysql');
var app = express();

var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'data'
});

connection.connect(function (error) {
    if (!!error) {
        console.log('Error');
    } else {
        console.log('Connected');
    }

});

app.get('/', function (req, resp) {
    connection.query("SELECT * FROM nama", function (error, rows, fields) {
        if (!!error) {
            console.log('Error in the query');
        } else {
            //console.log('Successful Query');
            //console.log(rows.length);
            for (let i = 0; i < rows.length; i++) {
                if (rows[i].Kol !== 0) {
                    Resp.send(rows[i].Nama)
                } 
            }
        }
    });
})


app.listen(1337);