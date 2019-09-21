# Bootcamp Arkademy Batch 12-4
---
Soal 1
---
Pada tugas pertama, saya membuat sebuah tipe data object **JSON** seperti pada dicontoh dengan menggunakan bahasa javascript
```
{
"name": "Muhammad Alwin Alasmyah Handoko Putra",
"age": 24,
"address": "Jalan Sunan Bayat Blok O8 No. 24, Bekasi",
"hobbies": ["Music","Desain","Fotografi"],
"is_married": FALSE,
...
}
```
dimana **JSON** mempunyai kegunaan yaitu untuk mentransmisikan data dari WEB API/*Server*
menuju ke *client* atau sebaliknya.

Soal 2
---
Pada tugas kedua, saya membuat variable yang berisi batasan value pada **var lowerc** dan **var leng** untuk mengetahui berapa jumlah *char* pada suatu *string*.
Dapat dilihat pada contoh function;
```
function is_username_valid(username){
    var lowerc=/[a-z]/g;
    var leng=username.length;
    ...
 ```
 
 lalu saya membuat aturan dimana ketika pada variable user mempunyai jumlah char lebih dari sama dengan 5 atau kurang dari sama dengan 9, maka username telah berhasil untuk dimasukkan. dapat dilihat seperti pada contoh:
 ```
 ...
 if(leng>=5&&leng<=9&&username.match(lowerc).length==leng)
    {
    return true;
    console.log("Username Benar");
    }
else{
    return false;
    }
...
```
Hal ini juga berlaku dalam pembuatan password, dapat dilihat sbg:
```
...
function is_password_valid(password){
    var lowerc=/[a-z]/g;
    var upperc=/[A-Z]/g;
    var no=/[0-9]/g;
    var spesialc=/[_#@!%$&]/g;

if(password.length==10&&lowerc.test(password)&&upperc.test(password)&&no.test(password)&&specialc.test(password))
    {
        return true;
        console.log("Password Berhasil");
    }
else
    {
        return false;
    }
}
var name=is_username_valid("alwin");
var pass=is_username_valid("aLw1n@lams");
console.log(name);
console.log(pass);
```

Soal 3
---
Pada soal ketiga, saya menggunakan bahasa C++ dimana saya memberikan perintah **scanf()** untuk memasukkan jumlah orang yang bersalaman
```
...
printf("Masukkan nilai jumlah = ");
scanf("%d",&a);
...
```
lalu dapat dilihat dari proses looping untuk mengetahui berapa kali orang tersebut bersalaman dengan kombinasi yang unik
```
...
for(i=1;i<a;i++){
b=b+i;
}
printf("%d",b);
}
...
```

Soal 4
---
Pada soal ini, saya memakai bahasa C++ dimana saya memberikan inputan untuk memberikan batasan *Row* dan *Column* nya dengan manual
```
...
printf("Masukkan nilai baris = ");
scanf("%d",&c);
printf("Masukkan nilai kolom = ");
scanf("%d",&d);
...
```
dan untuk menampilkan dilayar sesuai dengan jumlah *Row* dan *Column* nya, maka saya mebuat looping di dalam looping.
yang dimana looping pertama untuk jumlah barisnya sedangkan looping kedua berguna untuk membatasi jumlah kolom kesamping.
```
...
for(i=0;i<c;i++)
    {
    for(j=0;j<d;j++)
        {
            if(e==0)
                {
                printf("%d,",a);
                e++;
                }
            else if(e==1)
                {
                printf("%d,",b); 
                e++;
                }
            else 
                { 
                printf("%d,",b);  
                f=b+a;
                a=b;  
                b=f;
                }
        }
          printf("\n"); //untuk spasi
    }
     
}

Soal 5
---
?

Soal 6A
---
Disini saya mencoba untuk membuat query untuk membuat sebuah table dan isi data pada table dengan menggunakan PHP, dimana database yang bernama **data** sudah dibuat terlebih dahulu pada PHPmyadmin
sebelumnya saya membuat koneksi untuk menghubungkan client ke server
```
<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "data";
$koneksi=new mysqli($host,$username,$password,$db);
if($koneksi->connect_error){
    die("koneksi gagal");
}
?>
```
Lalu saya membuat tabel dan data sebagai berikut
```
...
$sql= "CREATE TABLE nama(
    id int PRIMARY KEY,
    name varchar[50],
    id_work int,
    id_salary int
    )";
...
...
$sql= "INSERT INTO nama(
    id,
    name,
    id_work,
    id_salary
    ) VALUE(
    ['1','2'],
    ['Bintang','Tasya'],
    ['1','2'],
    )";
...
```
