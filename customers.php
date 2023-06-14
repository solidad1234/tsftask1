<?php
    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'tsftask1');
    $sql= "SELECT * FROM customer" ;
    $featured=$conn->query($sql);
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>customers</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <style>
            table{
                width: 100%;
                text-transform: capitalize;
                font-size: 20px;
                background-color: aquamarine;
            }
            td{
                background-color: rgb(201, 124, 119);
                border: 1px solid black;
            }
            tr{
                height: 50px;
            }
            th{
                border: 1px solid palevioletred;
            }
            .tr1:hover{
                height: 80px;
                background-color: white;
                color: black;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><i class="fa fa-bank"></i> Digital Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-20 mb-2 lg-2">
                <li class="nav-item active">
                    <a class="nav-link" href="home.html">Main Page <span class="sr-only">(current)</span></a>
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
    <table>
     <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>current balance</th>
        </tr>
    </thead>
    <tbody>
     <?php
     
     while($row=mysqli_fetch_array($featured)){ ?>
     
        <tr class="tr1">
            <td><?=$row['name'];?></td>
            <td><?=$row['email'];?></td>
            <td>Ksh <?=number_format($row['current_balance']);?> /-</td>
        </tr>
        <?php } ?>
        </tbody>
     </table>
        
    </body>
</html>