<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thank you for transacting</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <style>
        .thanks{
            background:url(images/thankyou2.jpeg);
            background-size: cover;
            height: 100vh;
            z-index: -1;
            opacity: 0.5;
            transition: opacity 3s;
        }
        .thanks:hover{
            opacity: 1;
        }
        .text{
            text-align: center;
            color: green;
        }
        .text a{
            margin: 20px;
            background: blue;
            color: white;
            padding:20px;
            text-decoration: none;
            font-size: 1.3em;
            border-radius: 10px;
        }
        .text a:hover{
            background: rgb(161, 214, 75);
            color: blue;
        }
    </style>
</head>
<body>
    
    
    <div class="thanks">
    
    <div class="text">
        <h1>Transaction completed successfully!! <i class="fa fa-check"></i></h1> <br> <br>
        <h3>Thank you for transacting with us!!</h3><br>
        <a href="transfer.php"> Go back and do another transaction</a>
        <a href="index.php"> Go to home page</a>
    </div>
    </div>
</body>
</html>