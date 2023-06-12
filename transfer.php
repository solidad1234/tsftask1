<?php
    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'tsftask1');
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $senderEmail=$_POST['senderEmail'];
        $recepientEmail=$_POST['recepientEmail'];
        $amount=$_POST['amount'];
        $senderQuery="SELECT current_balance FROM customer WHERE email='$senderEmail'";
        $sendResult=mysqli_query($conn,$senderQuery);
        $senderRow=mysqli_fetch_assoc($sendResult);
        $senderBalance=$senderRow['current_balance'];
        if($senderBalance>=$amount){
            $newSenderBalance=$senderBalance - $amount;
            $updateSenderQuery="UPDATE customer SET current_balance='$newSenderBalance' WHERE email='$senderEmail'";
            mysqli_query($conn,$updateSenderQuery);
            //update receiver balance
            $receiverQuery="SELECT current_balance FROM customer WHERE email='$recepientEmail'";
            $receiverResult=mysqli_query($conn,$receiverQuery);
            $receiverRow=mysqli_fetch_assoc($receiverResult);
            $receiverBalance=$receiverRow['current_balance'];
            $newReceiverBalance=$receiverBalance + $amount;
            $updateReceiverQuery="UPDATE customer SET current_balance='$newReceiverBalance' WHERE email='$recepientEmail'";
            mysqli_query($conn,$updateReceiverQuery);
            //insert transaction record
            $insertTransactionQuery="INSERT INTO transfers(sender_email,recepient_email,amount) VALUES('$senderEmail','$recepientEmail','$amount')";
            mysqli_query($conn,$insertTransactionQuery);

            echo "Transaction successful!!\n Do another transaction";
        }
        else{
            $errorMessage="Insufficient balance. Please try a lower amount!";
            echo $errorMessage;
        }
    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>funds transfer</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
       <link rel="stylesheet" href="transfer.css">
       
    </head>
    <body>
        <?php if(isset($errorMessage)):?>
            <p style="color:red"><?php $errorMessage ?></p>
        <?php endif ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <label for="senderEmail">Sender Email <i class="fa fa-envelope"></i></label>
            <input type="email" name="senderEmail" > <br>
            <label for="recepientEmail">Recepient Email <i class="fa fa-envelope"></i> </label>
            
            <input type="email" name="recepientEmail"><br>
            <label for="amount">Amount <i class="fa fa-money" style="font-size: 1.5em"></i></label>
            <input type="number" name="amount"><br> 
            <button type="submit"> Transfer funds <i class="fa fa-send"></i></button>
            
        </form>
    </body>
</html>