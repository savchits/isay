
            
            
            
            
            
            
            
            
            
            
            
            
            
            <base href="<?php echo URL::base(TRUE) ?>">
<div align="center"><div id="first">
   <div id="main" style="background-image:url('media/Images/rtbrwt.jpg')">
<div id="mainmenu">
    <div id="rr">
    <div id="r">
<div id="infolog">

	<div id="name">
	LOG IN/SIGH UP
	</div>
	<div id="country">
	
	</div>
	<div id="city">
	
	</div>

	
	
	
</div>
    	<div id='information'>
	<div id="avatarlogin">
	<?php echo HTML::image('media/Images/logotype7nadpis.png')?>
<div class="n2">
		
	</div>
	
	</div>


	
</div></div>

	<div id="content3">
   <?php echo Form::open('auth/login');?>
<div class='b' id="listennotlisten2" ><?php echo Form::submit('submit', 'LOG IN');?></div>
	<div id="personalinfo3">
	
	         
<table  width="300" cellspacing="5">Write in form ang click LOG IN
    <tr>
        <td id="formalabel" ><?php echo Form::label('username', 'EMAIL');?></td>
        <td  id="formalog"><?php echo Form::input('username', $data['username'], array('size' => 20));?></td>
    </tr>
    <tr>
        <td  id="formalabel"><?php echo Form::label('password', 'PASSWORD');?></td>
        <td id="formalog"><?php echo Form::password('password', $data['password'], array('size' => 20));?></td>
    </tr>
    <tr>
        <td></td>
        <td ><?php echo Form::checkbox('remember');?> keep me logged in<br/><br/></td>
    </tr>

  
</table>
<?php echo Form::close();?>
	</div>

</div>

<div id="tak"></div>
</div>



	

