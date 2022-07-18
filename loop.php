<?php
echo "for looping<br/>";
for($x=5;$x>0;$x--){echo $x;}echo "<br/>";
$y=0;
echo "while looping<br/>";
while ($y<5){echo $y++;}
echo "<br/>";
$c=strlen("whilen loop");
while($c>0){echo --$c;}
echo "<br/>";
$p=0;
do{ echo $p++;} 
while ($p>5);
echo "for looping<br/>";
for($x=5;$x>0;$x--){echo $x;}echo "<br/>";
$y=0;
echo "Assigntment</br>";
$y="we are learning looping method";
$y =str_word_count ("we are learning looping method");
for ($x=1;$x<$y;$x++){echo $x;}echo "<br/>";
$x=1;
//$y="we are learning looping method";
$y= strlen ("we are learning php looping method");
while ($x<$y) {echo $x++;} {echo $x;}echo "<br/>";
//$y= strlen ("we are learning php looping method");
do{ echo $x++;}
while ($x<$y);
echo "<br/>array<br/>";
//$x=array("bumi","tunde","azeez");
//$i=0;
//$y=count($x);
//do{echo $x[$i++]." ";}
//while ($i<$y);
//$x=array("bumi","tunde","azeez");
//echo $x[0]." ".$x[1]." ".$x[2];
$x=array("bumi","tundse","azeez");
$y=count($x);
///for ($i=0;$i<$y;$i++){echo $x[$i]." ";}echo "<br/>;
//$season=array("summer","winter","spring","auntum");

/*$f=0;
$y=1; 
$y= count(season);
for ($f=0;$f<$y;$f++){echo $f;}echo "<br/>";*/
echo "associative array.<br>";
 $assoc=array("sun"=>"sky","fish"=>"water","lion"=>"den");
 echo $assoc ['sun'].
  $assoc['fish'].
  $assoc['lion'];
   $assoc=array("sun"=>"sky","fish"=>"water","lion"=>"den");
   echo "<br>";
   foreach($assoc as $az =>$value){echo "the key is ". $az." and the value is ". $value."<br> ";}
   
   $array=array("dayo"=>"30", "tayo"=> "20","kunle" =>"35", "raf"=>"8" ,"az"=>"105");
   foreach($array as $hay =>$value){echo  $hay."<br>";}
   $sum=0;
   foreach($array as $hay =>$value){$sum +=$value;}
   echo $sum;
 ?>