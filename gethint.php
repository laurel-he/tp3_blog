<?php
// 用名字来填充数组
$dsn = "mysql:host=localhost;dbname=tp3";
$db = new PDO($dsn, 'root', 'root');
$rs = $db->query("SELECT user_name FROM think_users");
$result_arr = $rs->fetchAll();

$q=$_GET["q"];

//如果 q 大于 0，则查找数组中的所有提示
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($result_arr); $i++)
    {
    if (strtolower($q)==strtolower($result_arr[$i]['user_name']))
      {
      if ($hint=="")
        {
        $hint=$result_arr[$i]['user_name'];
        }
      else
        {
        $hint=$hint." , ".$result_arr[$i]['user_name'];
        }
      }
    }
  }

// 如果未找到提示，则把输出设置为 "no suggestion"
// 否则设置为正确的值
if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint;
  }

//输出响应
echo $response;
?>
