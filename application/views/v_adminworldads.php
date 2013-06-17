<div id="ad">Advertizing 
   <?php echo HTML::anchor('indexadmin/addads', 'ADD');?></div>

<?php foreach($worldads as $wa): ?>
	<div id="News">


<div   class="News2">

	<div class="newsname2"> 
	<a href="#"><?php echo $wa->name; ?></a>
	</div>
       
<?php foreach($images as $i): ?>
<div  class="Newspic2"><?php echo html::anchor('media/uploads/'. $i->name, html::image('media/uploads/small_' . $i->name), array('target' => '_blank')) ;?></div>

	
 <?php endforeach; ?>
	<?php echo HTML::anchor('indexadmin/deleteads/'. $wa->id, HTML::image('media/IMAGES/delete.png'));?>
<div class="newslink">
<a href="#"><?php echo $wa->link; ?></a> 
                        

                                         
</div>




</div>
</div>


   <?php endforeach; ?>