<!doctyple html>
<head>
<style>
 table,tr,th,td{border: 1px solid black; border-collapse: collapse;
      }
      tr:nth-child(even){background-color: #f2f2f2
      }
      
  table {width: 100%;}
</style>
</head>
<body>
     <table>
<tr><th>Subject</th>
<th>Marks</th></tr>
<?php $total=0;
$assoc=array("math"=>"20","eng"=>"30","che"=>"50","bio"=>"60","phy"=>"60");
foreach($assoc as $subject=>$value){?>
<tr><td><?php echo $subject;?></td>
<td><?php echo $value;?></td></tr>
<?php $total +=$value;}?>
<tr><td>total</td><td><?php echo $total;?></td></tr>
 <?php if ($total<250){?><tr>
<td>remark : Poor performance</td>
</tr><?php }else{?><tr>
<td>remark:Good result</td>
</tr> <?php }?>
</table>
</body></html>