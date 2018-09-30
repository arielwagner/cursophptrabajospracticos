<div id="divRegistro">
    <div class="divRegistroArea">
       <form id="frmRegistro" action="index.php?nav=home&amp" method="post">
            <div class="divRegistroTitle">
                <h3>Reg&iacute;strarse</h3>
            </div>            
            <div class="divRegistroInputs">
                <label for="txtUserRegister">Nombre de Usuario:</label>
                <input type="text" id="txtUserRegister" name="txtUserRegister" 
                    placeholder="Nombre de Usuario..." required 
                    oninvalid="setCustomValidity('No puede quedar vacío.')" 
                    oninput="setCustomValidity('')" />
            </div>
            <div class="divRegistroInputs">
                <div id="err1"></div>
                <label for="txtPasswordRegister1">Contrase&ntilde;a:</label>
                <input type="password" id="txtPasswordRegister1" 
                   name="txtPasswordRegister1" 
                    placeholder="Contrase&ntilde;a..." required 
                    oninvalid="setCustomValidity('No puede quedar vacío.')" 
                    oninput="setCustomValidity('')" />
            </div>
            <div class="divRegistroInputs">
                <div id="err2"></div>
                <label for="txtPasswordRegister2">Comparar Contrase&ntilde;a:</label>
                <input type="password" id="txtPasswordRegister2" 
                   name="txtPasswordRegister2" 
                    placeholder="Comparar Contrase&ntilde;a..." required 
                    oninvalid="setCustomValidity('No puede quedar vacío.')" 
                    oninput="setCustomValidity('')" />
            </div>  
            <div class="divRegistroInputs">
                <label for="txtSecretoRegister">Palabra o Frase Secreta:</label>
                <input type="text" id="txtSecretoRegister" name="txtSecretoRegister" 
                    placeholder="Palabra o Frase Secreto..." required
                    oninvalid="setCustomValidity('No puede quedar vacío.')" 
                    oninput="setCustomValidity('')" />
            </div>                      
            <div class="divRegistroButtons">
                <input type="submit" value="Registrar" />
            </div>
        </form>    
    </div>
</div>