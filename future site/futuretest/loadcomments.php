<?php
require_once "functions.php";
$request =  queryMysql("SELECT * FROM comments ORDER BY id DESC");
        if($request->num_rows > 0){
            $num = $request->num_rows;
            for ($i = 0 ; $i < $num ; $i++){
                $row = $request->fetch_array(MYSQLI_ASSOC);
                echo "<p id=\"namedate\"><span id=\"userName\">".$row['name']."</span>";
                echo "<span id=\"date\">".date('G:i &\nb\sp; d.m.Y', $row['time'])."</span>";
                echo "<br></p>";
                echo "<p>".$row['text']."</p>";
            }
        }else{
            echo "<p><span id=\"userName\">Комментариев пока нет</span>";
        }
?>        