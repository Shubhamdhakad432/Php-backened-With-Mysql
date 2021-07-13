<?php

    $servername  ='localhost:3307';
    $username = 'root';
    $password = "";
    $dbname = "collage";
    $con = mysqli_connect($servername, $username, $password, $dbname);

    if(! $con)
    {
        echo "server not connected";
    }

    else
    {
        echo "server is connected\n\n" ;
    }

    if (! mysqli_select_db($con, $dbname))    
    {
        echo "database not connected";
    }

    $Age = $_POST ['age'];
    $query = "SELECT * FROM student WHERE age = $Age";
    $result =  mysqli_query ($con, $query);

?>

<html>

<head> </head>

<body>
    <?php
        while($row = mysqli_fetch_assoc($result))
        echo "\n\nRoll Number : " . $row['rollno'] ."   ". " Name : " . $row['fname'] ."  ". "Age : " . $row['age'] ."  ". "Score : " . $row['score']."  ";
    ?>
</body>

</html>