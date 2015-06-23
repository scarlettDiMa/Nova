<?php
include("common.php");
topPart();

if(isset($_REQUEST["mailAddress"])) {
	currentUser();
}
else {
	login();
	
	
}
bottomPart();


/* show a list of singles that are compatible matches with the given user.*/
function currentUser(){ 
	$lines = file("users.txt", FILE_IGNORE_NEW_LINES);
	$user = 0;
	$find = false;
	for ($i = 0; $i < count($lines); $i++) {
		$person = explode(",", $lines[$i]);
		if ($person[0] == $_REQUEST["mailAddress"]){					
			$find = true;
			$user = $i;
			if($person[1] == $_REQUEST["password"]) {
				session_start();
 				$_SESSION["mailAddress"] = $person[0];
 				$_SESSION["nickName"] = $person[2];
 				$_SESSION["gender"] = $person[3];
 				$_SESSION["age"] = $person[4];
 					
 				$_SESSION["game"] = $person[5]
 					

				//right password to to profile page
			//	header("Location:profile.php");
			// 	http_redirect("profile.html", array("mailAddress" => $persion[0]), true, HTTP_REDIRECT_PERM);
				?>
				
				
				<div>
					
					<form id = "forms" action="profile.php" method="POST" enctype="multipart/form-data">
						<fieldset>
							<legend>Welcome:</legend>
								<div>
									<strong><?= $person[2] ?></strong>		
									<input type="hidden" name="mailAddress" size="16" value = <?= $person[0] ?>/>
								</div>
		
								<div>
									<input type="submit" value="go to your profile"/>
								</div>		
							</fieldset>
					</form>
				</div>
				<input type="hidden" name="' . $k . '" value="' . $v . '">
				
				<?php 
			
			} else {
				//wrong password try agian
					
				?>
				<div>
					<p> Wrong password, try again! </p>
					
					<form id = "forms" action="login.php" method="POST" enctype="multipart/form-data">
						<fieldset>
							<legend>Log In:</legend>
								<div>
									<strong>MailAddress:</strong>		
									<input type="text" name="mailAddress" size="16"/>
								</div>
							
								<div>
									<strong>Password:</strong>		
									<input type="password" name="password" size="16"/>
								</div>
		
								<div>
									<input type="submit" value="Sign up"/>
								</div>		
							</fieldset>
					</form>
				</div>
				
				<?php 
			}
		}
	}
	
	
	if($find == false) {
		//user doesn't exist;
		?>
			<div>
				<p> ID not exist, try again! </p>
				
				<form id = "forms" action="login.php" method="POST" enctype="multipart/form-data">
					<fieldset>
						<legend>Log In:</legend>
						<div>
							<strong>MailAddress:</strong>		
							<input type="text" name="mailAddress" size="16"/>
						</div>
					
						<div>
							<strong>Password:</strong>		
							<input type="password" name="password" size="16"/>
						</div>
												
						<div>
							<input type="submit" value="Sign up"/>
						</div>	
					</fieldset>
				</form>
			</div>
		<?php
	}
}


/* let the users to log in and see their matches */
function login(){ 
?>
	<div>
		<form id = "forms" action="login.php" method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>Log In:</legend>
					<div>
						<strong>MailAddress:</strong>		
						<input type="text" name="mailAddress" size="16"/>
					</div>
				
					<div>
						<strong>Password:</strong>		
						<input type="password" name="password" size="16"/>
					</div>
					
					
					<div>
						<input type="submit" value="Sign up"/>
					</div>
					
				</fieldset>
		</form>
	</div>
<?php
} 
?>