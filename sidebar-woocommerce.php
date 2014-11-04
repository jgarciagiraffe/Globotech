<?php 
//echo get_post_type();
$q_obj = $wp_query->get_queried_object();
$product_cat_id = $q_obj->term_id;
?>        
<?php

$bus_filtros = array();
$bus_filtros['Stands Portátiles'] = array('cat_id'=>17);
$bus_filtros['Exhibición Digital'] = array('cat_id'=>18);
$bus_filtros['Counters'] = array('cat_id'=>19);
$bus_filtros['Portapendondes BannerStand'] = array('cat_id'=>20);
$bus_filtros['Backings'] = array('cat_id'=>21);
$bus_filtros['Sistemas Modulares'] = array('cat_id'=>22);
$bus_filtros['Fotografía'] = array('cat_id'=>23);
$bus_filtros['Monitores Industriales'] = array('cat_id'=>24);
$bus_filtros['Portapendones Digitales'] = array('cat_id'=>25);
$bus_filtros['Transmisión Remota'] = array('cat_id'=>26);
$bus_filtros['1-5 minutos'] = array('cat_id'=>28);
$bus_filtros['5-10 minutos'] = array('cat_id'=>29);
$bus_filtros['10-20 minutos'] = array('cat_id'=>30);
$bus_filtros['Más de 20 minutos'] = array('cat_id'=>31);
$bus_filtros['1 persona'] = array('cat_id'=>33);
$bus_filtros['2 personas'] = array('cat_id'=>34);
$bus_filtros['Más de 2 personas'] = array('cat_id'=>35);
$bus_filtros['1x1'] = array('cat_id'=>37);
$bus_filtros['2x2'] = array('cat_id'=>38);
$bus_filtros['3x2'] = array('cat_id'=>39);
$bus_filtros['3x6'] = array('cat_id'=>40);
$bus_filtros['1 a 3 Kilogramos'] = array('cat_id'=>42);
$bus_filtros['3 a 5 Kilogramos'] = array('cat_id'=>43);
$bus_filtros['5 a 7 Kilogramos'] = array('cat_id'=>44);
$bus_filtros['Vinilo encapsulado'] = array('cat_id'=>46);
$bus_filtros['Tela'] = array('cat_id'=>47);
$bus_filtros['Banner'] = array('cat_id'=>48);

$bus_filtros_aux = $bus_filtros;
foreach ($bus_filtros_aux as $bus_filtro_key => $bus_filtro)
{
	$term_bus_filtro = get_term( $bus_filtro['cat_id'], 'product_cat' );
	$bus_filtros[$bus_filtro_key]['slug'] = $term_bus_filtro->slug;
	
	if ($bus_filtro['cat_id'] == $product_cat_id)
	{
		$bus_filtros[$bus_filtro_key]['active'] = 'active';
	}
}

