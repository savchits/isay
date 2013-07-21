<base href="<?php echo URL::base(TRUE) ?>">
<div id='bod' align="center">
<div id="first">
    <div id="main" style="background-image:url('<?php echo $centerblock->backgroundpath; ?>')">

<div id="info">

	<div id="aboutloading">
Change photo, profile background and base background
	</div>

	
	<div id="listento">
	
		<div id="number">
	to<span class="letter"><a  href="#"> 3</a></span>
	</div>
		<div id="upanddown">
			<a  href="#"><div id="up">
	<img  src='MEDIA/Images/up2.png'/>
	</div></a>
		<a  href="#"><div id="down">
	<img  src='MEDIA/Images/down5.png'/>
	</div></a>
	
	</div>
	</div>
	<div id="sayto">
	<div id="number">
	to<span class="letter"><a  href="#"> 678879</a></span>
	</div>
		<div id="upanddown">
			<a  href="#"><div id="up">
	<img  src='MEDIA/Images/up2.png'/>
	</div></a>
		<a  href="#"><div id="down">
	<img  src='MEDIA/Images/down5.png'/>
	</div></a>
	
	</div>
	
	</div>
	
		<div id="topvoting">
	TOP VOTINGS
	</div>
</div>







<div id="mainmenu">

	<div id="header">
	<div id='information'>
	<div id="avatar">
	<div  class="pic"><?php echo HTML::image('media/Images/Bruce_png.png')?></div>
<div class="n2">
		<div id="site">
		
		
		<a href="#">	</a>
		</div>
	</div>
	
	</div>
	<div id="content">

	<div id="personalinfo">
	<div id="aboutme">
                
                
                
                
<?php echo Form::open('accountsettings/addphoto', array('enctype' => 'multipart/form-data'));?>
<table width="100%" cellspacing="3">

  
 
  
       <?php echo Form::label('images', 'Change your profile background');?> 
            <?php echo Form::file('images[]', array('id' => 'multi'));?>
    <?php echo HTML::image(   $centerblock->backgroundpath, array('align'=>"center",  'width'=>'150', 'height'=>'110') )?>
   
</table>
<?php echo Form::close();?>
                

                
           </div>
	<div id="myfriends">
<?php echo Form::open('accountsettings/addphoto', array('enctype' => 'multipart/form-data'));?>
<table width="100%" cellspacing="3">

  
 
  
       <?php echo Form::label('images', 'Change your base profile');?> 
            <?php echo Form::file('images[]', array('id' => 'multi'));?>
     <?php echo HTML::image( 'media/Images/18254-1920x1200.jpg', array('align'=>"center",  'width'=>'180', 'height'=>'110') )?>
</table>
<?php echo Form::close();?>
	</div>
	</div>
</div>

	
</div>
<div id="info2">
<div id="listennotlisten"><?php echo HTML::anchor('account/profile',"UPLOAD PHOTO");?></div>
<div id="whosays"><div id='whosaysprofile'>Change you basic settings here!</div></div>
</div>
 