
<div id='enter2'>
<?php echo Form::open('auth/login');?>
<table width="300" cellspacing="5">
    <tr>
        <td ><?php echo Form::label('username', 'Логин');?>:</td>
        <td><?php echo Form::input('username', $data['username'], array('size' => 20));?></td>
    </tr>
    <tr>
        <td ><?php echo Form::label('password', 'Пароль');?>:</td>
        <td><?php echo Form::password('password', $data['password'], array('size' => 20));?></td>
    </tr>
    <tr>
        <td></td>
        <td "><?php echo Form::checkbox('remember');?> Запомнить<br/><br/></td>
    </tr>

    <tr>
        <td align="center"><?php echo Form::submit('submit', 'Войти');?></td>
        <td><?php echo Html::anchor('auth/register', 'Регистрация');?></td>
    </tr>
</table>
<?php echo Form::close();?>
</div>