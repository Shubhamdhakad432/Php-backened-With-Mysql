<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <style>
    body{
        background-image: url('1.jpg');
    }
    .navbar {
        background-color: black;
        border-radius: 90px;
    }

    .navbar ul {
        overflow: hidden;
    }

    .navbar li {
        float: left;
        list-style: none;
        margin: 20px 37px;
    }

    .navbar li a {
        text-decoration: none;
        color: white;
        padding: 12px 12px;
        margin: 12px 12px;
        border-radius: 12px;
    }

    .navbar li a:hover {
        background-color: blanchedalmond;
    }

    .search {
        float: right;
        color: white;
        padding: 19px 80px;
    }

    .navbar input {
        border: 4px solid black;
        border-radius: 8px;
        padding: 5px 40px;
    }

    .submit {
        padding: 8px 180px;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 20px 0;
        font-size: 1.056rem;
        border-radius: 59px;
        font-family: 'Josefin Sans', sans-serif;
        font-weight: 900;
        margin-bottom: 50px;
        background-color: rgb(8, 8, 8);
        border: 1px solid rgb(219, 82, 201);
        color: white;
        font-family: 'Baloo Bhai 2', cursive;
    }

    #name {
        padding: 8px 89px;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 5px 0;
        font-size: 0.9rem;
        border: 1px solid rgb(219, 82, 201);
        border-radius: 59px;
        font-family: 'Josefin Sans', sans-serif;
        font-weight: 900;
        font-size: 1.056rem;
        background-color: white;
        font-family: 'Baloo Bhai 2', cursive;
    }

    #contact {
        height: 436px;
        margin-top: 100px;
    }

    #contact-box {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .bloc {
        color: white;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul type="sqaure">
                <li><a href="form.php">Form</a></li>
                <li><a href="roll_number.php">RollNo</a></li>
                <li><a href="give_name.php">Name</a></li>
                <li><a href="age.php">Age</a></li>
                <li><a href="give_score.php">Score</a> </li>
            </ul>
        </nav>
    </header>

    <section id="contact">
        <div id="contact-box">
            <form action="oldscore.php" method="post">
                <div class="form-group">
                    <div class="bloc">Score</div>
                    <input type="number" name="score" id="name" placeholder="Enter your Score">
                </div>
                <button class="submit">Submit</button>
            </form>
        </div>
    </section>


</body>

</html>