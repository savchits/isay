<div id="admin3">
    <br>
<?php echo Form::open('indexadmin/addnews');?>
<table width="100%" cellspacing="3">
    <tr>
        <td > <?php echo Form::label('name', 'NAME');?></td>
        <td id="forma" > <?php echo Form::input('name', $data['name'], array('size' => 100));?></td>
    </tr>
    <tr>
        <td > <?php echo Form::label('text', 'TEXT');?></td>
        <td id="forma" > <?php echo Form::input('text', $data['text'], array('size' => 100));?></td>
      
    </tr>
    <tr>
        <td > <?php echo Form::label('link', 'LINK');?></td>
        <td id="forma" > <?php echo Form::input('link', $data['link'], array('size' => 100));?></td>
      
    </tr>
      <tr>
        <td > <?php echo Form::label('countrie_id', 'COUNTRY_ID');?></td>
        <td id="forma" > <?php echo Form::input('countrie_id', $data['countrie_id'], array('size' => 100));?></td>
      
    </tr>
    <tr>
        <td id="sub" colspan="2" align="center"><?php echo Form::submit('submit', 'SAVE');?></td>
    </tr>
</table>
<?php echo Form::close();?>
</div>
