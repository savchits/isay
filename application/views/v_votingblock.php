<?php foreach($voteblocks as $vb): ?>

<div class="Voting2">


	<div class="votingblock">

	<div id="scaling"><div id="voteandscale"><img src='media/css/loader.gif'></div>
	
	<div id="activecountry">
	<div id="tochoosed"><div id='tochoosedtext'>SCALE </div></div>
	<div id="choosed">WORLD</div>
	
	</div>
	
	
	
	</div>
        
        <div id="who">
            <?php echo Form::open('index/index');?>


	<SELECT id="selectt" NAME='selection'>
	    <OPTION VALUE='option1'>WORLD
		<OPTION VALUE='option1'>USA
		<OPTION VALUE='option1'>RUSSIA
		<OPTION VALUE='option1'>CHINA
		<OPTION VALUE='option1'>UNITED KINGDOM
		<OPTION VALUE='option1'>BELARUS
        <OPTION VALUE='option1'>...

	</SELECT>
	<SELECT id="selectt" NAME='selection'>
	    <OPTION VALUE='option1'>CITY
        <OPTION VALUE='option1'>NEW YORK
		<OPTION VALUE='option1'>MOSCOW
        <OPTION VALUE='option1'>PARIS
        <OPTION VALUE='option1'>LONDON
        <OPTION VALUE='option1'>LOS ANGELES
        <OPTION VALUE='option1'>BERLIN
		<OPTION VALUE='option1'>ST PETERBURG
		<OPTION VALUE='option1'>EKATERINBURG
        <OPTION VALUE='option1'>...

    </SELECT>
	<SELECT id="selectt" NAME='selection'>
	    <OPTION VALUE='option1'>UNIVERSITY
        <OPTION VALUE='option1'>HARVARD
        <OPTION VALUE='option1'>CAMBRIDGE
        <OPTION VALUE='option1'>МГУ
        <OPTION VALUE='option1'>МГТУ им Н. Э. Баумана
		<OPTION VALUE='option1'>МГИМО
		<OPTION VALUE='option1'>МГЛУ
        <OPTION VALUE='option1'>БНТУ
        <OPTION VALUE='option1'>...

    </SELECT>
	
	
    <div id="data"><?php echo $date; ?></div>
    </div>
		<div id="vote">


    <div id="question"><div id="picavatar">
    <?php echo HTML::image('media/Images/1327590120_330d49.jpg');?></div>
    <div id="textquestion"><?php echo $vb->name; ?>

</div>

    </div>



    <?php foreach($answears as $anss): ?>

            <?if($vb->id == $anss->poll_id):?>
            <div id='bottondiv' class="answear">
            <?php echo Form::input('what', 'VOTE', array(
                                                             'class' => 'btn',
                                                             'id' => 'firstbotton'));?>
            <?php echo Form::label('firstbotton', $anss->name, array('id' => 'firstbottonlabel'));?>
            </div>
            <div class='hiddenabout'><img src='media/Images/brgn.jpg'>Barack Hussein Obama II</div>
            <?endif?>


    <?php endforeach; ?>


        <INPUT TYPE="hidden" NAME=von VALUE="1"/>
        <INPUT TYPE="hidden" NAME=a1 VALUE="Ответ №1"/>
        <INPUT TYPE="hidden" NAME=a2 VALUE="Ответ №2"/>
        <INPUT TYPE="hidden" NAME=a3 VALUE="Ответ №3"/>
        <INPUT TYPE="hidden" NAME=a4 VALUE="Ответ №4"/>
        <INPUT TYPE="hidden" NAME=a5 VALUE="Ответ №5"/>



</div>

	</div>

	</div>

<div id='onedescription'>
        <div id="aboutvote">ABOUT</div>
        <div id='about'>
            <div id='textinside'>
<?php echo $vb->describethisblock; ?>

        </div>
        </div>
        </div>

<?php endforeach; ?>




<?php echo Form::close();?>






