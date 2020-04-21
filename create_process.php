<?php
  file_put_contents('data/'.$_POST['title'], $_POST['description']);
  header('Location: /index.php?id='.$_POST['title'])
  //웹 어플리케이션의 기능중엔 리다이렉션이라는 기능이 있음. 잘 찾아보셈
?>
