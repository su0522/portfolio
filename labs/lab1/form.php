<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Using PHP DOCUMENT</title>
</head>
<?php
$file = fopen("times.txt", "r");
$num =fgets($file);
$num = $num +1;
$file = fopen("times.txt","w");
fwrite($file, $num);
fclose($file);
$abc=10
?>

<body style="font-size: 2em">
	<strong>
		你的姓名為：<?php print("$_POST[fname]");?>
		<br>
		你的學號為：<?php print("$_POST[fid]");?>
		<br>
		你猜的數字為：<?php print("$_POST[fnumber]");?>
		<br>

		<?php 
		if ($abc > "$_POST[fnumber]")
			{echo "數字太小"; }
				
		elseif ($abc < "$_POST[fnumber]") 
		       {echo "數字太大";}
			        
		else{echo "你猜對了";

		}

		 ?>

		<br>
		你總共猜了：<?php echo "$num" ;?>
		
	</strong>
</body>
<br>
<input type="button" onclick="history.back()" value="回到上一頁">
</html>