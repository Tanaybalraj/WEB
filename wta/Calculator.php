<html>
<head>
</head>
<body>
<div style="margin-top:50px">
<form action="lab8a.php" method="post">
<input type="text" name="number1" style="display:inline">
<select name="operation">
<option value="plus">+</option>
<option value="minus">-</option>
<option value="times">*</option>
<option value="divideby">/</option>
</select>
<input type="text" name="number2" style="display:inline">
<input type="submit" name="submit"/>
</form>
<?php
if(isset($_POST["submit"]))
{
if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
{
if($_POST['operation']=='plus')
$total=$_POST['number1']+$_POST['number2'];

if($_POST['operation']=='minus')
$total=$_POST['number1']-$_POST['number2'];

if($_POST['operation']=='times')
$total=$_POST['number1']*$_POST['number2'];

if($_POST['operation']=='divideby')
$total=$_POST['number1']/$_POST['number2'];

echo "<h1>".$_POST['number1']." ".$_POST['operation']." ".$_POST['number2']." equals ".$total."</h1>";
}
else
echo "not a number";
}
?>
</div>
</body>
</html>