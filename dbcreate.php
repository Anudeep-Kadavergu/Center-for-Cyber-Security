<?php 
$connection = mysqli_connect("localhost", "root", "root");
$sql="CREATE DATABASE project1";
if (mysqli_query($connection, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($connection);
}
$connection = mysqli_connect("localhost", "root","", "cybersecurity");

/* tbl_course*/
$sql="CREATE TABLE tbl_news(file varchar(200),type varchar(10),size varchar(20),ndate date,news varchar(100),link varchar(50))";
mysqli_query($connection, $sql);

/*tbl_events*/
$sql="CREATE TABLE tbl_event(file varchar(50),type varchar(10),size varchar(20),title varchar(50),content varchar(100))";
mysqli_query($connection, $sql);
    
$sql="CREATE TABLE tbl_maintheme(title varchar(20),image varchar(20),content varchar(20),document(50))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_Latestprojects(content varchar(20),image varchar(20),title varchar(20))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_faculty(priority varchar(30),name varchar(20),category varchar(30),hno varchar(30),street varchar(30),city varchar(20),district varchar(30),pin varchar(10),state varchar(20),phno varchar(20),security varchar(30),hacking varchar(50),networking varchar(30),co varchar(30),faculty_id varchar(30),password varchar(20),proexp varchar(1000),admres varchar(1000))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_subscribe(email varchar(30))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_docs(file varchar(100),type varchar(50),size varchar(50),title varchar(50))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_course(course varchar(20),link varchar(50),category varchar(50))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_patents(cbr varchar(30),appno varchar(30),title varchar(30),content varchar(100))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_pgprojects(file varchar(50),type varchar(30),size varchar(50),title varchar(30),faculty varchar(30))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_rdprojects(file varchar(50),type varchar(30),size varchar(50),title varchar(30),faculty varchar(30))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_ugprojects(file varchar(50),type varchar(30),size varchar(50),title varchar(30),faculty varchar(30))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_uploads(file varchar(50),type varchar(30),size varchar(50),title varchar(30),date_d date,subject varchar(30),head varchar(50),mail varchar(50),faculty_id varchar(30))";
mysqli_query($connection,$sql);

$sql="CREATE TABLE tbl_login(user varchar(50),value varchar(30))";
mysqli_query($connection,$sql);
?>	