?>
<!-- sidebar -->
<aside class="sidebar-woo" role="complementary">

	<?php //get_template_part('searchform'); ?>  
    
    <div class="encuentre_display">Encuentre el Display perfecto para su marca</div>
    
    <div class="box_bus_filtro">
    	<ul class="bus_filtro">
          <li class="bus_tipo">Por Tipo de Exhibición</li>          
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Stands Portátiles']['slug']; ?>" class="<?php echo $bus_filtros['Stands Portátiles']['active']; ?>">Stands Portátiles</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Exhibición Digital']['slug']; ?>" class="<?php echo $bus_filtros['Exhibición Digital']['active']; ?>">Exhibición Digital - Digital Signage</a></li>
        </ul>
        <ul class="bus_filtro">
          <li class="bus_tipo">Por Categorías</li>
          <li class="bus_subtipo">Stands Portátiles</li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Counters']['slug']; ?>" class="<?php echo $bus_filtros['Counters']['active']; ?>">Counters</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Portapendondes BannerStand']['slug']; ?>" class="<?php echo $bus_filtros['Portapendondes BannerStand']['active']; ?>">Portapendones BannerStand</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Backings']['slug']; ?>" class="<?php echo $bus_filtros['Backings']['active']; ?>">Backings</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Sistemas Modulares']['slug']; ?>" class="<?php echo $bus_filtros['Sistemas Modulares']['active']; ?>">Sistemas Modulares</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Fotografía']['slug']; ?>" class="<?php echo $bus_filtros['Fotografía']['active']; ?>">Fotografía</a></li>
          <li class="bus_subtipo">Exhibición Digital - Digital Signage</li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Monitores Industriales']['slug']; ?>" class="<?php echo $bus_filtros['Monitores Industriales']['active']; ?>">Monitores Industriales</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Portapendones Digitales']['slug']; ?>" class="<?php echo $bus_filtros['Portapendones Digitales']['active']; ?>">Portapendones Digitales</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Transmisión Remota']['slug']; ?>" class="<?php echo $bus_filtros['Transmisión Remota']['active']; ?>">Transmisión Remota de Contenidos</a></li>
        </ul>
        <ul class="bus_filtro">
          <li class="bus_tipo">Por tiempo de Armado</li>
          <li class="tipo_imagen tipo_tiempo_armado tipo_tiempo_armado_1"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['1-5 minutos']['slug']; ?>" class="<?php echo $bus_filtros['1-5 minutos']['active']; ?>">1-5 minutos</a></li>
          <li class="tipo_imagen tipo_tiempo_armado tipo_tiempo_armado_2"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['5-10 minutos']['slug']; ?>" class="<?php echo $bus_filtros['5-10 minutos']['active']; ?>">5-10 minutos</a></li>
          <li class="tipo_imagen tipo_tiempo_armado tipo_tiempo_armado_3"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['10-20 minutos']['slug']; ?>" class="<?php echo $bus_filtros['10-20 minutos']['active']; ?>">10-20 minutos</a></li>
          <li class="tipo_imagen tipo_tiempo_armado tipo_tiempo_armado_4"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Más de 20 minutos']['slug']; ?>" class="<?php echo $bus_filtros['Más de 20 minutos']['active']; ?>">Más de 20 minutos</a></li>
        </ul>
        <ul class="bus_filtro">
          <li class="bus_tipo">Por Facilidad de Transporte</li>
          <li class="tipo_imagen tipo_transporte tipo_transporte_1"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['1 persona']['slug']; ?>" class="<?php echo $bus_filtros['1 persona']['active']; ?>">1 persona</a></li>
          <li class="tipo_imagen tipo_transporte tipo_transporte_2"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['2 personas']['slug']; ?>" class="<?php echo $bus_filtros['2 personas']['active']; ?>">2 personas</a></li>
          <li class="tipo_imagen tipo_transporte tipo_transporte_3"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Más de 2 personas']['slug']; ?>" class="<?php echo $bus_filtros['Más de 2 personas']['active']; ?>">Más de 2 personas</a></li>
        </ul>
        <ul class="bus_filtro">
          <li class="bus_tipo">Por Área (m2)</li>
          <li class="tipo_imagen tipo_area tipo_area_1"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['1x1']['slug']; ?>" class="<?php echo $bus_filtros['1x1']['active']; ?>">1x1</a></li>
          <li class="tipo_imagen tipo_area tipo_area_2"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['2x2']['slug']; ?>" class="<?php echo $bus_filtros['2x2']['active']; ?>">2x2</a></li>
          <li class="tipo_imagen tipo_area tipo_area_3"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['3x2']['slug']; ?>" class="<?php echo $bus_filtros['3x2']['active']; ?>">3x2</a></li>
          <li class="tipo_imagen tipo_area tipo_area_4"><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['3x6']['slug']; ?>" class="<?php echo $bus_filtros['3x6']['active']; ?>">3x6</a></li>
        </ul>
        <ul class="bus_filtro">
          <li class="bus_tipo">Por Peso</li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['1 a 3 Kilogramos']['slug']; ?>" class="<?php echo $bus_filtros['1 a 3 Kilogramos']['active']; ?>">1 a 3 Kilogramos</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['3 a 5 Kilogramos']['slug']; ?>" class="<?php echo $bus_filtros['3 a 5 Kilogramos']['active']; ?>">3 a 5 Kilogramos</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['5 a 7 Kilogramos']['slug']; ?>" class="<?php echo $bus_filtros['5 a 7 Kilogramos']['active']; ?>">5 a 7 Kilogramos</a></li>
        </ul>
        <ul class="bus_filtro">
          <li class="bus_tipo">Por Tipo de Impresión</li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Vinilo encapsulado']['slug']; ?>" class="<?php echo $bus_filtros['Vinilo encapsulado']['active']; ?>">Vinilo encapsulado</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Tela']['slug']; ?>" class="<?php echo $bus_filtros['Tela']['active']; ?>">Tela</a></li>
          <li><a href="<?php echo home_url( '/' ).'?product_cat='.$bus_filtros['Banner']['slug']; ?>" class="<?php echo $bus_filtros['Banner']['active']; ?>">Banner</a></li>
        </ul>
    </div>
     
    
    <div class="box_sidebar_contacto hidden-phone">
    	<?php /*<form role="form" method="post" action="">
        	<label for="side_contacto_nombre">Nombre.</label>
            <input type="text" value="" name="nombre" id="side_contacto_nombre"  />
            <label for="side_contacto_apellido">Apellido.</label>
            <input type="text" value="" name="apellido" id="side_contacto_apellido"  />
            <label for="side_contacto_email">Email.</label>
            <input type="email" value="" name="email" id="side_contacto_email"  />            
            <input type="image" src="<?php echo get_template_directory_uri()?>/img/btn-contacto-consultor.png" id="side_contacto_submit" class="" />
        </form>*/ ?>
        <?php echo do_shortcode( '[contact-form-7 id="419" title="Formulario Rapido Consultoria"]' ); ?>
    </div>    
    		
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Page')) ?>
	</div>
    
		
</aside>
<!-- /sidebar -->