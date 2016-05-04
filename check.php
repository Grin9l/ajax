<?php
  if ($_GET['country'] == 1){
        echo json_encode(array('1'=>'Вашингтон', '2'=>'Чикаго','3'=>'Бостон'));
  }else if($_GET['country'] == 2){
        echo json_encode(array('1'=>'Париж', '2'=>'Марсель','3'=>'Сантропе'));
  }else{

  }