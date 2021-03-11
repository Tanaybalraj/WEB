<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$b=array(array(2,3,4),array(5,6,7),array(8,9,10));
$m=count($a);
$n=count($a[0]);
$p=count($b);
$q=count($b[0]);
$i=0;
$j=0;
echo "matrix A is <br>";
for($i=0;$i<$m;$i++)
{
for($j=0;$j<$n;$j++)
{
echo $a[$i][$j]." ";
}
echo "<br>";
}
echo "matrix B is <br>";
for($i=0;$i<$p;$i++)
{
for($j=0;$j<$q;$j++)
{
echo $b[$i][$j]." ";
}
echo "<br>";
}
echo "addition of A and B is <br>";
for($i=0;$i<$m;$i++)
{
for($j=0;$j<$n;$j++)
{
echo $a[$i][$j]+$b[$i][$j]." ";
}
echo "<br>";
}
echo "multiplication of A and B is <br>";
if($n==$p)
{
for($i=0;$i<$n;$i++)
{
for($j=0;$j<$p;$j++)
{
$result[$i][$j]=0;
for($k=0;$k<$n;$k++)
{
$result[$i][$j]+=$a[$i][$k]*$b[$k][$j];
}
echo $result[$i][$j]." ";
}
echo "<br>";
}
}
else
echo "multiplication not possible";
echo "Transpose of matrix A is <br>";
for($i=0;$i<$m;$i++)
{
for($j=0;$j<$n;$j++)
{
echo $a[$j][$i]." ";
}
echo "<br>";
}

?>


<!DOCTYPE html>
<html>
<head>
<title> Transpose </title>
</head>
<body>
<div class="container" style="margin.top":5px>


<form method="post" action="transpose.php">
<center><input name="a11" type="text"/>
<input name="a12" type="text"/></center>
</br>
<center><input name="a21" type="text"/>
<input name="a22" type="text"/></center>
</br>
<center><input name="submit" type="submit" value="submit" /></center>

<?php
  if(isset($_POST["submit"]))
  {
	  //check number values
	  if(is_numeric($_POST["a11"])&&is_numeric($_POST["a12"])&&is_numeric($_POST["a21"])&&is_numeric($_POST["a22"]))
	  {
		  echo "<center>";
		  $arr1=array(array($_POST["a11"],$_POST["a12"]),array($_POST["a21"],$_POST["a22"]));
		  $arr2=array(array(0,0),array(0,0));
		  for ($i=0; $i<count($arr1); $i++)
			  for ($j=0; $j<count($arr1[0]); $j++)
				$arr2[$j][$i]=$arr1[$i][$j];
		  echo "<h3>Before Transpose";
		  echo "<h3> {$_POST["a11"]}  {$_POST["a12"]} </br>";
		  echo "<h3> {$_POST["a21"]}  {$_POST["a22"]} </br>";
		  echo "</br>";
		  echo "</br>";
		  echo "After Transpose";
		  echo "<br>";
		  for ($i=0; $i<count($arr1); $i++)
		  {
			  for ($j=0; $j<count($arr1[0]); $j++)
			  {
				echo $arr2[$i][$j]."   ";
			  }
				echo "<br>";
				echo "<br>";
		  }				
		  echo "</center>";
	  }
	  else
	  {
		  echo "Numeric values are required";
	  }
  }
?>


</form>
</div>
</body>
</html>
