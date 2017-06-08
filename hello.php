<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
if( !isset($_GET['id'],$_GET['name']) ||
  strlen($_GET['id']) == 0 ||
  strlen($_GET['name']) == 0
)
{
  echo 'Missing Data';
}
else //成り立たなかった場合
{
print $_GET['id'];
print ('の');
print $_GET['name'];
print ('さん、こんにちは');
  }

?>


  </body>
</html>
