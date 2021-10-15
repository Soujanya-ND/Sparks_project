<!-- TRANSACTION MAIN FILE -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="icon" href="https://th.bing.com/th/id/R.5d9677443120cb18b37d8034b19157f7?rik=U1IBBES7%2bZVEqA&riu=http%3a%2f%2fimages.stockunlimited.net%2fpreview1300%2ftransaction_1315158.jpg&ehk=WrFPJHpsiguRn9sDpcgJssQUiCX8dEo6XkcE97TuoYI%3d&risl=&pid=ImgRaw&r=0"
        type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
   
  
    <link href="transaction.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>

<body>
    <header>
        <img id="icon" src="https://pngimg.com/uploads/bank/bank_PNG5.png" rel="bank_image">
        <h1>The Sparks Bank</h1>
        <h3>welcome to the One-Touch Transaction Bank</h3>
    </header>
    
    <?php
  include 'Navbar.php';
  ?>
    
    <?php
    include 'config.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
?>
 
   

            <style type="text/css">
                button {
                    transition: 1.5s;
                }
                
                button:hover {
                    background-color: #616C6F;
                    color: white;
                }
                nav
            </style>
            </head>


            <div class="container" style="background-color: #b1cce5; margin-top :50px;">
                <h2 class="text-center pt-4">Transfer Money</h2>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-sm">
                            <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center py-2">Id</th>
                                        <th scope="col" class="text-center py-2">Name</th>
                                        <th scope="col" class="text-center py-2">E-Mail</th>
                                        <th scope="col" class="text-center py-2">Balance</th>
                                        <th scope="col" class="text-center py-2">Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
               <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>

</body>

</html>