<?php
require_once("config.php");
$req="select * from categories";
$rs=mysqli_query($conn,$req);
?>
<select id="cats">

<?php
while($cat=mysqli_fetch_assoc($rs)){ ?>
<option value="<?php echo ($cat['ID_CAT']) ?>"><?php echo ($cat['NOM_CAT']) ?></option>

<?php } ?>
</select>