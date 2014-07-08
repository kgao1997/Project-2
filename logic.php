<html>
<body>
Your password is 



<?php 

// Words Array starts here
$wordsarray[0] = "Armada";
$wordsarray[1] = "Blaster";
$wordsarray[2] = "Carry";
$wordsarray[3] = "Dingerdonger";
$wordsarray[4] = "Evilgeniuses";
$wordsarray[5] = "Fishtail";
$wordsarray[6] = "Green";
$wordsarray[7] = "Highlander";
$wordsarray[8] = "Icarus";
$wordsarray[9] = "Jack";
$wordsarray[10] = "Killswitch";
$wordsarray[11] = "LMQ";
$wordsarray[12] = "Metal";
$wordsarray[13] = "Nashor";
$wordsarray[14] = "Optimus";
$wordsarray[15] = "Pancake";
$wordsarray[16] = "Quintus";
$wordsarray[17] = "Roshan";
$wordsarray[18] = "Silence";
$wordsarray[19] = "Terabyte";
$wordsarray[20] = "Underdog";
$wordsarray[21] = "Volvo";
$wordsarray[22] = "Winger";
$wordsarray[23] = "Xiandroid";
$wordsarray[24] = "Yankees";
$wordsarray[25] = "Zebrahead";
//End Word Array Here
//Begin test code here

$passwordlength = $_POST["number"];
if($_POST["Yes I want a number"]  && $_POST["Yes I want a special symbol"]){
echo @;
$intcount = 0;
$intposition = 0;
while($intcount < $passwordlength)
{
  $randomnumber = rand(0,9);
  $intposition = rand(0,25);
  echo $wordsarray[$intposition];
  echo $randomnumber;
  $intcount++;
}
}
elseif($_POST["Yes I want a number"] && !$_POST["Yes I want a special symbol"])
{
$intcount = 0;
$intposition = 0;
while($intcount < $passwordlength)
{
  $randomnumber = rand(0,9);
  $intposition = rand(0,25);
  echo $wordsarray[$intposition];
  echo $randomnumber;
  $intcount++;
}
}
elseif(!$_POST["Yes I want a number"] && $_POST["Yes I want a special symbol"])
{
echo @;
$intcount = 0;
$intposition = 0;
while($intcount < $passwordlength)
{
  $intposition = rand(0,25);
  echo $wordsarray[$intposition];
  $intcount++;
}

//while loop to print out password
$intcount = 0;
$intposition = 0;
while($intcount < $passwordlength)
{
  $intposition = rand(0,25);
  echo $wordsarray[$intposition];
  $intcount++;
}
?>
</body>


