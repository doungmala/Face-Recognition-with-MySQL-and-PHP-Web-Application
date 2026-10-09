<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("dno6xji1n8fm828n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "ioax91eaxfvkxffz", "aegm1e6vrtij4gtl", "nqlbwot8kpwvvb06");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM wh";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>id_emp</th>";
                echo "<th>name</th>";
                echo "<th>subname</th>";
                echo "<th>time_in</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['id_emp'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['subname'] . "</td>";
                echo "<td>" . $row['time_in'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>