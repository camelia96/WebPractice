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
    <a href="create.php">Create</a>
    <?php if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?=$_GET['id']?>">Update</a>
    <?php } ?>


      <form action="update_process.php" method="post">
        <input type ="hidden" name = "old_title" value="<?=$_GET['id']?>">
        <p>
          <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
        </p>
        <p>
          <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
        </p>
        <input type="submit" value="제출">

      </form>

  </body>
</html>
