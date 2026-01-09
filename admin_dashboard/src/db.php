<?php
try{$conn = mysqli_connect("localhost", "root", "", "historyproject");}
catch(mysqli_sql_exception){
    echo "could not connect";
}

if ($conn) {
    echo "You are connected!";
}
?>