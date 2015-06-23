<?php
include("common.php");



topPart();

//$output = shell_exec('java -Djava.awt.headless=true abc 1 2');
// $output = shell_exec('java /Applications/XAMPP/htdocs/Nova/abc 1 2');

 $output = exec('java abc');

// $output = "abcde";
echo "<pre>$output</pre>";

//countTen();

bottomPart();

//sleep(15);
	
	


		
function countTen() {
	$date = "2013-01-05 10:56:15";
	$time = 0;
	$i = 0;
	while( $i <= 3) {
			
		?>
		<p>
		
			<?= $date?>	
		</p>
		
		<?php
		$i = $i + 1;
	}
	
// 	header("Location:profile.php");
	
		
}
?>
	