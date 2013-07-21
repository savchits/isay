		

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
	  url:"enter",
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
     <li><?php echo HTML::anchor('index/index/usa', HTML::image('MEDIA/Images/ICONS/flag_usa.png', array( 'align'=>"left",'width'=>'20', 'height'=>'20'))."USA");?></li>
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
 
<div id="space">

	
	<div id="wall">
 
   <?if (isset($votingblock)):?>
              
                
                    <?php foreach($votingblock as $vblock): ?>
                        <?php echo $vblock; ?>
                    <?php endforeach; ?>
             
            <?endif?>

	
	
	</div>
    
    
    <div id='description'>
        
        <div id='onedescription'>
            	<div id="aboutvote">ABOUT</div></FORM>
                 <div id='about'>
                     	<?php echo HTML::image('media/Images/presidents.png')?>
                     <p>   <a href="#">link for some information</a><br></p>
                    <p> <a href="#">one more link for some information</a></p>
                    
                    <p>
                     this is place for some description of this votings. This is necessary because people have to know what about they say something!
                  </p>
                     
                     
                 </div>
            
            
        </div>
        
           <div id='onedescription'>
            	<div id="aboutvote">ABOUT</div></FORM>
                 <div id='about'>
                          	<?php echo HTML::image('media/Images/presidents.png')?>
                     <p>   <a href="#">link for some information</a><br></p>
                    <p> <a href="#">one more link for some information</a></p>
                    
                    <p>
                     this is place for some description of this votings. This is necessary because people have to know what about they say something!
                  </p>
                 </div>
            
            
        </div>
        
           <div id='onedescription'>
            	<div id="aboutvote">ABOUT</div></FORM>
                 <div id='about'>
                          	<?php echo HTML::image('media/Images/presidents.png')?>
                     <p>   <a href="#">link for some information</a><br></p>
                    <p> <a href="#">one more link for some information</a></p>
                    
                    <p>
                     this is place for some description of this votings. This is necessary because people have to know what about they say something!
                  </p>
                 </div>
            
            
        </div>
        
        
        
        
        
        
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
</div>

	 



	
   </body>
   

</html>