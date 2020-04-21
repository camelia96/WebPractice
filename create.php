<?php
  function print_title() {
      if(isset($_GET['id']))
          echo $_GET['id'];
      else
          echo "Welcome";
  }

  function print_description(){
    if(isset($_GET['id']))
      echo file_get_contents("data/".$_GET['id']);
    else {
      echo "hello php";
    }
  }
  function print_list(){
    $list = scandir("./data");

    $i = 0;

    while($i < count($list)){
        if($list[$i] != "." and $list[$i] != "..") {
          echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
      $i = $i + 1 ;
    }
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB<a></h1>
  <!--
    <ol>
      <li><a href="index.php?id=HTML">HTML</a></li>
      <li><a href="index.php?id=CSS">CSS</a></li>
      <li><a href="index.php?id=JavaScript">JavaScript</a></li>
      <li><a href="index.php?id=php">PHP</a></li>
    </ol>
    이부분 php로 바꿔본다.
  -->
    <!-- 1. data 디렉토리에 있는 파일의 목록을 가져와라.
         2. 파일의 목록 하나 하나를 li와 a태그를 이용해서 글목록을 만드세요.
    -->
    <ol>
      <?php
        print_list();
      ?>
    </ol>
    <a href="create.php"></a>
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description" placeholder="Description"></textarea>
      </p>
      <input type="submit" value="제출">

    </form>

    <!--
    <h2>
      <?php
        //print_title();
      ?>
    </h2>
      <?php
        //print_description();
      ?>
    -->
  </body>
</html>
