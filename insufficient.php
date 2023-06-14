<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Insufficient amount</title>
    <style>
        .error{
            text-align: center;
            color: red;
            background: url(images/error.jpeg);
            background-size: cover;
            height: 100vh;
            z-index: -1;
        }
        .error a{
            margin: 20px;
            background: blue;
            color: white;
            padding:20px;
            text-decoration: none;
            font-size: 1.3em;
            border-radius: 10px;
        }
        .error a:hover{
            background: rgb(161, 214, 75);
            color: blue;
        }
    </style>
</head>
<body>
    <div class="error">
        <h1>Transaction failed!! <i class="fa fa-times"></i></h1><br>
        <h2 style="color: white;">Insufficient funds in your account! Please try a lower amount.</h2><br>
        <a href="transfer.php"> Go back and do another transaction</a>
        <a href="index.php"> Go to home page</a>
    </div>
</body>
</html>