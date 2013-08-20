<div id="i">

<div id="info4"></div></div>
<div id="space">

<div id="wallreg">
<base href="<?php echo URL::base(TRUE) ?>">
<div align="center">
  


<?php echo Form::open('accountsettings/profile');?>
<table width="300" cellspacing="5">
    <tr>
        <td  id="formalabel" ><?php echo Form::label('username', 'FIRST NAME');?></td>
        <td id="formalog2"  ><?php echo Form::input('username', $user->username, array('size' => 20));?></td>
    </tr>
    <tr>
        <td  id="formalabel" ><?php echo Form::label('first_name', 'LAST NAME')?></td>
        <td id="formalog2" ><?php echo Form::input('first_name',  $user->first_name, array('size' => 20));?></td>
    </tr>
    <tr>
        <td  id="formalabel" ><?php echo Form::label('email', 'EMAIL')?></td>
        <td id="formalog2" ><?php echo Form::input('email',  $user->email, array('size' => 20));?></td>
    </tr>
  
  
     <tr>
        <td  id="formalabel" ><?php echo Form::label('aboutuser', 'About me');?></td>
        <td id="formalog2" ><?php echo Form::input('aboutuser',  $user->aboutuser, array('size' => 20));?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"></td>
    </tr>
</table>
<a href='#'><div id="listennotlisten3"><?php echo Form::submit('submit', 'SAVE');?></div></a>
<?php echo Form::close();?>

	
</div>








</div>
 