<?php
/*
Plugin Name: Slideshow
Description: Simples Bootstrap Slideshow
Version: 1.0
Author: WGARCIA
Author URI: http://www.neticombrasil.com.br
*/
 
# get correct id for plugin
$thisfile 		= basename(__FILE__, ".php");
$slideshow_file = GSDATAOTHERPATH . 'slideshow.json';
 
# register plugin
register_plugin(
	$thisfile, 							//Plugin id
	'Slideshow', 						//Plugin name
	'1.0', 								//Plugin version
	'WGARCIA',  						//Plugin author
	'http://www.neticombrasil.com.br', 	//author website
	'Simples Slideshow Bootstrap', 		//Plugin description
	'theme', 							//page type - on which admin tab to display
	'admin_slideshow'  					//main function (administration)
);

if (isset($_POST['submit_slideshow_pizzaria'])) {		
		
	$array = array(
					'slide1' => array(
									'backimg' => $_POST['slide1_backimg'], 
									'frontimg' => $_POST['slide1_frontimg'],
									'frontimgeffect' => $_POST['slide1_frontimgeffect'],
									'frontimgx' => $_POST['slide1_frontimgx'],
									'frontimgy' => $_POST['slide1_frontimgy'],
									'frontimgdelay' => $_POST['slide1_frontimgdelay'],
									'title' => $_POST['slide1_title'],
									'titleeffect' => $_POST['slide1_titleeffect'],
									'titlesize' => $_POST['slide1_titlesize'],
									'titlew' => $_POST['slide1_titlew'],
									'titlex' => $_POST['slide1_titlex'],
									'titley' => $_POST['slide1_titley'],
									'titlecolor' => $_POST['slide1_titlecolor'],
									'titlebgcolor' => $_POST['slide1_titlebgcolor'],
									'titledelay' => $_POST['slide1_titledelay'],       
									'text' => $_POST['slide1_text'],
									'texteffect' => $_POST['slide1_texteffect'],
									'textsize' => $_POST['slide1_textsize'],
									'textw' => $_POST['slide1_textw'],
									'textx' => $_POST['slide1_textx'],
									'texty' => $_POST['slide1_texty'], 
									'textcolor' => $_POST['slide1_textcolor'],
									'textbgcolor' => $_POST['slide1_textbgcolor'],
									'textdelay' => $_POST['slide1_textdelay'],
									'buttontext' => $_POST['slide1_buttontext'],
									'buttoneffect' => $_POST['slide1_buttoneffect'],
									'buttonlink' => $_POST['slide1_buttonlink'],
									'buttontarget' => $_POST['slide1_buttontarget'],
									'buttontextcolor' => $_POST['slide1_buttontextcolor'],
									'buttonbgcolor' => $_POST['slide1_buttonbgcolor'],
									'buttonx' => $_POST['slide1_buttonx'],
									'buttony' => $_POST['slide1_buttony'],
									'buttondelay' => $_POST['slide1_buttondelay'] ),
					'slide2' => array(
									'backimg' => $_POST['slide2_backimg'], 
									'frontimg' => $_POST['slide2_frontimg'],
									'frontimgeffect' => $_POST['slide2_frontimgeffect'],
									'frontimgx' => $_POST['slide2_frontimgx'],
									'frontimgy' => $_POST['slide2_frontimgy'],
									'frontimgdelay' => $_POST['slide2_frontimgdelay'],
									'title' => $_POST['slide2_title'],
									'titleeffect' => $_POST['slide2_titleeffect'],
									'titlesize' => $_POST['slide2_titlesize'],
									'titlew' => $_POST['slide2_titlew'],
									'titlex' => $_POST['slide2_titlex'],
									'titley' => $_POST['slide2_titley'],
									'titlecolor' => $_POST['slide2_titlecolor'],
									'titlebgcolor' => $_POST['slide2_titlebgcolor'],
									'titledelay' => $_POST['slide2_titledelay'],       
									'text' => $_POST['slide2_text'],
									'texteffect' => $_POST['slide2_texteffect'],
									'textsize' => $_POST['slide2_textsize'],
									'textw' => $_POST['slide2_textw'],
									'textx' => $_POST['slide2_textx'],
									'texty' => $_POST['slide2_texty'], 
									'textcolor' => $_POST['slide2_textcolor'],
									'textbgcolor' => $_POST['slide2_textbgcolor'],
									'textdelay' => $_POST['slide2_textdelay'],
									'buttontext' => $_POST['slide2_buttontext'],
									'buttoneffect' => $_POST['slide2_buttoneffect'],
									'buttonlink' => $_POST['slide2_buttonlink'],
									'buttontarget' => $_POST['slide2_buttontarget'],
									'buttontextcolor' => $_POST['slide2_buttontextcolor'],
									'buttonbgcolor' => $_POST['slide2_buttonbgcolor'],
									'buttonx' => $_POST['slide2_buttonx'],
									'buttony' => $_POST['slide2_buttony'],
									'buttondelay' => $_POST['slide2_buttondelay'] ),
					'slide3' => array(
									'backimg' => $_POST['slide3_backimg'], 
									'frontimg' => $_POST['slide3_frontimg'],
									'frontimgeffect' => $_POST['slide3_frontimgeffect'],
									'frontimgx' => $_POST['slide3_frontimgx'],
									'frontimgy' => $_POST['slide3_frontimgy'],
									'frontimgdelay' => $_POST['slide3_frontimgdelay'],
									'title' => $_POST['slide3_title'],
									'titleeffect' => $_POST['slide3_titleeffect'],
									'titlesize' => $_POST['slide3_titlesize'],
									'titlew' => $_POST['slide3_titlew'],
									'titlex' => $_POST['slide3_titlex'],
									'titley' => $_POST['slide3_titley'],
									'titlecolor' => $_POST['slide3_titlecolor'],
									'titlebgcolor' => $_POST['slide3_titlebgcolor'],
									'titledelay' => $_POST['slide3_titledelay'],       
									'text' => $_POST['slide3_text'],
									'texteffect' => $_POST['slide3_texteffect'],
									'textsize' => $_POST['slide3_textsize'],
									'textw' => $_POST['slide3_textw'],
									'textx' => $_POST['slide3_textx'],
									'texty' => $_POST['slide3_texty'], 
									'textcolor' => $_POST['slide3_textcolor'],
									'textbgcolor' => $_POST['slide3_textbgcolor'],
									'textdelay' => $_POST['slide3_textdelay'],
									'buttontext' => $_POST['slide3_buttontext'],
									'buttoneffect' => $_POST['slide3_buttoneffect'],
									'buttonlink' => $_POST['slide3_buttonlink'],
									'buttontarget' => $_POST['slide3_buttontarget'],
									'buttontextcolor' => $_POST['slide3_buttontextcolor'],
									'buttonbgcolor' => $_POST['slide3_buttonbgcolor'],
									'buttonx' => $_POST['slide3_buttonx'],
									'buttony' => $_POST['slide3_buttony'],
									'buttondelay' => $_POST['slide3_buttondelay'] )
					);
		
	$encodedString = json_encode($array);
		
	//Save the JSON string to a text file.
	file_put_contents(GSDATAOTHERPATH . 'slideshow.json', $encodedString);
}

