<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="style14.css" rel="stylesheet" media="screen">
    <title>online 14 trắc nghiệm tính cách</title>
</head>
<body>
    <!-- //ch02/02-array/exercíe02 -->
    <?php 
        require_once 'function-a.php'; //$arrQuestions
        require_once 'function-b.php';//$arrOptions

        $newArr = array();
        
        foreach($arrQuestions as $key=>$value){
            $newArr[$key]["question"] = $value["question"];//Giá trị $key là $id của file function-a
            $newArr[$key]["sentences"] = $arrOptions[$key];//Giá trị $key (ở phía trước) là giá trị $questionID và giá trị $optionsID từ file function-b.
            //Giá trị $key phía sau là giá trị $answer và $point từ file function-b;
        }
        
    ?>
    <div class="content">
		<h1>Trắc nghiệm tính cách</h1>
		<form action="results.php" method="POST" name="mainForm">
		<?php
			$i = 1;
			foreach($newArr as $key => $value){
				echo '<div class="question">';
				echo '<p><span>Câu hỏi '. $i .' : </span>'.$value["question"].'</p>';
				echo '<ul>';
				foreach($value["sentences"] as $keyC => $valueC){
					echo '<li><label><input type="radio" name="'.$key.'" value="'.$valueC["point"].'">'.$valueC["options"].'</label></li>';
				}
				echo '</ul>';
				$i++;
			} 
		?>
            <input type="text" value="50" name="100"></input>
			<input type="submit" value="Kiểm tra" name="submit"></input>
		</form>
		
	</div>
</body>
</html>