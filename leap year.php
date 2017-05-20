
<?php
if (isset($_GET['xx']))
 {
    $x = $_GET['xx'];
    $y = $_GET['yy'];
    if($x %4!= 0 )
      $y = "NO";
      elseif ($x%4000==0)
       $y = "NO"  ;
      elseif ( $x%400 != 0 &&  $x%100==0   )
      $y="NO";
      else $y="YES";
  }

?>

<form>
    輸入年份: <input type="text" name="xx" id="x" value=<?php echo $x; ?>/>

    <input type ="submit" />

</form>
<?php
echo $y;
?>