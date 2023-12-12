<?php
$localhost = "localhost";
$user = "Anik1234";
$password = "Anik1234@";
$Db = "anik";
$conn = new mysqli($localhost, $user, $password, $Db);

// if($conn->connect_error){
// die("Connected faild");
// }else{
//     echo"Connected successfully";
// }

#create database

// $sql="CREATE DATABASE anik";
// $conn->query($sql);

# create table

// $sql="CREATE TABLE myGuests(
//     id int (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     Fastname varchar(20)NOT NULL,
//     Lastname varchar(20)NOT NULL,
//     Email varchar(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// $conn->query($sql);

#insert values

// $sql= "INSERT INTO myGuests(Fastname,Lastname,Email)
//  VALUES('Arif','HASSAN','Arif@gmail.com')";
//  $conn->query($sql);

#select database

// $sql = "SELECT * FROM myGuests";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//    while($row = $result->fetch_assoc()){
//     echo $row['Fastname']." ".$row['Lastname']." ".$row['Email']."<br>";
//    }
// } else {
//     echo "no result found";
// }
#update column
// $sql="UPDATE myGuests SET Fastname='adiv' WHERE ID=1";
$sql ="DELETE FROM myGuests WHERE id=2";
if($conn->query($sql)===TRUE){
    echo "delete data";
}else{
    echo"not delete";
}
$conn->close();
