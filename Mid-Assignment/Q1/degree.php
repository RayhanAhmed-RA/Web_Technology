<?php
$degree="";
if(isset($_POST['submit']))
    {
        if(isset($_POST['ssc']))
        {
            echo $_POST['ssc']." ";
        }
        if(isset($_POST['hsc']))
        {
            echo $_POST['hsc']." ";
        }
        if(isset($_POST['bsc']))
        {
            echo $_POST['bsc']." ";
        }
        if(isset($_POST['msc']))
        {
            echo $_POST['msc']." ";
        }
        
    }

print_r($_POST['degree']);
?>

