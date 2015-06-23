<!--
	CSE 154, 
	Name: Xiaobo Wang
	ID: 1029392
	Assignment4: make the main page of the online dating webpage
-->
<?php
include("common.php");
topPart();
?>
	<div>
		<form id = "forms" action="signup_submit.php" method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>New User Signup:</legend>
					<div>
						<strong>MailAddress:</strong>		
						<input type="text" name="mailAddress" size="16"/>
					</div>
				
					<div>
						<strong>Password:</strong>		
						<input type="password" name="password" size="16"/>
					</div>
					
					<div>
						<strong>NickName:</strong>		
						<input type="text" name="nickName" size="16"/>
					</div>
					<div>
						<strong>Gender:</strong>
							<label><input type="radio" name="gender" value="M" /> Male</label>
							<label><input type="radio" name="gender" value="F" /> Female</label>
						</div>
					<div>
						<strong>Age:</strong>
						<input type="text" name="age" size="6" maxlength="2" />
					</div>
				

					<div>
						<strong>Register Game</strong>
						<select name="game">		
							<option selected="selected">DOTA2</option>
							<option>LOL</option>
						</select>
					</div>
					<div>
						<strong>Phone Number:</strong>
						<input type="text" name="phoneNumber" maxlength="11" /> 
					</div>
					
					<div>
						<label><strong>Photo:</strong>
						<input type="file" name="pic" size="18"/></label>
					</div>
					
					<div>
						<input type="submit" value="Sign up"/>
					</div>
				</fieldset>
		</form>
	</div>
<?php
bottomPart();
?>
