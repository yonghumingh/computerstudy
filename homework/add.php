<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php     
    $number=$_POST['number'];
    $name=$_POST['name'];
    $time=$_POST['time'];
    $beizhu=$_POST['beizhu'];
    $link=mysqli_connect('localhost','root','123456','flower');
    if (!$link) 
    {  
        printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error()); 
        exit; 
    }
    else
    { 
        echo ('数据库连接上了！')."<br/>";   /* Close the connection 关闭连接*/
    }

    mysqli_query($link,'set names utf8'); 
    $sql1 = "INSERT INTO mydata(number,name,time,beizhu) VALUES($number,'{$name}','{$time}','{$beizhu}')";
    $result1=mysqli_query($link,$sql1);
  if($result1){
      echo  "插入数据到数据库成功";
      mysqli_free_result($result1);
 }else{
    echo  "插入数据到数据库失败";
 }
 mysqli_close($link);
   ?>

</body>
</html>