

<div id='bodprofile' align="center">
<div id="first">
    <div id="main" style="background-image:url('<?php echo 'media/uploads/' . $images->facebg; ?>')">

<div id="info">

	<div id="name">
	<?php echo $mainblock->first_name;?>
	</div>
	<div id="country">
	Russia
	</div>
	<div id="city">
	Moscow
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
	to<span class="letter"><a  href="#"> <?php echo $id ;?></a></span>
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
	<div  class="pic">     <?php echo HTML::image('media/uploads/small_' .$images->name);?>


    </div>
<div class="n2">
		<div id="site">
		
		
		<a href="#">	</a>
		</div>
	</div>
	
	</div>
	<div id="content">

	<div id="personalinfo">



















	<div id="aboutme"><div id="textinside"><?php echo $mainblock->aboutuser ;?></div></div>
	<div id="myfriends">
	<div id="friendstolisten">
<a href="#"><div id='onefriend'><img  src='media/Images/evetbv.jpg'/>Alan Parker</div></a>
<a href="#"><div id='onefriend'><img  src='media/Images/ecefvc.jpg'/>Georgia Smith</div></a>
<a href="#"><div id='onefriend'><img  src='media/Images/margo.jpg'/>Margaret Babu</div></a>
	</div>
	<div id="friendstosay">
<a href="#"><div id='onefriend'><img  src='media/Images/martin.jpg'/>Dr Martin</div></a>
<a href="#"><div id='onefriend'><img  src='media/Images/Bruce_png.png'/>Bill</div></a>
<a href="#"><div id='onefriend'><img  src='media/Images/ljk.jpg'/>Kiki</div></a>
		
	</div>
	</div>
	</div>
</div>

	
</div>
<div id="info2">
<div id="listennotlisten"><?php echo HTML::anchor('accountsettings/profile',"SETTINGS");?></div>
<div id="whosays"><div id='whosaysprofile'>	<?php echo $mainblock->first_name;?> says</div></div>
</div>
 