<?php
if (isset($_GET['xx'])) {
    $x = $_GET['xx'];
    $y = $_GET['yy'];
    /* $plus = $x + $y;
     $min = $x - $y;
     $mul = $x * $y;
     $div = $x / $y;
     $_div= floor($div); */

}
?>

<form action "get.php" method "get" >
<input type="text" name="xx" id="x" value="<?php echo $x; ?>"/>
<select name="oper">
    <option value="plus" <?php if($_GET['oper'] == "plus"){ echo 'selected'; } ?>>+</option>
    <option  value="min" <?php if($_GET['oper'] == "min") { echo  'selected'; } ?>>-</option>
    <option  value="mul" <?php if($_GET['oper'] == "mul") { echo 'selected'; } ?>>*</option>
    <option  value="div" <?php if($_GET['oper'] == "div") { echo 'selected' ; } ?>>/</option>
</select>

<input type="text" name="yy" id="y" value="<?php echo $y; ?>"/>
<input type="submit" value="="/>

<?php
if ($_GET['oper'] == "plus") {
    $r=$x+$y; }
elseif ($_GET['oper'] == "min" ) {
    $r=$x-$y; }
elseif ($_GET['oper'] == "mul" ) {
    $r=$x*$y ; }
    elseif ($y!=0) {
        $f=$x/$y ;
        $r=floor($f);}
    else echo 'Null';

echo $r;
?>
</form>