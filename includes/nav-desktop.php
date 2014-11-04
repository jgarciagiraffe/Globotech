    
    <div class="nav-desktop hidden-tablet hidden-phone" style="height: auto; position:relative; overflow:visible;">
        <nav class="Navbar u-flex u-row-wrap u-endJustify u-centerAlignContent u-centerAlignItems">
            <ul class="nav">
                <li>
                    <a class="dropdown-toggle stands" data-toggle="dropdown" href="">Stands Portátiles</a>
                    <ul class="dropdown-menu" role="menu">
                        <div id="Stands-tabs" class="tabsMenu u-flex">
                            <li class="dropdown-menu--title u-flex-1">
                                <a class="clasificacion" title="Stands-tab1">Categorías</a>
                            </li>                      
                            <li class="dropdown-menu--title u-flex-1">
                                <a class="clasificacion" title="Stands-tab2">Área</a>
                            </li>                        
                            <li class="dropdown-menu--title u-flex-1">
                                <a class="clasificacion" title="Stands-tab3">Marca</a>
                            </li>
                        </div>

                        <!-- Content Tabs -->

                        <div id="Stands-content" class="tabsContent">

                            <div id="Stands-tab1" class="dropdown-content">

                                <li class="dropdown-menu--list" data-submenu-id="submenu-counters">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=counters">Counters</a>
                                    <div id="submenu-counters" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=counters">
                                                        <h3 class="popover-title">PORTÁTILES</h3>
                                                    </a>
                                                    Solo
                                                </li>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=counters">
                                                        <h3 class="popover-title">DESECHABLES</h3>
                                                    </a>
                                                    Doc
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-counters-solo.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li  class="dropdown-menu--list" data-submenu-id="submenu-portapendones">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=portapendones">Portapendones</a>
                                    <div id="submenu-portapendones" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=portapendones">
                                                        <h3 class="popover-title">ESTRUCTURA DESARMABLE</h3>
                                                    </a>
                                                    Punto
                                                </li>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=portapendones">
                                                        <h3 class="popover-title">ENROLLABLES</h3>
                                                    </a>
                                                    Rollo
                                                </li>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=portapendones">
                                                        <h3 class="popover-title">EXTERIORES</h3>
                                                    </a>
                                                    Alto
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-portapendones-backing.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li  class="dropdown-menu--list" data-submenu-id="submenu-backings">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=backings">Backings</a>
                                    <div id="submenu-backings" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=backings">
                                                        <h3 class="popover-title">ESTRUCTURA LIVIANA</h3>
                                                    </a>
                                                    Punto
                                                </li>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=backings">
                                                        <h3 class="popover-title">ESTRUCTURA TIPO ARAÑA</h3>
                                                    </a>
                                                    Pop-Up Skyline<br>Energy
                                                </li>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=backings">
                                                        <h3 class="popover-title">CON IMPRESIÓN EN TELA</h3>
                                                    </a>
                                                    TuboZip<br>Tenso
                                                </li>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=backings">
                                                        <h3 class="popover-title">ESTRUCTURA MODULAR</h3>
                                                    </a>
                                                    Pronto<br>Marco<br>Módulo
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-backings-turbozip.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li  class="dropdown-menu--list" data-submenu-id="submenu-sismodular">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=sistemas-modulares">Sistemas Modulares</a>
                                    <div id="submenu-sismodular" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=sistemas-modulares">
                                                        <h3 class="popover-title">CON ESTRUCTURA VISIBLE</h3>
                                                    </a>
                                                    Pronto
                                                </li>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=sistemas-modulares">
                                                        <h3 class="popover-title">CON IMPRESIÓN EN TELA</h3>
                                                    </a>
                                                    Módulo<br>Tenso
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-sistemas-modulares-tenso.png" width="450">
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div id="Stands-tab2" class="dropdown-content">

                                <li  class="dropdown-menu--list" data-submenu-id="submenu-1x1">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=1x1">1X1</a>
                                    <div id="submenu-1x1" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=1x1">
                                                        <h3 class="popover-title">1X1</h3>
                                                    </a>
                                                    Solo <br>Punto <br>Rollo <br>Alto <br>Pronto <br>Doc <br>Vivo
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-1x1-rollo.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li  class="dropdown-menu--list" data-submenu-id="submenu-2x2">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=2x2">2X2</a>
                                    <div id="submenu-2x2" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=2x2">
                                                        <h3 class="popover-title">2X2</h3>
                                                    </a>
                                                    Pronto
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-2x2-pronto.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li  class="dropdown-menu--list" data-submenu-id="submenu-3x2">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=3x2">3X2</a>
                                    <div id="submenu-3x2" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=3x2">
                                                        <h3 class="popover-title">3X2</h3>
                                                    </a>
                                                    Tubozip <br>
                                                    Tenso <br>  Skyline <br>Energy <br>Pronto <br>Modulo <br>VideoWall
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-3x2-tenso.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-3x6">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=3x6">3X6</a>
                                    <div id="submenu-3x6" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=3x6">
                                                        <h3 class="popover-title">3X6</h3>
                                                    </a>
                                                    Pronto
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-3x6-pronto.png" width="450">
                                        </div>
                                    </div>
                                </li>

                            </div>

                            <div id="Stands-tab3" class="dropdown-content">

                                <li class="dropdown-menu--list" data-submenu-id="submenu-solo">
                                    <a href="<?php echo home_url( '/' )?>?page_id=130">Solo</a>
                                    <div id="submenu-solo" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=130">
                                                        <h3 class="popover-title">COUNTER PORTÁTIL</h3>
                                                    </a>
                                                    Solo Estándar 
                                                    <br>Solo quattro<br>Solo wave<br>Solo boomerang
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-solo-wave.png" width="450">
                                        </div>
                                    </div>
                                </li>                
                                <li class="dropdown-menu--list" data-submenu-id="submenu-punto">
                                    <a href="<?php echo home_url( '/' )?>?page_id=82">Punto</a>
                                    <div id="submenu-punto" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=82">
                                                        <h3 class="popover-title">BACKING: ESTRUCTURA LIVIANA</h3>
                                                    </a>
                                                    Punto Backing <br>Punto Troquelado<br>Punto Backing Toquelado 
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-punto-backing.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-rollo">
                                    <a href="<?php echo home_url( '/' )?>?page_id=344">Rollo</a>
                                    <div id="submenu-rollo" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=344">
                                                        <h3 class="popover-title">PORTAPENDON ENROLLABLE</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-rollo.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-alto">
                                    <a href="<?php echo home_url( '/' )?>?page_id=334">Alto</a>
                                    <div id="submenu-alto" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=334">
                                                        <h3 class="popover-title">PORTAPENDON PARA EXTERIORES</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-alto-2.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-skyline">
                                    <a href="<?php echo home_url( '/' )?>?page_id=338">Skyline</a>
                                    <div id="submenu-skyline" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=338">
                                                        <h3 class="popover-title">ESTRUCTURA TIPO ARAÑA. POP-UP</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-skyline-folgers.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-energy">
                                    <a href="<?php echo home_url( '/' )?>?page_id=346">Energy</a>
                                    <div id="submenu-energy" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=346">
                                                        <h3 class="popover-title">ESTRUCTURA TIPO ARAÑA. POP-UP</h3>
                                                    </a>
                                                    Energy Isla <br>Energy Backing en Tela
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-energy-puma.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-tubozip">
                                    <a href="<?php echo home_url( '/' )?>?page_id=242">TuboZip</a>
                                    <div id="submenu-tubozip" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=242">
                                                        <h3 class="popover-title">BACKING CON IMPRESIÓN EN TELA</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-turbozip.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-tenso">
                                    <a href="<?php echo home_url( '/' )?>?page_id=336">Tenso</a>
                                    <div id="submenu-tenso" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=336">
                                                        <h3 class="popover-title">BACKING CON IMPRESIÓN EN TELA</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-tenso.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-pronto">
                                    <a href="<?php echo home_url( '/' )?>?page_id=348">Pronto</a>
                                    <div id="submenu-pronto" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=348">
                                                        <h3 class="popover-title">ESTRUCTURA MODULAR<br>CON ESTRUCTURA VISIBLE</h3>
                                                    </a>
                                                    Pronto Exhibición Interactiva<br>Pronto Backing <br>Pronto Impulso de Marca <br>Pronto Exhibición Fácil <br>Pronto Backing Sencillo<br>Pronto Exhibición Múltiple
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/sp-pronto.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-pygmy">
                                    <a href="<?php echo home_url( '/' )?>?page_id=354">Módulo</a>
                                    <div id="submenu-pygmy" class="popover">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=354">
                                                        <h3 class="popover-title">ESTRUCTURA MODULAR<br>CON IMPRESIÓN EN TELA</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </div>

                        </div>

                        <!-- End Content Tabs -->

                    </ul>
                </li>
            </ul>

            <!-- Exhibición digital -->

            <ul class="nav">
                <li>
                    <a class="dropdown-toggle stands" data-toggle="dropdown" href="">Exhibición Digital</a>
                    <ul class="dropdown-menu" role="menu">
                        <div id="Exhibition-tabs" class="tabsMenu u-flex">
                            <li class="dropdown-menu--title u-flex-1">
                                <a class="clasificacion" title="Ex-tab1">Categorías</a>
                            </li>
                            <li class="dropdown-menu--title u-flex-1">
                                <a class="clasificacion" title="Ex-tab2">Marcas</a>
                            </li>
                        </div>

                        <!-- Content Tabs -->

                        <div id="Exhibition-content" class="tabsContent">

                            <div id="Ex-tab1" class="dropdown-content">

                                <li class="dropdown-menu--list" data-submenu-id="submenu-transmision-remota">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=transmision-remota-de-contenidos">Transmisión Remota</a>
                                    <div id="submenu-transmision-remota" class="popover popover-right">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=transmision-remota-de-contenidos">
                                                        <h3 class="popover-title">INFORMACIÓN SIN LÍMITE DE TIEMPO Y ESPACIO</h3>
                                                    </a>
                                                    Box
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/ed-transmision-remota-box.png" width="450">                    
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-pantallas-comerciales">
                                    <a href="#">Pantallas Comerciales</a>
                                    <div id="submenu-pantallas-comerciales" class="popover popover-right">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>#">
                                                        <h3 class="popover-title">BACKING DIGITAL</h3>
                                                    </a>
                                                    VideoWall
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/ed-pantallas-comerciales.png" width="450">                    
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-monitores">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=monitores-industriales">Monitores Industriales</a>
                                    <div id="submenu-monitores" class="popover popover-right">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=monitores-industriales">
                                                        <h3 class="popover-title">PANTALLAS COMERCIALES</h3>
                                                    </a>
                                                    TVG-42"
                                                </li>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=monitores-industriales">
                                                        <h3 class="popover-title">EXHIBICIÓN INTERACTIVA</h3>
                                                    </a>
                                                    Vivo
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/ed-monitores-industriales-box.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-portapendones-digitales">
                                    <a href="<?php echo home_url( '/' )?>?product_cat=portapendones-digitales">Portapendones</a>
                                    <div id="submenu-portapendones-digitales" class="popover popover-right">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?product_cat=portapendones-digitales">
                                                        <h3 class="popover-title">DIGITAL BANNER STAND</h3>
                                                    </a>
                                                    dBs
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/ed-portamendones-digitales-dbs.png" width="450">
                                        </div>
                                    </div>
                                </li>

                            </div>

                            <div id="Ex-tab2" class="dropdown-content">

                                <li class="dropdown-menu--list" data-submenu-id="submenu-box">
                                    <a href="<?php echo home_url( '/' )?>?page_id=368">Box</a>
                                    <div id="submenu-box" class="popover popover-right">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=368">
                                                        <h3 class="popover-title">TRANSMISIÓN REMOTA DE CONTENIDOS</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/ed-box.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-videowall">
                                    <a href="<?php echo home_url( '/' )?>?page_id=356">VideoWall</a>
                                    <div id="submenu-videowall" class="popover popover-right">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=356">
                                                        <h3 class="popover-title">PANTALLAS COMERCIALES</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/ed-videowall-box.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-tvg-42">
                                    <a href="#">TVG-42"</a>
                                    <div id="submenu-tvg-42" class="popover popover-right">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>#">
                                                        <h3 class="popover-title">MONITORES INDUSTRIALES</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/ed-tv-box.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-dbs">
                                    <a href="<?php echo home_url( '/' )?>?page_id=143">dBs</a>
                                    <div id="submenu-dbs" class="popover popover-right">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=143">
                                                        <h3 class="popover-title">PORTAPENDONES DIGITALES</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/ed-dbs-dBs.png" width="450">
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu--list" data-submenu-id="submenu-vivo">
                                    <a href="<?php echo home_url( '/' )?>?page_id=371">Vivo</a>
                                    <div id="submenu-vivo" class="popover popover-right">
                                        <div class="popover-content">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo home_url( '/' )?>?page_id=371">
                                                        <h3 class="popover-title">EXHIBICIÓN INTERACTIVA</h3>
                                                    </a>
                                                </li>
                                            </ul>
                                            <img src="<?php echo get_template_directory_uri()?>/img/menu/ed-vivo.png" width="450">
                                        </div>
                                    </div>
                                </li>

                            </div>
                        </div>

                        <!-- End content tabs -->

                    </ul>
                </li>
            </ul>

            <ul class="nav">
                <li>
                    <a href="<?php echo home_url( '/' )?>?page_id=158">Impresión Digital</a>                    
                </li>
            </ul>

            <ul class="nav">
                <li><a href="<?php echo home_url( '/' )?>?page_id=373">Nosotros</a></li>
            </ul>

            <ul class="nav">
                <li><a href="<?php echo home_url( '/' )?>?page_id=170">Contáctenos</a></li>
            </ul>

        </nav>
    </div>