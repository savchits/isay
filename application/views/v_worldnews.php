




 <?php foreach($worldnews as $wn): ?>
					<div id="topmessage">
		<div id="topname"><?php echo $wn->name; ?></div>
		<div id="toptext"><?php echo $wn->text; ?></div>
		<div id="toplink"><?php echo $wn->link; ?></div>
		</div>

     <?php endforeach; ?>