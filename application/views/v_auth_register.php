<div id="i">
<div id="info3"><?php echo Form::open('auth/register');?>
<a href='#'><div id="listennotlisten"><?php echo Form::submit('submit', 'SIGN UP');?></div></a>
<div id="whosays2">JOIN SCALABLE VOTING TO SAY AND LISTEN TO INTERESTING PEOPLE</div>
</div><div id="info4"></div></div>
 <div id="space">
	
	
	<div id="wallreg">
<base href="<?php echo URL::base(TRUE) ?>">
<div align="center">
  



Write in form ang click SIGN UP. It will take just 1 minute!
<table width="300" cellspacing="5">
    <tr>
        <td  id="formalabel" ><?php echo Form::label('username', 'FIRST NAME');?></td>
        <td id="formalog2"  ><?php echo Form::input('username', $data['username'], array('size' => 20));?></td>
    </tr>
    <tr>
        <td  id="formalabel" ><?php echo Form::label('first_name', 'LAST NAME')?></td>
        <td id="formalog2" ><?php echo Form::input('first_name', $data['first_name'], array('size' => 20));?></td>
    </tr>
    <tr>
        <td  id="formalabel" ><?php echo Form::label('email', 'EMAIL')?></td>
        <td id="formalog2" ><?php echo Form::input('email', $data['email'], array('size' => 20));?></td>
    </tr>
     <tr>
        <td  id="formalabel" ><?php echo Form::label('password', 'PASSWORD')?></td>
        <td id="formalog2" ><?php echo Form::password('password', $data['password'], array('size' => 20));?></td>
    </tr>
     <tr>
        <td  id="formalabel" ><?php echo Form::label('password_confirm', 'RE-ENTER PASSWORD');?></td>
        <td id="formalog2" ><?php echo Form::password('password_confirm', $data['password_confirm'], array('size' => 20));?></td>
    </tr>
    <tr>
        <td colspan="2" align="center"></td>
    </tr>
</table>
<?php echo Form::close();?>

	
</div>








</div>
 