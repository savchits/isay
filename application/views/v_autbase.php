		

<?php foreach($styles as $style):?>
		<?php echo HTML::style($style); ?>
		<?php endforeach;?>
		
				<?php foreach($scripts as $script):?>
		<?php echo HTML::script($script); ?>
		<?php endforeach;?>
<!Doctype HTML>
<html>

   <head>

      <title> ISay </title>     
	  <meta HTTP-Equiv="content-Type" Content="text/html";
Charset=UTF-8>
      <link rel="stylesheet" type="text/css" href="MEDIA/CSS/isaystyle.css">
	   <link rel="stylesheet" type="text/css" href="MEDIA/CSS/votingblock.css">
	   <link rel="stylesheet" type="text/css" href="MEDIA/Bootstrap/css/bootstrap.min.css">
	   		<script src="MEDIA/JS/jquery-1.3.2.min.js" type="text/javascript"></script>
	    <link rel="stylesheet" type="text/javascript" href="MEDIA/Bootstrap/js/bootstrap.min.js">
<link type="text/css" href="MEDIA/CSS/jqueryslidemenu.css" rel="stylesheet" />
<script src="media/js/jqueryslidemenu.js" type="text/javascript"></script>
<!--[if lte IE 7]>
<style type="text/css">
html .jqueryslidemenu { height: 1%; } /* Holly Hack for IE7 and below */
</style>
<![endif]-->
		

		
		
		
		
		
		
   </head>

   <body>
   
<div id="top">
<div id="container">
<div id="toolbar">
<div id="myslidemenu" class="jqueryslidemenu">
<ul>
	<li id="logo" >
	<?php echo HTML::image('media/Images/logo3newlittle.png')?>
	</li>
			<li id="enter" >
	<?php  if(!$logged_in):?><?php echo HTML::anchor('auth/index',"no");?><?php else:?><?php echo HTML::anchor('auth/logout',"yes");?><?php endif?>
	</li>
	
	<li  >
<?php echo HTML::anchor('index/index',"World");?>
	</li>
	<li  >
	<a href="#">Country</a>
<ul>
     <li><?php echo HTML::anchor('index/index/usa', HTML::image('MEDIA/Images/ICONS/flag_usa.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."USA");?></li>
	 <li><?php echo HTML ::anchor('index/index/russia', HTML::image('MEDIA/Images/ICONS/flag_russia.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."RUSSIA");?></li>
	 <li><?php echo HTML:: anchor('index/index/china', HTML::image('MEDIA/Images/ICONS/flag_china.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."CHINA");?></li>
	 <li><?php echo HTML:: anchor('index/index/uk', HTML::image('MEDIA/Images/ICONS/flag_great_britain.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."UK");?></li>
	 <li><?php echo HTML:: anchor('index/index/belarus', HTML::image('MEDIA/Images/ICONS/flag_belarus.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."BELARUS");?></li>

  </ul>
	</li>
	<li  >
	<?php echo HTML::anchor('account','I Listen')?>
	</li>
	<li  >
	<?php echo HTML::anchor('account','I Say')?>
	</li>
	<li id="searchfield"  >
	<form id='search' action="search.php" method=POST>
<input type="text" id="poisk"   name=uservalue>

</form>

	
	</li>
	
	</ul>

 </div>
</div>
</div>
</div>





 

<?=$mainblock?>
       
       
<?=$centerblock?>

	
	
	</div>
	
</div>
 
<div id="tops">
	
</div>
	</div>
   </body>
   

</html>