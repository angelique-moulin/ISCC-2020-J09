
<?php
 session_start();
?>


 <html>
 <p>
    <?php
        if (isset($_POST['user_password']))
        {
            if ($_POST['user_password'] == "2020")
            {
                $_SESSION["id"]=$_POST['user_login'];
                setcookie("id", $_SESSION["id"]);
                header('location:http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/connexion');
                exit();
            }
            else 
            {
                echo "Sorry it's not the good password/user name";
            }
        }
    ?>
</p>

<html>
