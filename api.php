<?php 
  include __DIR__ . './db.php'; 

  $result=[];
  $genre = $_GET['genre'];

  if(empty($genre)){
    $result = $db_dischi;
  }else{
    foreach($db_dischi as $disco){
      if($disco['genre'] == $genre){
        $result[]=$disco;
      }
    }
  }
  header('Content-Type: application/json');

  echo json_encode($result);
?>