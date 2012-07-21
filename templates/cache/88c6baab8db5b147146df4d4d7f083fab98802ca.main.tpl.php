<?php /*%%SmartyHeaderCode:19399321865005c68ecc6f72-71170110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c6baab8db5b147146df4d4d7f083fab98802ca' => 
    array (
      0 => 'templates/main.tpl',
      1 => 1342807304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19399321865005c68ecc6f72-71170110',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_500a82fff0a727_60855623',
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500a82fff0a727_60855623')) {function content_500a82fff0a727_60855623($_smarty_tpl) {?><html>
	<header>
		<title> Undead Coders </title> 
		<link rel="stylesheet" type="text/css" href="css/main.css"></link> 
		<link rel="icon" href="img/mini.png" type="image/x-icon">
		
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		
		<script src="includes/slides/slides.jquery.js"></script>

		 <script type="text/javascript">     
		 	//Jquey power                                    
			 $(document).ready(function(){
				$('#mpopkorn').mouseover(function() {
					$(this).attr("src", 'img/menu/m_popkorn_sel.png');
				}) ;
				$('#mpopkorn').mouseout(function() {
					$(this).attr("src", 'img/menu/m_popkorn_des.png');
				}) ;
				$('#malertas').mouseover(function() {
					$(this).attr("src", 'img/menu/m_alertas_sel.png');
				}) ;
				$('#malertas').mouseout(function() {
					$(this).attr("src", 'img/menu/m_alertas_des.png');
				}) ;
				$('#msupport').mouseover(function() {
					
					<?php if ($_smarty_tpl->tpl_vars['lang_sel']->value=='cat'){?>
						$(this).attr("src", 'img/menu/m_sup_cat_sel.png');
					<?php }elseif($_smarty_tpl->tpl_vars['lang_sel']->value=='esp'){?>
						$(this).attr("src", 'img/menu/m_sup_esp_sel.png');
					<?php }else{ ?>
						$(this).attr("src", 'img/menu/m_sup_eng_sel.png');
					<?php }?>
					
				}) ;
				$('#msupport').mouseout(function() {
					
					<?php if ($_smarty_tpl->tpl_vars['lang_sel']->value=='cat'){?>
						$(this).attr("src", 'img/menu/m_sup_cat_des.png');
					<?php }elseif($_smarty_tpl->tpl_vars['lang_sel']->value=='esp'){?>
						$(this).attr("src", 'img/menu/m_sup_cat_des.png');
					<?php }else{ ?>
						$(this).attr("src", 'img/menu/m_sup_eng_des.png');
					<?php }?>
					
				}) ;
				$('#mabout').mouseover(function() {
					
					<?php if ($_smarty_tpl->tpl_vars['lang_sel']->value=='cat'){?>
						$(this).attr("src", 'img/menu/m_about_cat_sel.png');
					<?php }elseif($_smarty_tpl->tpl_vars['lang_sel']->value=='esp'){?>
						$(this).attr("src", 'img/menu/m_about_esp_sel.png');
					<?php }else{ ?>
						$(this).attr("src", 'img/menu/m_about_eng_sel.png');
					<?php }?>
					
				}) ;
				$('#mabout').mouseout(function() {
					
					<?php if ($_smarty_tpl->tpl_vars['lang_sel']->value=='cat'){?>
						$(this).attr("src", 'img/menu/m_about_cat_des.png');
					<?php }elseif($_smarty_tpl->tpl_vars['lang_sel']->value=='esp'){?>
						$(this).attr("src", 'img/menu/m_about_esp_des.png');
					<?php }else{ ?>
						$(this).attr("src", 'img/menu/m_about_eng_des.png');
					<?php }?>
					
				}) ;
				
			 });  
			                                   
	     </script>
	     <script>
	     	//Cridem als slides
			$(function(){
				$('#slides').slides({
					preload: true,
					preloadImage: 'img/slides/loading.gif',
					play: 5000,
					pause: 2500,
					hoverPause: true
				});
			});

        </script>
        <div id="menu"> 
			<img id="logo" src="img/logo.png"></img>
			<img id="mpopkorn" src="img/menu/m_popkorn_des.png"/>
			<img id="malertas" src="img/menu/m_alertas_des.png"/>
			
			<?php if ($_smarty_tpl->tpl_vars['lang_sel']->value=='cat'){?>
				<img id="msupport" src="img/menu/m_sup_cat_des.png"/>
				<img id="mabout" src="img/menu/m_about_cat_des.png"/>
			<?php }elseif($_smarty_tpl->tpl_vars['lang_sel']->value=='esp'){?>
				<img id="msupport" src="img/menu/m_sup_esp_des.png"/>
				<img id="mabout" src="img/menu/m_about_esp_des.png"/>
			<?php }else{ ?>
				<img id="msupport" src="img/menu/m_sup_eng_des.png"/>
				<img id="mabout" src="img/menu/m_about_eng_des.png"/>
			<?php }?>
			
			
		</div>
	</header>
	<body>
	
		
		
		<div id="slides">
			<div class="slides_container">
					
					<div>
                    	<img src="img/slides/a.png">
                    </div>
                    <div>
                    	<img src="img/slides/b.png">
                    </div>
                    <div id="cv1">
               			<video id="v1" autoplay="false" controls="" height="300" width="600" src="vid/intro.m4v" />
					</div>
            </div>
		</div>
		
		<div id="content"> 
			
			<p id="desc"> 
				<?php if ($_smarty_tpl->tpl_vars['lang_sel']->value=='cat'){?>
					<?php echo $_smarty_tpl->tpl_vars['langs']->value['cat']['desc'];?>

				<?php }elseif($_smarty_tpl->tpl_vars['lang_sel']->value=='esp'){?>
					<?php echo $_smarty_tpl->tpl_vars['langs']->value['esp']['desc'];?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->tpl_vars['langs']->value['eng']['desc'];?>

				<?php }?>
			</p>
			
			
			
		</p>
			
		</div>
		
		
	</body>
	<footer class="f1">
		<div id="pf1" class="pf">
			<h2> <?php echo $_smarty_tpl->tpl_vars['langs']->value[$_smarty_tpl->tpl_vars['lang_sel']->value]['uccomp'];?>
 </h2>
			<div id="uccomp">
				<div id="alex"><a class="notblue" href="http://www.alexvn.com" target="_blank">  Àlex Vergara </a></div> 
				<div id="antar"> <a class="notblue" href="http://www.antarmf.com" target="_blank">  Antar Moratona</a> </div>
			</div>
		</div>
		<p id="pf2" class="pf">
			
		</p>
		<p id="p3" class="pf"> 
			
		</p>
	</footer>
</html><?php }} ?>