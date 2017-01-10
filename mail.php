<?php
  if (isset($_POST['zminnaname'])) {$zminnaname = $_POST['zminnaname'];}  
  if (isset($_POST['zminnaemail'])) {$zminnaemail = $_POST['zminnaemail'];} 

  $to = "kvdvadim@meta.ua";
  $subject = $zminnaname ;
  $message = "Це тестове завдання!!!</i>";
  $headers =  $zminnaemail;
  mail ($to,$subject, $message, $headers);
if ($subject ){
    echo "Лист успішно відправленно на kvdvadim@meta.ua працює методом ajax";
} else {echo "Помилка відправки, перевірти чи заповнені всі поля";};    
    
?>