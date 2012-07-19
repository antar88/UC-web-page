<html>
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
					{nocache}
					{if $lang_sel == 'cat'}
						$(this).attr("src", 'img/menu/m_sup_cat_sel.png');
					{elseif $lang_sel == 'esp'}
						$(this).attr("src", 'img/menu/m_sup_esp_sel.png');
					{else}
						$(this).attr("src", 'img/menu/m_sup_eng_sel.png');
					{/if}
					{/nocache}
				}) ;
				$('#msupport').mouseout(function() {
					{nocache}
					{if $lang_sel == 'cat'}
						$(this).attr("src", 'img/menu/m_sup_cat_des.png');
					{elseif $lang_sel == 'esp'}
						$(this).attr("src", 'img/menu/m_sup_cat_des.png');
					{else}
						$(this).attr("src", 'img/menu/m_sup_eng_des.png');
					{/if}
					{/nocache}
				}) ;
				$('#mabout').mouseover(function() {
					{nocache}
					{if $lang_sel == 'cat'}
						$(this).attr("src", 'img/menu/m_about_cat_sel.png');
					{elseif $lang_sel == 'esp'}
						$(this).attr("src", 'img/menu/m_about_esp_sel.png');
					{else}
						$(this).attr("src", 'img/menu/m_about_eng_sel.png');
					{/if}
					{/nocache}
				}) ;
				$('#mabout').mouseout(function() {
					{nocache}
					{if $lang_sel == 'cat'}
						$(this).attr("src", 'img/menu/m_about_cat_des.png');
					{elseif $lang_sel == 'esp'}
						$(this).attr("src", 'img/menu/m_about_esp_des.png');
					{else}
						$(this).attr("src", 'img/menu/m_about_eng_des.png');
					{/if}
					{/nocache}
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
			{nocache}
			{if $lang_sel == 'cat'}
				<img id="msupport" src="img/menu/m_sup_cat_des.png"/>
				<img id="mabout" src="img/menu/m_about_cat_des.png"/>
			{elseif $lang_sel == 'esp'}
				<img id="msupport" src="img/menu/m_sup_esp_des.png"/>
				<img id="mabout" src="img/menu/m_about_esp_des.png"/>
			{else}
				<img id="msupport" src="img/menu/m_sup_eng_des.png"/>
				<img id="mabout" src="img/menu/m_about_eng_des.png"/>
			{/if}
			{/nocache}
			
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
			Llengua seleccionada: {nocache}{$lang.hi}{/nocache} <br>
			<ul>
			{nocache}
			{foreach from=$langs item=i key=k}
				{$k}:
				{foreach from=$i item=j key=kj}
			    	<li>{$kj}-->{$j}</li>
			    {/foreach}
			    <br>
			{/foreach}
			{/nocache}
			</ul>
		</p>
			
		</div>
		
		
	</body>
	<footer>
		
	</footer>
</html>