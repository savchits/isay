




 <?php foreach($worldnews as $wn): ?>
					<div id="topmessage">
   
		<div id="topname"><?php echo $wn->name; ?></div>
		<div id="toptext"><?php echo $wn->text; ?></div>
		<div id="toplink"><?php echo $wn->link; ?>
                


<?php echo HTML::anchor('indexadmin/deletenews/'. $wn->id, HTML::image('media/IMAGES/delete.png'));?>
                
                
                </div>
    
		</div>

     <?php endforeach; ?>
