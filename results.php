<?php include 'admin/connection.php'; 
$word = $_POST['trm'];
$sql = "SELECT * FROM `words_details` WHERE word='{$word}'";
	$res = $conn->query($sql);
	if(mysqli_num_rows($res) > 0){


		while($row = mysqli_fetch_array($res)){
			?>
				<h4><?php  echo $row['word']; ?> (<?php  echo $row['type']; ?>)</h4>
				<div><?php  echo $row['w_details'];  ?></div>
			<?php
		}
	}else{
			
			?>
				<h4>Noting Found</h4>
				
			<?php
		}
?>
