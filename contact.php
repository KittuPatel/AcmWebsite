<?php 
include 'db.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if ($name != null && $email != null && $message != null) {
        $q = $db->query("INSERT INTO messages(name,email,message) VALUES('$name','$email','$message')");
        if ($q) {
            header("Location: thanks.html");
        }
    }else{
        echo "<script>alert('All Feilds are mandatory');</script>";
    }

}

?>