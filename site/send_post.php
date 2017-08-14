<?php
//connecting to sql db.
$connect = mysqli_connect("192.168.2.3", "root", "*", "Membership");

//sending form data to sql db.
mysqli_query($connect, "INSERT INTO Testfile (Tools, case, text, date, time)
VALUES ('$_POST[name]', '$_POST[case]', '$_POST[text]', '$_POST[date]', '$_POST[time]')";
?>

