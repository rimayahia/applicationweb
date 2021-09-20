<?php
                session_start();
                if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
                    //User not logged in. Redirect them back to the login.php page.
                    header('Location: index.php');
                    exit;
                }
                 
                 
                /**
                 * Print out something that only logged in users can see.
                 */
                 //echo $_SESSION['user_id'];
               // echo 'Congratulations! You are logged in!';
            ?>