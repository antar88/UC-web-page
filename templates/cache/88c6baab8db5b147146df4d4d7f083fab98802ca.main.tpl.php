<?php /*%%SmartyHeaderCode:19399321865005c68ecc6f72-71170110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c6baab8db5b147146df4d4d7f083fab98802ca' => 
    array (
      0 => 'templates/main.tpl',
      1 => 1342722223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19399321865005c68ecc6f72-71170110',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_500850b689e578_63154794',
  'variables' => 
  array (
    'lang_sel' => 1,
    'lang' => 1,
    'langs' => 1,
    'k' => 1,
    'i' => 1,
    'kj' => 1,
    'j' => 1,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500850b689e578_63154794')) {function content_500850b689e578_63154794($_smarty_tpl) {?><html>
	<header>
		<title> Undead Coders </title> 
		<link rel="stylesheet" type="text/css" href="css/main.css"></link> 
		<link rel="icon" href="img/mini.png" type="image/x-icon">
		
		<<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		
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
					preloadImage: 'img/loading.gif',
					play: 5000,
					pause: 2500,
					hoverPause: true
				});
			});

        </script>
	</header>
	<body>
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
		<div id="slides">
			<div class="slides_container">
                <div>
                    <img src="img/slides/a.png">
                </div>
                <div>
                    <img src="img/slides/b.png">
                </div>
                <div>
                    <img src="img/slides/c.png">
                </div>
                <div>
                    <img src="img/slides/d.png">
                </div>
            </div>
		</div>
		<div id="content"> 
			
			<p> Info que porta Smarty: <br>
			Llengua seleccionada: <?php echo $_smarty_tpl->tpl_vars['lang']->value['hi'];?>
 <br>
			<ul>
			
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
				<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:
				<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['kj'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['i']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['kj']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
			    	<li><?php echo $_smarty_tpl->tpl_vars['kj']->value;?>
--><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</li>
			    <?php } ?>
			    <br>
			<?php } ?>
			
			</ul>
		</p>
			
		</div>
		
		
	</body>
	<footer>
		
	</footer>
</html><?php }} ?>