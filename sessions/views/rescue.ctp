<?php
    require_once 'controllers/sessionscontroller.php';
?>
<div id="divRescue">
   <div class="divRescueArea">
    <?php

        if(isset($_POST['txtSecretQuest']))
        {
            if(trim($_POST['txtSecretQuest']) != '')
            {
                $usr = ''; $pss = '';
                $sqst = trim($_POST['txtSecretQuest']);
                foreach(SessionsController::getRescueUsername($sqst) as $rows)
                {
                    $usr = $rows['user'];
                    $pss = $rows['password'];
                }
                if($usr == '' && $pss == '')
                {
                    ?>
                        <div class="divRescueTitle">
                            <h3>Usuario No Hallado</h3>
                        </div>
                        <div class="divRescueParagraph">
                            <p>El usuario no ha podido ser hallado o este carece de cuenta.</p>
                        </div>           
                    <?php
                }
                else
                {
                    ?>
                    <div class="divRescueTitle">
                            <h3>Datos del Usuario Hallado</h3>
                        </div>
                        <div class="divRescueParagraph">
                            <p>Usuario: <?php echo $usr; ?></p>
                            <p>Contrase&ntilde;a: <?php echo $pss; ?></p>
                        </div>           
                    <?php                    
                }
            }
            else
            {
                ?>
                   <form id="frmRescue" action="index.php?nav=rescue&amp" method="post">
                        <div class="divRescueInputs">
                            <label for="txtSecretQuest">Respuesta Secreta:</label>
                            <input type="text" id="txtSecretQuest" name="txtSecretQuest" 
                                placeholder="Respuesta Secreta..." />
                        </div>
                        <div class="divRescueButtons">
                            <input type="submit" value="Buscar" />
                        </div>
                    </form>                
                <?php
            }   
        }
        else
        {
            ?>
               <form id="frmRescue" action="index.php?nav=rescue&amp" method="post">
                    <div class="divRescueInputs">
                        <label for="txtSecretQuest">Respuesta Secreta:</label>
                        <input type="text" id="txtSecretQuest" name="txtSecretQuest" 
                            placeholder="Respuesta Secreta..." />
                    </div>
                    <div class="divRescueButtons">
                        <input type="submit" value="Buscar" />
                    </div>
                </form>
            <?php
        }
    ?>
   </div>
</div>