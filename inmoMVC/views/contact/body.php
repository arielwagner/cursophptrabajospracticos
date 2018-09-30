<section style="background: #ccc;">
    <article>
        <div class="container">
            <div class="row" style="height: 450px; display: table-cell;  vertical-align: middle;">
                <style>
                    .contactPa1 h3 {
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 16px; 
                        font-weight: bold;
                        text-decoration: none;                                     
                        text-align: justify;   
                        text-shadow: 
                            1px 1px 2px #666, 
                            1px 1px 2px #bbb;  
                    }
                    .contactPa1 p,  .contactPa2 p { 
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 12px; 
                        text-decoration: none;                                     
                        text-align: justify;   
                        text-shadow: 
                            1px 1px 2px #666, 
                            1px 1px 2px #bbb;    
                    }  
                    .contactPa2 {
                        border: 1px solid #999; 
                        border-radius: 5px; 
                        margin: 8px;
                        padding: 15px;
                        text-shadow: 
                            1px 1px 2px #666, 
                            1px 1px 2px #bbb;                            
                    }
                    .contactImg1 img {
                        width: 50%; 
                        height: 50%;
                        box-shadow: 
                            1px 1px 2px #666, 
                            1px 1px 2px #bbb; 
                    }
                    input[type="text"], input[type="email"] { 
                        padding: 2px; 
                        margin: 2px; 
                        height: 30px;
                        box-shadow: 
                            1px 1px 2px #666, 
                            1px 1px 2px #bbb; 
                    }                
                    textarea { 
                        padding: 2px; 
                        margin: 2px; 
                        height: 80px;
                        width: 95%;
                        box-shadow: 
                            1px 1px 2px #666, 
                            1px 1px 2px #bbb; 
                    }                
                    input[type="button"] { 
                        padding: 2px; 
                        margin: 2px; 
                        height: 30px;
                        width: 80px;
                        box-shadow: 
                            1px 1px 2px #666, 
                            1px 1px 2px #bbb; 
                    }                                            
                </style>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <div class="contactPa1"> 
                        <h3>Contacto:</h3>
                        <p>Cont&aacute;ctese con nosotros y deje sus inquietudes, muy pronto 
                        estaremos en comunicaci&oacute;n con Usted.</p>
                    </div>
                    <div class="contactPa2">
                        <form method="post">
                            <table>
                                <tr>
                                    <td><p>Nombre:</p></td>
                                    <td><input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre..." /></td>
                                </tr>
                                <tr>
                                    <td><p>Email:</p></td>
                                    <td><input type="email" id="txtEmail" name="txtEmail" placeholder="persona@dominio.com..." /></td>
                                </tr>         
                                <tr>
                                    <td><p>Mensaje:</p></td>
                                    <td><textarea id="txtCuerpo" name="txtCuerpo" placeholder="Deja tu consulta aqu&iacute;..." ></textarea></td>
                                </tr>    
                                <tr>
                                    <td colspan="2" align="right"><input type="button" class="btn btn-success" value="Enviar" /></td>
                                </tr>                                                   
                            </table>
                        </form>                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contactImg1">
                        <img src=<?php echo WEBROOT.'/'. "images/contact.png" ?>  />
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </article>
</section>