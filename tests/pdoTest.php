<?php

try{
  $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=laravel;charset=UTF8;';
  $pdo = new PDO($dsn, 'root', '');
  // var_dump($pdo);
} catch (PDOException $e) {
  echo $e->getMessage();
}

$pdo->exec('SET NAMES UTF8');

$pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/* 
// 创建表
try{

  $create_sql = 'create table books( id INT NOT NULL AUTO_INCREMENT, title varchar(125) NOT NULL, author varchar(125) NOT NULL, add_time INT(11) NOT NULL, primary key(id) )';
  $statement = $pdo->prepare($create_sql);
  $statement->execute();
  
} catch (PDOException $e) {
  print_r($e->getMessage());
}
*/

// insert
//$insert_sql = "insert into books(`title`, `author`, `add_time`) VALUES :values";
//$statement = $pdo->prepare($insert_sql);

$values = [ [ '人类简史', 'zzw', time() ], [ '从0到1', 'persist', time() ] ];
$valstr = '';
foreach ($values as $val) {

}
/* $valstr = '';
call_user_func(function($item){
  // $valstr .= '('.implode(',', $item).')';
  print_r($item);
}, $values);
echo $valstr;
*/
// $statement->execute(array('values'=> ''));


//$stmt = $pdo->prepare("select * from admin_menu where title = :title");
//print_r($stmt);
//$stmt->execute(array('title' => 'Index'));

/*$rs = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($rs);*/

/* foreach ($rs as $row) {
  print_r($row);
}

echo $stmt->rowCount(); */