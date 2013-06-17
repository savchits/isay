<div id="ad"><a href='#'>Advertizing</a></div>

<?php foreach($worldads as $wa): ?>
	<div id="News">


<div   class="News2">

	<div class="newsname2"> 
	<a href="#"><?php echo $wa->name; ?></a>
	</div>
    
    
    
    
    
<?php foreach($images as $i): ?>
<div  class="Newspic2"><?php echo html::anchor('media/uploads/'. $i->name, html::image('media/uploads/small_' . $i->name), array('target' => '_blank')) ;?></div>

	
 <?php endforeach; ?>


	

	
	<div class="newslink">
			<a href="#"><?php echo $wa->link; ?></a> 
</div>
</div>
</div>
   <?php endforeach; ?>