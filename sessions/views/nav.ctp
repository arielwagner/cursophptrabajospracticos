<nav>
    <div id="divNav">
        <ul>
            <li><a href="index.php?nav=home&amp"><span>Inicio</span></a></li>
            <li><a href="index.php?nav=about&amp"><span>Acerca</span></a></li>
            <?php 
                if(!isset($_SESSION['sess_user']))
                {
                    ?>
                        <li><a href="index.php?nav=logon&amp">
                           <img src="images/lampOff.png" />
                            <span>  Iniciar Sesi&oacute;n</span></a></li> 
                        <li><a href="index.php?nav=rescue&amp">
                           <span>Recuperar</span>
                           </a></li>
                        <li><a href="index.php?nav=registered&amp">
                           <span>Reg&iacute;strate</span>
                           </a></li>                         
                    <?php
                }
                else
                {
                    if(trim($_SESSION['sess_user']) != '') 
                    {
                        ?>
                          <li><a href="index.php?nav=logonclose&amp">
                             <img src="images/lampOn.png" />
                              <span>  Cerrar Sesi&oacute;n</span></a></li>
                          <li><a>Bienvenido: <?php echo $_SESSION['sess_user']; ?>
                              </a></li>  
                        <?php                        
                    } 
                    else
                    {
                        ?>
                            <li><a href="index.php?nav=logon&amp">
                               <img src="images/lampOff.png" />
                                <span>  Iniciar Sesi&oacute;n</span></a></li> 
                            <li><a href="index.php?nav=rescue&amp">
                               <span>Recuperar</span>
                               </a></li>
                            <li><a href="index.php?nav=registered&amp">
                               <span>Reg&iacute;strate</span>
                               </a></li>                   
                        <?php                        
                    }
                }
            ?>
        </ul>
    </div>    
</nav>