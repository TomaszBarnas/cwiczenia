<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  liczba1: <input type="text" name="pierwsza">
  liczba2: <input type="text" name="druga">
  liczba3: <input type="text" name="trzecia">
  liczba4: <input type="text" name="czwarta">
  liczba5: <input type="text" name="piata">
  liczba6: <input type="text" name="szosta">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $a = $_REQUEST['pierwsza'];
  $b = $_REQUEST['druga'];
  $c = $_REQUEST['trzecia'];
  $d = $_REQUEST['czwarta'];
  $e = $_REQUEST['piata'];
  $f = $_REQUEST['szosta'];
 echo $a;
 echo"<br>";
 echo $b;
 echo"<br>";
 echo $c;
 echo"<br>";
 echo $d;
 echo"<br>";
 echo $e;
 echo"<br>";
 echo $f;
 echo"<br>";
}
?>

</body>
</html>