<style>
    footer {             
        background: #000;
    } 
    .linkSocialMedia {
        font-family: Verdana, Geneva, sans-serif;
        font-size: 11px; 
        font-weight: bold; 
        text-decoration: none; 
        color: #FFF; 
        cursor: pointer; 
        list list-style: none;
    }
    .linkSocialMedia: hover {
        font-family: Verdana, Geneva, sans-serif;
        font-size: 11px; 
        font-weight: bold; 
        text-decoration: none; 
        color: #FF0000; 
        cursor: pointer; 
    }
    hr {
        color: #FFF;
        display: block;
        margin-top: 0.5em;
        margin-bottom: 0.5em;
        margin-left: auto;
        margin-right: auto;
        border-style: inset;
        border-width: 1px;
    }
    .box1 {
        /*  vertical-align: middle; */
        text-align: center;              
    }
    .box2 {
        vertical-align: middle;
        text-align: center;  
    }
    .parrafo1  { 
        font-family: Verdana, Geneva, sans-serif;
        font-size: 11px; 
        font-weight: bold; 
        color: #FFF; 
        padding: 5px;
    } 
    .parrafo2  { 
        font-family: Verdana, Geneva, sans-serif;
        font-size: 11px; 
        font-weight: bold; 
        color: #FFF; 
        padding-top: 15px;
    }        
</style>    
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="box1">
                    <p class="parrafo1">Av. Los Andes 1234 Piso 4&deg; y 5&deg;</p>
                    <p class="parrafo1">CP (X1122BB)</p>
                    <p class="parrafo1">Ciudad Aut&oacute;noma de Buenos Aires</p>                        
                </div> 
                <hr/>                   
            </div>            
        </div>
        <div class="row">
            <div class="col-4 col-sm-4">
                <p style="font-family: Verdana, Geneva, sans-serif; font-size: 14px; font-weight: bold; color: #FFF; ">My Home:</p>                   
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php?call=gallery&">Galer&iacute;a</a></li>
                    <li><a href="index.php?call=contact&">Contacto</a></li>
                    <li><a href="index.php?call=about&"> Acerca</a></li>
                </ul>                        
            </div>
            <div class="col-4 col-sm-4">
                <div class="box2">
                    <p class="parrafo2">JSS - Job Systems Solutions - Copyright &copy; 2018</p>
                </div>
            </div>    
            <div class="col-4 col-sm-4">
                <p style="font-family: Verdana, Geneva, sans-serif; font-size: 14px; font-weight: bold; color: #FFF; ">S&iacute;guenos:</p>                   
                <ul>
                    <li><a class="linkSocialMedia" href="#">
                    <img src="<?php echo WEBROOT.'/'. "images/ic_facebook.png" ?>" width="25" heigh="25" /> Facebook</a></li>
                    <li><a class="linkSocialMedia" href="#">
                    <img src="<?php echo WEBROOT.'/'. "images/ic_twitter.png" ?>" width="25" heigh="25" /> Twitter</a></li>
                    <li><a class="linkSocialMedia" href="#">
                    <img src="<?php echo WEBROOT.'/'. "images/ic_instagram.png" ?>"  width="25" heigh="25" /> Instagram</a></li>
                    <li><a class="linkSocialMedia" href="#">
                    <img src="<?php echo WEBROOT.'/'. "images/ic_whatsapp.png" ?>" width="25" heigh="25" /> WhatsApp</a></li>
                </ul>
            </div>                
        </div>             
    </div>    
</footer>