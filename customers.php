<?php
    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'tsftask1');
    $sql= "SELECT * FROM customer" ;
    $featured=$conn->query($sql);
    $customerId=0;
    $query="SELECT * FROM customer WHERE customer_id=$customerId ";
    $result=mysqli_query($conn,$query);
    $customerId1=1;
    $q="SELECT * FROM customer WHERE customer_id=$customerId1";
    $result1=mysqli_query($conn,$q);
    $customerId2=2;
    $q2="SELECT * FROM customer WHERE customer_id=$customerId2";
    $result2=mysqli_query($conn,$q2);
    $customerId3=3;
    $q3="SELECT * FROM customer WHERE customer_id=$customerId3";
    $result3=mysqli_query($conn,$q3);
    $customerId4=4;
    $q4="SELECT * FROM customer WHERE customer_id=$customerId4";
    $result4=mysqli_query($conn,$q4);
    $customerId5=5;
    $q5="SELECT * FROM customer WHERE customer_id=$customerId5";
    $result5=mysqli_query($conn,$q5);
    $customerId6=6;
    $q6="SELECT * FROM customer WHERE customer_id=$customerId6";
    $result6=mysqli_query($conn,$q6);
    $customerId7=7;
    $q7="SELECT * FROM customer WHERE customer_id=$customerId7";
    $result7=mysqli_query($conn,$q7);
    $customerId8=8;
    $q8="SELECT * FROM customer WHERE customer_id=$customerId8";
    $result8=mysqli_query($conn,$q8);
    $customerId9=9;
    $q9="SELECT * FROM customer WHERE customer_id=$customerId9";
    $result9=mysqli_query($conn,$q9);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>customers</title>
        <link rel="stylesheet" href="index.css">
        <style>
            table{
                width: 100%;
                text-transform: capitalize;
                font-size: 20px;
                background-color: aquamarine;
            }
            .tr1{
                background-color: palevioletred;
            }
            tr{
                height: 50px;
            }
            th{
                border: 1px solid palevioletred;
            }
            td:hover{
                height: 80px;
            }
        </style>
    </head>
    <body>
    <?php
        if($result):
            $row=mysqli_fetch_assoc($result);
            if($row):
                ?>
        <table>
            <thead>
                <th>name</th>
                <th>email</th>
                <th>balance</th>
            </thead>
            <tr class="tr1">
                <td><?= $row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['current_balance']?></td>
            </tr>
            <?php endif?>
        <?php endif ?>
        <?php
        if($result1):
            $row=mysqli_fetch_assoc($result1);
            if($row)
            ?>
            <tr>
                <td><?= $row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['current_balance']?></td>
            </tr>
            <?php endif?>
            <?php
            if($result2):
            $row=mysqli_fetch_assoc($result2);
            if($row)
            ?>
            <tr class="tr1">
                <td><?= $row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['current_balance']?></td>
            </tr>
            <?php endif?>
            <?php
            if($result3):
            $row=mysqli_fetch_assoc($result3);
            if($row)
            ?>
            <tr>
                <td><?= $row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['current_balance']?></td>
            </tr>
            <?php endif?>
            <?php
            if($result4):
            $row=mysqli_fetch_assoc($result4);
            if($row)
            ?>
            <tr class="tr1">
                <td><?= $row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['current_balance']?></td>
            </tr>
            <?php endif?>
            <?php
            if($result5):
            $row=mysqli_fetch_assoc($result5);
            if($row)
            ?>
            <tr>
                <td><?= $row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['current_balance']?></td>
            </tr>
            <?php endif?>
            <?php
            if($result6):
            $row=mysqli_fetch_assoc($result6);
            if($row)
            ?>
            <tr class="tr1">
                <td><?= $row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['current_balance']?></td>
            </tr>
            <?php endif?>
            <?php
            if($result7):
            $row=mysqli_fetch_assoc($result7);
            if($row)
            ?>
            <tr>
                <td><?= $row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['current_balance']?></td>
            </tr>
            <?php endif?>
            <?php
            if($result8):
            $row=mysqli_fetch_assoc($result8);
            if($row)
            ?>
            <tr class="tr1">
                <td><?= $row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['current_balance']?></td>
            </tr>
            <?php endif?>
            <?php
            if($result9):
            $row=mysqli_fetch_assoc($result9);
            if($row)
            ?>
            <tr>
                <td><?= $row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['current_balance']?></td>
            </tr>
            <?php endif?>
        
        </table>
       
        <!--
        <br>
        <table>
            <thead>
                <th>name</th>
                <th>email</th>
                <th>balance</th>
            </thead>

        <?php
        if($dbcon):
           // $counter=1;
            while($rw=mysqli_fetch_assoc($dbcon)):
            
         ?>
               
            <tr>
                <td><?= $rw['name']?></td>
                <td><?=$rw['email']?></td>
                <td><?=$rw['current_balance']?></td>
            </tr>
            <tr>
                <td><?= $rw['name']?></td>
                <td><?=$rw['email']?></td>
                <td><?=$rw['current_balance']?></td>
            </tr>
            
        </table>
            <?php 
            endwhile?>
        <?php endif?>
        <?php
        mysqli_close($conn);
        ?>-->
        
    </body>
</html>