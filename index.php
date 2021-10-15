<!<!-- index(home)page file -->
<!DOCTYPE html>
<html lang="eng">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <Title>The Spark Bank</Title>
    <link rel="icon" href="https://pngimg.com/uploads/bank/bank_PNG5.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
   
</head>

<body>
    
        <header>
            <img id="icon" src="https://pngimg.com/uploads/bank/bank_PNG5.png" alt="bank_image"> 
            <h1>The Sparks Bank</h1>
            <h3>welcome to the One-Touch Transaction Bank</h3>

        </header>

<?php
  include 'Navbar.php';
  ?>

       

        <main>
            <img id="user" src="https://th.bing.com/th/id/R.9793a007548d85f7cae3369ac9ac2d41?rik=VR0GI%2fAuT3M%2fRg&riu=http%3a%2f%2ficongal.com%2fgallery%2fimage%2f54583%2fadministrator_man_business_man_business_user_male.png&ehk=wBLJ3SuL5leV29uhoI6j%2f6331ORjr2lKs2ma7DvtMJ8%3d&risl=&pid=ImgRaw&r=0"
                alt="user_image">
            <img id="tran" src="https://cdni.iconscout.com/illustration/premium/thumb/online-payment-with-mobile-2645883-2218295.png" alt="transaction_img">

            <a href="create.php"><Button type="button" name="Create Useraccount" id="use" class="Button">Create User</Button></a>

            <a href="transaction.php"><button type="button" name="transaction" id="trans" class="Button">Transaction</button></a>

        </main>


        <footer>
            <hr class="solid">
            <p id="firstpara">&#128151;&nbsp;With Love By <span>Soujanya.N.D </span>
            </p>

            <p id="secondpara">&copy; terms and conditions apply*
            </p>

        </footer>

</body>

</html>