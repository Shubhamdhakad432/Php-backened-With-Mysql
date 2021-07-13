<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Complete</title>
    <style>
        .return-box{
            /* border: 4px solid red; */
            margin-left: 50px;
        }
    </style>
</head>
    
    <body>
    <?php
        $servername ='localhost:3307';
        $username = 'root';
        $password="";
        $dbname = "collage";
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        //mysqli_connect give true and false value

        if (!$con)
        {
            echo "server not connected";
        }
        else
        {
            echo"server is connected";
        }    

        //uper code only for connect with server

        if (!mysqli_select_db($con, $dbname)) 
        {
            echo "database not connected";
        }

        $RollNo = $_POST['rollno'];
        $Name = $_POST ['username'];
        $Age = $_POST['age'];
        $Score = $_POST ['score'];
        $query = "INSERT INTO student(rollno,fname,age,score) VALUES('$RollNo', '$Name', '$Age', '$Score' )";
        
        if ( !mysqli_query($con, $query))
        {
            echo "data inserted scuccessfully";
        }?>
    <div class="return-box">
        <a href="form.php" class="box">Return</a>
    </div>
</body>
</html>