# get json data
if (file_exists($slideshow_file)) {

	$file_content = file_get_contents($slideshow_file);
	$slideshow_data = json_decode($file_content, true);
}
 
# activate filter 
//add_filter('content','slideshow'); 
 
# add a link in the admin tab 'theme'
add_action('theme-sidebar', 'createSideMenu', array($thisfile,'Slideshow'));

register_style('animate', $SITEURL.'plugins/slideshow/css/animate.css', GSVERSION, 'screen');
queue_style('animate', GSFRONT); 

register_style('slideshow', $SITEURL.'plugins/slideshow/css/slideshow.css', GSVERSION, 'screen');
queue_style('slideshow', GSFRONT);

register_script('slideshow_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js', '1.12.0', TRUE);
queue_script('slideshow_jquery', GSFRONT); 

register_script('slideshow_bootstrap', $SITEURL.'plugins/slideshow/js/bootstrap.min.js', '3.3.7', TRUE);
queue_script('slideshow_bootstrap', GSFRONT); 

register_script('slideshowjs', $SITEURL.'plugins/slideshow/js/slideshow.js', '0.0.1', TRUE);
queue_script('slideshowjs', GSFRONT); 
 
# functions
function slideshow() {

	$altura = "80vh";
	$intervalo = '5000';
	
	$slideshow_file 	= GSDATAOTHERPATH . 'slideshow.json';
	$file_content 		= file_get_contents($slideshow_file);
	$dados			 	= json_decode($file_content, true);

	?>

	<section id="banner" class="carousel slide carousel-fade" data-interval="<?php echo $intervalo; ?>">
	    <ol class="carousel-indicators">
	        <?php $i = 0; foreach ($dados as $item)  : ?>
	            <?php $active = ($i == 0) ? " class='active'" : "";  ?>
	            <li data-target='#banner' data-slide-to='<?php echo $i; ?>' <?php echo $active; ?>></li>
	            <?php $i++; ?>
	        <?php endforeach; ?>
	    </ol>
	    <div class="carousel-inner" role="listbox">
	    	<div class="border-elipse"> </div>
	    	<?php $i = 1; foreach ($dados as $item)  : ?>
	            <?php $active = ($i == 1) ? " active" : "";  ?>
	            <!-- Itens -->
	            <div class="item <?php echo $active; ?> <?php echo "slide" . $i;  ?>" style="height: <?php echo $altura; ?>;  background-image: url(<?php echo $item['backimg']; ?>); background-size: cover; background-repeat: no-repeat;">
	            	<div class="container">
	                	<?php if (!empty($item['frontimg']) ) :  ?>
	                		<img alt="" data-animation="animated <?php echo $item['frontimgeffect']; ?>" src="<?php echo $item['frontimg']; ?>" style="position: absolute; width: 100%; left: <?php echo $item['frontimgx']; ?>; bottom: <?php echo $item['frontimgy']; ?>;  animation-delay: <?php echo $item['frontimgdelay'] . "s";  ?>;">
	                	<?php endif; ?>
	                	<?php if (!empty($item['title']) ) :  ?>
	                		<h2 data-animation="animated <?php echo $item['titleeffect']; ?>" style="position: absolute; font-size: <?php echo $item['titlesize']; ?>; width: <?php echo $item['titlew']; ?>; left: <?php echo $item['titlex']; ?>; top: <?php echo $item['titley']; ?>; color: <?php echo $item['titlecolor']; ?>; <?php echo ( !empty($item['titlebgcolor']) ) ? "background-color: " . $item['titlebgcolor'] : ""; ?>  animation-delay: <?php echo $item['titledelay'] . "s";  ?>; ">
	                			<?php echo $item['title']; ?>
	                		</h2>
	                	<?php endif; ?>
	                	<?php if (!empty($item['text']) ) :  ?>
	                		<h3 data-animation="animated <?php echo $item['texteffect']; ?>" style="position: absolute; font-size: <?php echo $item['textsize']; ?>; width: <?php echo $item['textw']; ?>; left: <?php echo $item['textx']; ?>; top: <?php echo $item['texty']; ?>; color: <?php echo $item['textcolor']; ?>; <?php echo ( !empty($item['textbgcolor']) ) ? "background-color: " . $item['textbgcolor'] : ""; ?> animation-delay: <?php echo $item['textdelay'] . "s";  ?>; ">
	                			<?php echo $item['text']; ?>
	                		</h3>
	                	<?php endif; ?>
	                	<?php if (!empty($item['buttontext']) ) :  ?>
							<a data-animation="animated <?php echo $item['buttoneffect']; ?>" href="<?php echo $item['buttonlink']; ?>" class="btn" target="<?php echo $item['buttontarget'];  ?>" style="position: absolute; color: <?php echo $item['buttontextcolor']; ?>; left: <?php echo $item['buttonx']; ?>; top: <?php echo $item['buttony']; ?>; background-color: <?php echo $item['buttonbgcolor']; ?>; animation-delay: <?php echo $item['buttondelay'] . "s";  ?>; "><?php echo $item['buttontext']; ?></a>
						<?php endif; ?>
					</div>
	            </div>
	            <!-- /itens -->
	            <?php $i++; ?>
	        <?php endforeach; ?>
	    </div>
	    <a class="left carousel-control" href="#banner" role="button" data-slide="prev">
	        <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#banner" role="button" data-slide="next">
	        <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
	    </a>
	</section>

	<?php
}
 
