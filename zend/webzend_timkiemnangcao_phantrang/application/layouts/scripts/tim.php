<form action="<?php echo HOST_PROJECT."/index/kqtim"?>" method="post">
<br />Tên Sản phẩm: <input type="text" name="tensp" value="<?php

		echo (isset($_POST["tensp"])==true) ? $_POST["tensp"] : null; 
		?>">
<label style="margin:2px;">Nhóm </label> 
<select name="select"   >
<option value="all" >tất Cả</option>
<?php
	foreach($this->all_select as $item){?>
  	<option value="<?php echo $item['id_nhom'];?>"><?php echo $item['tennhom']; ?></option>
  <?php }?>

  

</select>
<label style="margin:2px;">Giá từ </label>
<input type="text" name="gia1" value="<?php
		
		echo (isset($_POST["gia1"])==true) ? $_POST["gia1"] : null; 
		?>">
<label style="margin:2px;">Đến </label>
<input type="text" name="gia2" value="<?php
			echo (isset($_POST["gia2"])==true) ? $_POST["gia2"] : null; 
		?>">

<input type="submit" value="Tìm kiếm">
</form> 
