<?php
$insert = false;
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
    $conn = mysqli_connect($server,$username,$password);
    if(!$conn){
        die("connection failed" . mysqli_connect_error());
    }
    //echo "Success. Connected to the db";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO trip.trip (name,age,gender,email,phone,other,dt) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

    //echo $sql;
    if($conn->query($sql)== true){
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }
    $conn->close();
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="manali.jpg" alt="bg img" class="bg">
    <div class="container">
        <h1>Welcome to travel form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>

        <form action="form.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text " name="age" id="age" placeholder="Enter ypur age"> 
            <input type="text " name="gender" id="gender" placeholder="Enter ypur gender"> 
            <input type="email" name="email" id="email" placeholder="Enter your email"> 
            <input type="tel" name="phone" id="phone" placeholder="Enter your mobile no"> 
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="index.js"></script>
    <!---->
</body>
</html>