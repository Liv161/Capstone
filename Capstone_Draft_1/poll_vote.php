<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];
$maybe = $array[2];
$never = $array[3];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}
if ($vote == 2) {
  $maybe = $maybe + 1;
}
if ($vote == 3) {
  $never = $never + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no."||".$maybe."||".$never;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($yes/($no+$yes+$maybe+$never),4)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes+$maybe+$never),4)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes+$maybe+$never),4)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes+$maybe+$never),4)); ?>%
</td>
</tr>
<tr>
<td>Maybe:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($maybe/($no+$yes+$maybe+$never),4)); ?>'
height='20'>
<?php echo(100*round($maybe/($no+$yes+$maybe+$never),4)); ?>%
</td>
</tr>
<tr>
<td>Never:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($never/($no+$yes+$maybe+$never),4)); ?>'
height='20'>
<?php echo(100*round($never/($no+$yes+$maybe+$never),4)); ?>%
</td>
</tr>
</table>

<?php
echo $yes;
echo $no;
echo $maybe;
echo $never;
?>