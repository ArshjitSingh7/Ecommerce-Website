<?php    
        session_start();
        if(isset($_SESSION['name'])) {
            include_once 'dbh.php';
            $userName=$_SESSION['name'];
            $sql="SELECT * FROM {$userName};";
            $result=mysqli_query($conn,$sql);
            $rowsNum=mysqli_num_rows($result);
            $amount=0;
            $output='';
            if($rowsNum>0) {
                while($row=mysqli_fetch_assoc($result)) {
                    $title=$row['title'];
                    $imageUrl=$row['imageUrl'];
                    $price=$row['price'];
                    $quantity=$row['quantity'];
                    $amount += $price*$quantity;
                    $output .= '
                    <div class="checkout-item">
                        <div class="image-container">
                            <img src="'.$imageUrl.'" alt="pic" />
                        </div> 
                        <span class="name">'.$title.'</span>
                        <span class="quantity">
                            <span class="value">'.$quantity.'</span>
                        </span>
                        <span class="price">$'.$price.'</span>
                        <div class="remove-button" id="'.$title.'" >&#10005;</div>
                    </div>
                    ';
                }
            }
//Page: set_cookie.php
//$_SERVER['HTTP_HOST'] = 'http://www.example.com ';
// localhost create problem on IE so this line
// to get the top level domain
setcookie ("site", $amount, time()+3600*24*(2), '/', "localhost", 0 );
// You can change (2) to any negative value (-2) for deleting it. It is number of days for cookie to keep live. Any -ve number will tell browser that it is useless now.

            echo $output;
        }
        