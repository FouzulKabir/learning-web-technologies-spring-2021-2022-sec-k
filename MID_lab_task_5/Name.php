<?php
    if(isset($_POST['submit'])){
        $name = $_POST['myname'];
        $password = $_POST['password'];
        
        if($name == "" || $password == ""){
            echo "Null submission...";
            }
        else{
        echo $name;
        echo "<br>";
        echo $password;
        echo "success";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Input field</title>
</head>
<body>

    <form method="POST" action="email_as_input.php">
        <fieldset>
            <legend>NAME</legend>
            Name: <input type="text" name="myname" value="<?php if(isset($_POST['submit'])){echo $name;} ?>"> <br>
            Password: <input type="password" name="password" value=""> <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>



</html>