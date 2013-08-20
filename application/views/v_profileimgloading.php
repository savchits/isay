    <base href="<?php echo URL::base(TRUE) ?>">
    <div id='bod' align="center">
    <div id="first">
    <div id="main" style="background-image:url('<?php echo $block_center->backgroundpath; ?>')">

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
	<img  src='media/Images/up2.png'/>
	</div></a>
		<a  href="#"><div id="down">
	<img  src='media/Images/down5.png'/>
	</div></a>
	</div>
	</div>
	<div id="sayto">
	<div id="number">
	to<span class="letter"><a  href="#"> 678879</a></span>
	</div>
		<div id="upanddown">
			<a  href="#"><div id="up">
	<img  src='media/Images/up2.png'/>
	</div></a>
		<a  href="#"><div id="down">
	<img  src='media/Images/down5.png'/>
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
	<div  class="pic"><?php echo HTML::image('media/uploads/small_' .$images->name);?></div>
<div class="n2">
		<div id="site">
		
		
		<a href="#">	</a>
		</div>
	</div>
	
	</div>
	<div id="content">

	<div id="personalinfo">
	<div id="aboutme">

<?php echo Form::open('accountsettings/profile', array('enctype' => 'multipart/form-data'));?>


<table width="100%" cellspacing="3">


     <?php echo Form::label('facebgimages', '');?>
    <div id='inputimg'><?php echo Form::file('facebgimages[]', array('id' => 'multi'));?></div>
    <div id='forimage'><?php echo HTML::image('media/uploads/small_' .$images->name);?>

</table>


</div>

	<div id="myfriends">





<table width="100%" cellspacing="3">


    <?php echo Form::label('images', '');?>
    <div id='inputimg'><?php echo Form::file('images[]', array('id' => 'multi'));?></div>
    <div id='forimage'><?php echo HTML::image('media/uploads/small_' .$images->facebg);?></div>

</table>




	</div>
	</div>
    </div>

    </div>

<div id="info2">
<div id="listennotlisten"><?php echo Form::submit('submit', 'UPLOAD IMAGE');?></div>
<div id="whosays"><div id='whosaysprofile'>Change you basic settings here!</div></div>

    </div>


<?php echo Form::close();?>