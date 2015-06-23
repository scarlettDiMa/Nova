




<?php
include("common.php");
topPart();




?>
<?php

		$new_text = $_POST["mailAddress"].",".$_POST["password"].",".$_POST["nickName"].",".$_POST["gender"].",".$_POST["age"].",".trim($_POST["game"]).",".$_POST["phoneNumber"]."\n";
		
		file_put_contents("users.txt", $new_text, FILE_APPEND);
		
		$user = strtolower(implode("_", explode(" ", $_REQUEST["mailAddress"]))).".jpg";
		if (is_uploaded_file($_FILES["pic"]["tmp_name"])) {
			move_uploaded_file($_FILES["pic"]["tmp_name"], "user_images/".$user);
		}
 //	chmod("user_images/".$user, 0777);
	?>
	<p>
		Thank you!<br/>
		welcome to EverNova!<br/>
		<a href="matches.php">
		Now log in to view your profile
		</a>
	</p>	
<?php
bottomPart();
erro();

?>


</html>