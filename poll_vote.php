<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$Avengers = $array[0];
$CaptainAmerica = $array[1];
$DeadPool = $array[2];
$BatmanVsSuperman = $array[3];

if ($vote == 0) {
  $Avengers = $Avengers + 1;
}
if ($vote == 1) {
  $CaptainAmerica = $CaptainAmerica + 1;
}
if ($vote == 2) {
  $DeadPool = $DeadPool + 1;
}
if ($vote == 3) {
  $BatmanVsSuperman = $DeadPool + 1;
}


//insert votes to txt file
$insertvote = $Avengers."||".$CaptainAmerica."||".$DeadPool."||".$BatmanVsSuperman;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<div>
<h2>Result:</h2>
<table>
<tr>
<td><img src="img/cart/10.jpg" />&nbsp;<div id="pollResult">Love rosie:</div></td>
<td>
<img src="blue.png"
width='<?php echo(100*round($Avengers/($Avengers + $CaptainAmerica + $DeadPool + $BatmanVsSuperman),4)); ?>'
height='20'>
<?php echo(100*round($Avengers/($Avengers + $CaptainAmerica + $DeadPool + $BatmanVsSuperman),4)); ?>%
</td>
</tr>
<tr>
<td><br/><img src="img/cart/2.jpg" />&nbsp;<div id="pollResult">Get Hard:</div></td>
<td>
<img src="blue.png"
width='<?php echo(100*round($CaptainAmerica/($Avengers + $CaptainAmerica + $DeadPool + $BatmanVsSuperman),4)); ?>'
height='20'>
<?php echo(100*round($CaptainAmerica/($Avengers + $CaptainAmerica + $DeadPool + $BatmanVsSuperman),4)); ?>%
</td>
</tr>
<tr>
<td><br/><img src="img/cart/3.jpg" />&nbsp;<div id="pollResult">Duff:</div></td>
<td>
<img src="blue.png"
width='<?php echo(100*round($DeadPool/($Avengers + $CaptainAmerica + $DeadPool + $BatmanVsSuperman),4)); ?>'
height='20'>
<?php echo(100*round($DeadPool/($Avengers + $CaptainAmerica + $DeadPool + $BatmanVsSuperman),4)); ?>%
</td>
</tr>
<tr>
<td><br/><img src="img/cart/4.jpg" />&nbsp;<div id="pollResult">WeddingRinger:</div></td>
<td>
<img src="blue.png"
width='<?php echo(100*round($BatmanVsSuperman/($Avengers + $CaptainAmerica + $DeadPool + $BatmanVsSuperman),4)); ?>'
height='20'></div>
<?php echo(100*round($BatmanVsSuperman/($Avengers + $CaptainAmerica + $DeadPool + $BatmanVsSuperman),4)); ?>%
</td>
</tr>
</table>
