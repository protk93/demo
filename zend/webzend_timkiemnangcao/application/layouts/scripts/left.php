<?php 
echo $this->headlink();
echo $this->headScript();
?>
<div id="smoothmenu2" class="ddsmoothmenu-v">
<ul>
<?php
	$dem=0;
	foreach($this->hang as $item){?>   
<!--level 1-->
<li>
<a href="<?php echo HOST_PROJECT."/index/sphang/idhangsx/". $item['id_hangsx']?>">
<?php echo $item['tenhang'];?>
</a>
  <ul>
  <?php
  	$n=$this->nhomhang[$dem];
	foreach($n as $item2){?>
  	<!--level 2--><li>
    <a href="<?php echo HOST_PROJECT."/index/sptheonhom/idnhom/". $item2['id_nhom']?>">
	<?php echo $item2['tennhom']; ?></a>
    </li><!--level 2-->
  <?php }?>
  </ul>
</li>
<?php 
	$dem++;
	}
?>
<!--// level 1-->

</ul>
<br style="clear: left" />
</div>