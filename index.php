        <?php
            include("connection.php");
        ?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SignUp page</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        </head>
        <body class="bg-black">
            <form class="row g-3 justify-content-center align-items-center m-5 p-5 bg-dark" name="form" action="index.php" method="POST">
                <h1 class="text-light d-flex justify-content-center mb-5">Sign Up Here..!</h1>
                <div class="form-floating col-md-5">
                    <input type="text" class="form-control" id="floatingText" placeholder="Name" name="name" required>
                    <label for="floatingText">Name</label>
                </div>
                <div class="form-floating col-md-5">
                    <input type="number" class="form-control" id="floatingNumber" placeholder="Number" name="phone" required>
                    <label for="floatingNumber">Phone Number</label>
                </div>
                <div class="form-floating col-md-5">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating col-md-5">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating col-md-10">
                    <input type="text" class="form-control" id="floatingText" placeholder="Address" name="address" required>
                    <label for="floatingText">Address</label>
                </div>
                <div class="col-10 col-s-12">
                    <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
                    <a href="login.php" class="ms-2 text-decoration-none">Already Registered, Click Here >> </a>
                </div>
    </form>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name']; 
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    
    $check="SELECT * FROM users WHERE email='$email'";
    $mail=mysqli_query($conn,$check);
    $result=mysqli_num_rows($mail);

    if($result==0){
        $sql="INSERT INTO users(name,email,password,address,phone) VALUES ('$name','$email','$password','$address','$phone')";
        $res=mysqli_query($conn,$sql);
        if($res){
           echo '<script>
           window.location.href="login.php";
           alert("Registered Successfully !!!!");
           </script>';
        }
    }
    else{
        echo '<script>
       window.location.href="index.php";
       alert("User already exist !!!!");
       </script>';
    }
}
?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        </body>
        </html>