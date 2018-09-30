<section>
    <article>
        <div id="divBody">
            <div class="divBodyContent">
                <h2>Documentaci&oacute;n - PHP</h2>
                <h3>El Lenguaje PHP</h3>
                <p>PHP es un lenguaje de programacion interpretado, disenado originalmente para la creacion de paginas web dinamicas. Es usado principalmente en interpretacion del lado del servidor (server-side scripting) pero actualmente puede ser utilizado desde una interfaz de linea de comandos o en la creacion de otros tipos de programas incluyendo aplicaciones con interfaz grafica usando las bibliotecas Qt o GTK+.</p>
                <p>PHP es un acronimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf en 1994; sin embargo la implementacion principal de PHP es producida ahora por The PHP Group y sirve como el estandar de facto para PHP al no haber una especificacion formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre.</p>
                <h3>Recursos Para Usuarios</h3>
                <p>Si eres un usuario registrado, podras descargar el manual PHP que cita temas relacionados con las bases de datos MySQL. Aprenderas algunas tecnicas de desarrollo con el uso de base de datos. Esta orientado para usuarios novatos y avanzados.</p>
                <p>Tambien podras consultar otros recursos acerca de PHP y algunas particularidades de este lenguaje popular, 
                incluso un historial de su evolucion.</p>
                <p>Solo para Registrados</p>
                <!-- Permitir o no descarga de archivo -->
                <?php 
                    if(!isset($_SESSION['sess_user']))
                    {
                        ?>
                            <p>Descargar: Guia de PHP y MySQL</p>                    
                        <?php
                    }
                    else
                    {
                        if(trim($_SESSION['sess_user']) != '') 
                        {
                            ?>
                                <p>Descargar: <a href="stores/Guia_PHP_SQL.pdf"
                                    target="_blank">
                                    Guia de PHP y MySQL</a></p>                     
                            <?php                        
                        } 
                        else
                        {
                            ?>
                                <p>Descargar: Guia de PHP y MySQL</p>                   
                            <?php                        
                        }
                    }
                ?>                
            </div>
        </div>        
    </article>
</section>