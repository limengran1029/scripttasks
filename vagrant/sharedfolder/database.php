<?php
// Create connection
$database = "test";
$conn = mysqli_connect("localhost", "root", "root");

// Check connection
if ( !$conn ) {
        die('Connection fails: ' . mysqli_error($conn));
}
echo "Connected successfully"."<br>";

// Create database
$sql = 'CREATE DATABASE DevOps18';
$retval = mysqli_query($conn,$sql );
if(! $retval )
{
    die('Database creating fails: ' . mysqli_error($conn));
}
echo "Database creating sucessful"."<br>";

// Show database
echo "Show databases:"."<br>";
$set="SHOW DATABASES";
if (!($result=mysqli_query($conn,$set))) {
        printf("Error: %s\n", mysqli_error($conn));
    }

while( $row = mysqli_fetch_row( $result ) ){
        if (($row[0]!="information_schema") && ($row[0]!="mysql")) {
            echo $row[0]."<br>";
        }
    }

// Close connection
mysqli_close($conn);
?>
