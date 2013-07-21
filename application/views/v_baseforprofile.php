		

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
      <link rel="stylesheet" type="text/css" href="MEDIA/CSS/isaystyle.css">
	   <link rel="stylesheet" type="text/css" href="MEDIA/CSS/votingblock.css">
	   <link rel="stylesheet" type="text/css" href="MEDIA/Bootstrap/css/bootstrap.min.css">
	   		<script src="MEDIA/JS/jquery-1.3.2.min.js" type="text/javascript"></script>
	    <link rel="stylesheet" type="text/javascript" href="MEDIA/Bootstrap/js/bootstrap.min.js">
<link type="text/css" href="MEDIA/CSS/jqueryslidemenu.css" rel="stylesheet" />
<script src="media/js/jqueryslidemenu.js" type="text/javascript"></script>
<!--[if lte IE 7]>
<style type="text/css">
html .jqueryslidemenu { height: 1%; } /* Holly Hack for IE7 and below */
</style>
<![endif]-->
<script> 
onload = function () 
{ 
for (var lnk = document.links, j = 0; j < lnk.length; j++) 
if (lnk [j].href == document.URL) lnk [j].style.color = '#1E90FF'; 
} 
</script>
		

		
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

   <body>
   
<div id="top">
<div id="container">
<div id="toolbar">
<div id="myslidemenu" class="jqueryslidemenu">
<ul>
	<li id="logo" >
	<?php echo HTML::image('media/Images/logo3newlittle.png')?>
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
     <li><?php echo HTML::anchor('index/index/usa', HTML::image('MEDIA/Images/ICONS/flag_usa.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."USA");?></li>
	 <li><?php echo HTML ::anchor('index/index/russia', HTML::image('MEDIA/Images/ICONS/flag_russia.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."RUSSIA");?></li>
	 <li><?php echo HTML:: anchor('index/index/china', HTML::image('MEDIA/Images/ICONS/flag_china.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."CHINA");?></li>
	 <li><?php echo HTML:: anchor('index/index/uk', HTML::image('MEDIA/Images/ICONS/flag_great_britain.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."UK");?></li>
	 <li><?php echo HTML:: anchor('index/index/belarus', HTML::image('MEDIA/Images/ICONS/flag_belarus.png', array('align'=>"left", 'width'=>'20', 'height'=>'20'))."BELARUS");?></li>

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
 
<div id="space2">
	<div id="ownvoting">
<div id="datapro">31 May</div>

		<div id="vote">

<FORM METHOD="POST" >
<div id="question"><div id="picavatar"><img  src='MEDIA/Images/Bruce_png.png'/></div><div id="textquestion">Vegetarianizm is</div></div>
<div id='bottondiv' class="answear"><INPUT id="firstbotton" class="btn" TYPE=submit NAME=answer VALUE=VOTE><label for='firstbotton' id="firstbottonlabel">a stupid idea</label></div><div class='hiddenabout'><img src='media/Images/xxfvd.jpg'>about</div> 
<div id='bottondiv' class="answear" ><INPUT id="firstbotton" class="btn" TYPE=submit NAME=answer VALUE=VOTE> <label for='firstbotton' id="firstbottonlabel">a healthy decision</label></div><div class='hiddenabout'><img src='media/Images/devushka.jpg'>lalala</div> 
<div id='bottondiv' class="answear" ><INPUT id="firstbotton" class="btn" TYPE=submit NAME=answer VALUE=VOTE> <label for='firstbotton' id="firstbottonlabel">the reason for superiority over others</label></div><div class='hiddenabout'><img src='media/Images/dbgdfvd.jpg'>texttext</div> 
<div id='bottondiv' class="answear"><INPUT id="firstbotton" class="btn" TYPE=submit NAME=answer VALUE=VOTE> <label for='firstbotton' id="firstbottonlabel">moral act</label></div><div class='hiddenabout'><img src='media/Images/BinaryImage.jpg'>blabla</div> 
<div id='bottondiv' class="answear"><INPUT id="firstbotton" class="btn" TYPE=submit NAME=answer VALUE=VOTE> <label for='firstbotton' id="firstbottonlabel">adequate diet for modern people</label></div><div class='hiddenabout'><img src='media/Images/cccc.jpg'>some text</div> 



<INPUT TYPE="hidden" NAME=von VALUE="1"/>
<INPUT TYPE="hidden" NAME=a1 VALUE="Ответ №1"/>
<INPUT TYPE="hidden" NAME=a2 VALUE="Ответ №2"/>
<INPUT TYPE="hidden" NAME=a3 VALUE="Ответ №3"/>
<INPUT TYPE="hidden" NAME=a4 VALUE="Ответ №4"/>
<INPUT TYPE="hidden" NAME=a5 VALUE="Ответ №5"/>







</FORM>
</div>





	</div>
	
	<div id="wallpro">
	<div id="wallplace">
	<div class="isaymessage">
            <div id='messageava'><img  src='MEDIA/Images/Bruce_png.png'/></div><div id='messagetext'>
            <span style='color: #1E90FF;
font-size: 11px;
font-family: Verdana'>Legendary rock band of our times is</span> 30 seconds to Mars<span style='color: #1E90FF;
font-size: 11px;
font-family: Verdana'> because</span> their music has global character
   </div>
   </div>
            
            
            
            
            
            
        <div class="isaymessage">You didn't vote yet. VOTE and SHOW your choice on your ISAY profile RIGHT NOW!</div>
	</div>
	
	</div>

</div>
</div>
	<div id="tops">
	

	</div>

</div>
</div>
</div>
</div>


	 



	
   </body>
   

</html>