function admin_slideshow() {
	echo GSDATAOTHERPATH . 'slideshow.json';
	global $slideshow_file, $slideshow_data;

	$slides = array( 
						'slide1' => array('backimg' => 'Imagem de fundo', 'frontimg' => 'Imagem animada', 'frontimgeffect' => 'Efeito de Entrada da Imagem', 'frontimgx' => 'Posicionamento Horizontal da Imagem', 'frontimgy' => 'Posicionamento Vertical da Imagem', 'frontimgdelay' => 'Atraso para Entrada da Imagem(em segundos)', 'title' => 'Título do Slide', 'titleeffect' => 'Efeito de Entrada do Título', 'titlesize' => 'Tamanho da Fonte do Título', 'titlew' => 'Largura do Bloco do Título', 'titlex' => 'Posicionamento Horizontal do Título', 'titley' => 'Posicionameno Vertical do Título', 'titlecolor' => 'Cor do Título', 'titlebgcolor' => 'Cor de Fundo do Título', 'titledelay' => 'Atraso para Entrada do Título', 'text' => 'Subtítulo', 'texteffect' => 'Efeito de Entrada do Subtítulo', 'textsize' => 'Tamanho da Fonte do Subtítulo', 'textw' => 'Largura do Subtítulo', 'textx' => 'Posicionamento Horizontal do Subtítulo', 'texty' => 'Posicionamento Vertical do Subtítulo', 'textcolor' => 'Cor da Fonte do Subtítulo', 'textbgcolor' => 'Cor de Fundo do Subtítulo', 'textdelay' => 'Atraso para a Entrada do Subtítulo (em segundos)', 'buttontext' => 'Texto do Botão', 'buttoneffect' => 'Efeito de Entrada do Botão', 'buttonlink' => 'Link destino do Botão', 'buttontarget' => 'Tipo de Destino (_self ou _blank)', 'buttontextcolor' => 'Cor do Texto do Botão', 'buttonbgcolor' => 'Cor do Botão', 'buttonx' => 'Posicionamento Horizontal do Botão', 'buttony' => 'Posicionamento Vertical do Botão', 'buttondelay' => 'Atraso para a Entrada do Botão (em segundos)'),
						'slide2' => array('backimg' => 'Imagem de fundo', 'frontimg' => 'Imagem animada', 'frontimgeffect' => 'Efeito de Entrada da Imagem', 'frontimgx' => 'Posicionamento Horizontal da Imagem', 'frontimgy' => 'Posicionamento Vertical da Imagem', 'frontimgdelay' => 'Atraso para Entrada da Imagem(em segundos)', 'title' => 'Título do Slide', 'titleeffect' => 'Efeito de Entrada do Título', 'titlesize' => 'Tamanho da Fonte do Título', 'titlew' => 'Largura do Bloco do Título', 'titlex' => 'Posicionamento Horizontal do Título', 'titley' => 'Posicionameno Vertical do Título', 'titlecolor' => 'Cor do Título', 'titlebgcolor' => 'Cor de Fundo do Título', 'titledelay' => 'Atraso para Entrada do Título', 'text' => 'Subtítulo', 'texteffect' => 'Efeito de Entrada do Subtítulo', 'textsize' => 'Tamanho da Fonte do Subtítulo', 'textw' => 'Largura do Subtítulo', 'textx' => 'Posicionamento Horizontal do Subtítulo', 'texty' => 'Posicionamento Vertical do Subtítulo', 'textcolor' => 'Cor da Fonte do Subtítulo', 'textbgcolor' => 'Cor de Fundo do Subtítulo', 'textdelay' => 'Atraso para a Entrada do Subtítulo (em segundos)', 'buttontext' => 'Texto do Botão', 'buttoneffect' => 'Efeito de Entrada do Botão', 'buttonlink' => 'Link destino do Botão', 'buttontarget' => 'Tipo de Destino (_self ou _blank)', 'buttontextcolor' => 'Cor do Texto do Botão', 'buttonbgcolor' => 'Cor do Botão', 'buttonx' => 'Posicionamento Horizontal do Botão', 'buttony' => 'Posicionamento Vertical do Botão', 'buttondelay' => 'Atraso para a Entrada do Botão (em segundos)'),
						'slide3' => array('backimg' => 'Imagem de fundo', 'frontimg' => 'Imagem animada', 'frontimgeffect' => 'Efeito de Entrada da Imagem', 'frontimgx' => 'Posicionamento Horizontal da Imagem', 'frontimgy' => 'Posicionamento Vertical da Imagem', 'frontimgdelay' => 'Atraso para Entrada da Imagem(em segundos)', 'title' => 'Título do Slide', 'titleeffect' => 'Efeito de Entrada do Título', 'titlesize' => 'Tamanho da Fonte do Título', 'titlew' => 'Largura do Bloco do Título', 'titlex' => 'Posicionamento Horizontal do Título', 'titley' => 'Posicionameno Vertical do Título', 'titlecolor' => 'Cor do Título', 'titlebgcolor' => 'Cor de Fundo do Título', 'titledelay' => 'Atraso para Entrada do Título', 'text' => 'Subtítulo', 'texteffect' => 'Efeito de Entrada do Subtítulo', 'textsize' => 'Tamanho da Fonte do Subtítulo', 'textw' => 'Largura do Subtítulo', 'textx' => 'Posicionamento Horizontal do Subtítulo', 'texty' => 'Posicionamento Vertical do Subtítulo', 'textcolor' => 'Cor da Fonte do Subtítulo', 'textbgcolor' => 'Cor de Fundo do Subtítulo', 'textdelay' => 'Atraso para a Entrada do Subtítulo (em segundos)', 'buttontext' => 'Texto do Botão', 'buttoneffect' => 'Efeito de Entrada do Botão', 'buttonlink' => 'Link destino do Botão', 'buttontarget' => 'Tipo de Destino (_self ou _blank)', 'buttontextcolor' => 'Cor do Texto do Botão', 'buttonbgcolor' => 'Cor do Botão', 'buttonx' => 'Posicionamento Horizontal do Botão', 'buttony' => 'Posicionamento Vertical do Botão', 'buttondelay' => 'Atraso para a Entrada do Botão (em segundos)')
					);
	?>

	<form method="post" action="<?php	echo $_SERVER ['REQUEST_URI']?>">
		
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

		<?php 
			foreach($slides as $key => $fields) {
		echo "<div class='panel panel-default'>";

				echo "<div class='panel-heading' role='tab' id='$key'>
					      <h4 class='panel-title'>
					        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse$key' aria-expanded='true' aria-controls='collapse$key'>
					          $key
					        </a>
					      </h4>
					  </div>";

				echo "<div id='collapse$key' class='panel-collapse collapse' role='tabpanel' aria-labelledby='$key'>
      						<div class='panel-body'>";

				//echo '<h3>' . $key . '</h3>';

				foreach($fields as $field => $label) {
				

					$value = $slideshow_data[$key][$field]; 

					$options = array("bounceIn", "bounceInDown", "bounceInLeft", "bounceInRight", "bounceInUp", "fadeIn", "fadeInDown", "fadeInDownBig", "fadeInLeft", "fadeInLeftBig", "fadeInRight", "fadeInRightBig", "fadeInUp", "rotateIn", "rotateInDownLeft", "rotateInDownRight", "rotateInUpLeft", "rotateInUpRight", "slideInUp", "slideInDown", "slideInLeft", "slideInRight", "zoomIn", "zoomInDown", "zoomInLeft", "zoomInRight", "zoomInUp"); ?>

					<?php if($field == 'frontimgeffect' OR $field == 'titleeffect' OR $field == 'texteffect' OR $field == 'buttoneffect') : ?>

						<p>
							<label style="display: inline; margin-right: 10px;" for="<?php echo $key . '_' . $field; ?>" ><?php echo $label; ?></label>
							<select style="width: 300px;" name="<?php echo $key . '_' . $field; ?>" class="text" value="<?php echo $value; ?>">
								<?php foreach($options AS $option) : ?>
									<?php $selected = ($option == $value) ? "selected='selected'" : "";  ?>
									<option value="<?php echo $option;  ?>" <?php echo $selected;  ?>><?php echo $option; ?></option>
								<?php endforeach; ?>
							</select>
						</p>
					<?php else : ?>
						<p>
							<label style="display: inline; margin-right: 10px;" for="<?php echo $key . '_' . $field; ?>"><?php echo $label; ?></label>
							<input style="width: 300px;" name="<?php echo $key . '_' . $field; ?>" class="text" value="<?php echo $value; ?>" />
						</p>
					<?php endif; ?><?php

					
				}
				echo "</div>";
			echo "</div>";
		echo "</div>";
			}
		?>

	</div>

		<p><input type="submit" id="submit" class="submit" value="<?php echo "Salvar Alterações"; ?>" name="submit_slideshow_pizzaria" /></p>
	
	</form>

	<?php
} 