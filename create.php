

<!-- CREATE USER MAIN FILE -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create User</title>

    <link rel="icon" href="https://image.flaticon.com/icons/png/512/303/303653.png" type="image/x-icon">


    <link rel="stylesheet" type="text/css" href="create.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

</head>

<body>
    <header>
        <img id="icon" src="https://pngimg.com/uploads/bank/bank_PNG5.png" alt="bank_image">
        <h1>The Sparks Bank</h1>
        <h3>welcome to the One-Touch Transaction Bank</h3>
    </header>
    
    <?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into user(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User has been created');
                               window.location='transaction.php';
                     </script>";
                    
    }
  }
?>
   <?php
  include 'navbar.php';
  ?>

    <div class="container">

        <div class="screen">

            <div class="screen-header"></div>

            <div class="screen-body">

                <div class="screen-body-item left">
                    <img class="img-fluid" src="https://www.deviceinnovation.com/images/editor/i_con/m2.png" style="border: none; border-radius: 50%;">
                </div>

                <div class="screen-body-item">
                    <form class="app-form" method="post">

                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                        </div>

                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                        </div>

                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                        </div>

                        <br>

                        <div class="app-form-group button">
                            <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                            <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>