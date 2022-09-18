<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style type="text/css">
        div{
            color: blue;
            text-align: center;
            align-items: center;
        }
        

    </style>
</head>
<body>
    <div >
           <h2><?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?></h2>
    
    <img src="./images/iare1.jpg" width="700px" height="400px"><br><br>
    <button><a href="logout.php">Logout</a></button>
    </div>
</body>
</html>