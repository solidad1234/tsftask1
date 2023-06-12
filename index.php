<?php
    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'tsftask1');
    $sql= "SELECT * FROM customer" ;
    $featured=$conn->query($sql);
    $customerId=1;
    $query="SELECT * FROM customer WHERE customer_id=$customerId";
    $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Basic banking website</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><i class="fa fa-bank"></i> Digital Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 lg-2">
                <li class="nav-item active">
                    <a class="nav-link" href="index2.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        View
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="customers.php">Customers</a>
                        <a class="dropdown-item" href="transfer.php">Transfer funds</a>
                        <div class="dropdown-divider"></div>
                        
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-g">
        <div class="row">
            <h2 class="text-center">convenient banking here...</h2> <br> <br>
            

        </div>
        </div>
       
    </div>
</body>
</html>
