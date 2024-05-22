<?php
session_start();
if(isset($_SESSION['username'])){
    echo "Xin chào " . $_SESSION['username'];
} else {
    header("Location: amazon.php");
}
?>
