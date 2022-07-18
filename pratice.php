<?php
   $y="i am a boy";
echo str_word_count($y)."</br>";
    echo strlen($y)."</br>";
echo strrev($y)."</br>";
   echo str_replace ("boy","girl",$y)."</br>";
echo strpos ("i am a boy","boy")."<br>";
   $x="I am sad";
echo str_word_count($x)."</br>";
    echo strlen($x)."</br>";
echo strrev($x)."</br>";
    echo str_replace ("sad","happy",$x)."</br>";
echo strpos("I am sad","sad")."</br>"; 
   echo "multi dimentional array.</br>";
$multi=array(array("php","4.5","5"),
       array("css","4","5"),
       array("html","5","6"),);
echo $multi[0][0]." old version is ".
         $multi[0][1]. " new version is ". $multi[0][2]."</br>";
echo $multi[1][0]." old version is ".
       $multi[1][1]. " new version is ". $multi[0][2]."</br>";
echo $multi[2][0]." old version is ".
         $multi[2][1]. " new version is ". $multi[2][2]."</br>";
$count=count($multi);
         for($i=0;$i< $count; $i++){
            echo "<ul> row no".$i."</br>";
$m2=$multi[$i];
   $count2=count($m2);
for($j=0; $j <$count2;$j++){
    echo "<li>".$j."</li></br></ul>";
    
    
}
         }
echo "assignment.</br>"
?>
