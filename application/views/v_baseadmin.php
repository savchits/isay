		

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






<!--[if lte IE 7]>
<style type="text/css">
html .jqueryslidemenu { height: 1%; } /* Holly Hack for IE7 and below */
</style>
<![endif]-->
		

<script>

jQuery(function($){
var fx = {
"initmodal":function(){
if($(".model-window").length==0)
{

$("<div>")
							.attr("id", "jquery-overlay")
							.css({
								"background":"#000 repeat-x",
								"opacity": "0.3",
								"position":"fixed",
								"height":"100%",
							})
							.fadeIn("slow")
							.appendTo("body");	
							
return $("<div>").addClass('model-window').appendTo('body');
} else{return $(".model-window");}
},
"initClose" : function(){
$("<a>").attr("href", "#")
.addClass("modal-close-btn")
.html("&times;")
.click(function(event){
event.preventDefault();

$(".model-window").fadeOut("slow", function(){$(this).remove();});
						$("#jquery-overlay").fadeOut("slow", function(){$(this).remove();});
						
}).appendTo(modal);
}
};


$.ajaxSetup({
type:"POST",
success:function(data){
modal.append(data);
},
error:function(msg){
modal.append(msg);
}
});



$(".answear").bind('click',function(event){
	event.preventDefault();
	modal=fx.initmodal();
	fx.initClose();
	$.ajax({
	  url:"enter.html",
	});
});

$(".answear").bind('click',function(event){
	event.preventDefault();
	modal=fx.initmodal();
	fx.initClose();
	$.ajax({
	  url:"enter.html",
	});
});


});
</script>
		
		
		
		
		
		
   </head>

   <body style="background-image:url('media/Images/korporatsiya-monstrov_1920x1200.jpg')">
   
<div id="top">
<div id="container">
<div id="toolbar">
<div id="myslidemenu" class="jqueryslidemenu">
<ul>

	<li id="logo" >
	<?php echo HTML::image('media/Images/logo2newlittle.png')?>
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
            <li class='imageflag'><?php echo HTML::anchor('index/index/usa', HTML::image('media/Images/ICONS/flag_usa.png', array( 'align'=>"left",'width'=>'20', 'height'=>'20'))."USA");?></li>
            <li class='imageflag'><?php echo HTML ::anchor('index/index/russia', HTML::image('media/Images/ICONS/flag_russia.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."RUSSIA");?></li>
            <li class='imageflag'><?php echo HTML:: anchor('index/index/china', HTML::image('media/Images/ICONS/flag_china.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."CHINA");?></li>
            <li class='imageflag'><?php echo HTML:: anchor('index/index/uk', HTML::image('media/Images/ICONS/flag_great_britain.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."UK");?></li>
            <li class='imageflag'><?php echo HTML:: anchor('index/index/belarus', HTML::image('media/Images/ICONS/flag_belarus.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."BELARUS");?></li>

        </ul>
	</li>
	<li  >
	<?php echo HTML::anchor('account','I Listen')?>
	</li>
	<li  >
	<?php echo HTML::anchor('account','I Say')?>
	</li>
	<li id="searchfield"  >
	<form action="search.php" method=POST>
<input type="text" id="poisk"   name=uservalue>

</form>

	
	</li>
	
	</ul>

 </div>
</div>
</div>
</div>





 

    <?=$mainblock?>
 
    <div id="space">
	<div id="news2">

    <?if (isset($block_left)):?>
    <?php foreach($block_left as $lblock): ?>
    <?php echo $lblock; ?>
    <?php endforeach; ?>
    <?endif?>
	
	</div>
	
	<div id="wall">
 
    <?if (isset($votingblock)):?>
    <?php foreach($votingblock as $vblock): ?>
    <?php echo $vblock; ?>
    <?php endforeach; ?>
    <?endif?>

	
	
	</div>
    </div>
    </div>
	<div id="tops">
	
   <?if (isset($block_right)):?>
   <?php foreach($block_right as $rblock): ?>
   <?php echo $rblock; ?>
   <?php endforeach; ?>
   <?endif?>
	</div>

    </div>
    </div>
    </div>


	 



	
    </body>
   

    </html>