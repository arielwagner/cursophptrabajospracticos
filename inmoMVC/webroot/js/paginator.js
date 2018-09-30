

// Clase de Paginación.
Paginator = function(divPaginator, divTable, sizePage)
{
    this.miDiv = divPaginator;  //un DIV donde irán controles de paginación
    this.divTable = divTable;   //la divTable a paginar
    this.sizePage = sizePage;   //el tamaño de la página (filas por página)
    this.currentPage = 1;       //asumiendo que se parte en página 1

	this.pages = Math.floor((this.divTable.rows.length - 1) / this.sizePage); 
 
    this.setPage = function(num)
    {
        if (num < 0 || num > this.pages)
            return;
 
        this.currentPage = num;
        var min = 1 + (this.currentPage - 1) * this.sizePage;
        var max = min + this.sizePage - 1;
 
        for(var i = 1; i < this.divTable.rows.length; i++)
        {
            if (i < min || i > max)
                this.divTable.rows[i].style.display = 'none';
            else
                this.divTable.rows[i].style.display = '';
        }
        //this.miDiv.firstChild.rows[0].cells[0].innerHTML = this.currentPage;
		//this.miDiv.lastChild.rows[0].cells[1].innerHTML = ' - ' + this.currentPage + ' - ';
		var pgFr = ' - ' + this.currentPage + ' de ' + this.pages + ' - ';
		this.miDiv.lastChild.rows[0].cells[2].innerHTML = pgFr;
    }
 
    this.show = function()
    {
		var self = this;
		
		// Crear la divTable. 
        var tblPaginador = document.createElement('table');
 
        // Agregar una fila a la divTable.
        var fil = tblPaginador.insertRow(tblPaginador.rows.length);
 
        // Agregar las celdas que serán los controles.
		
		var pri = fil.insertCell(fil.cells.length);
        pri.innerHTML = '<input type="button" id="btnPri" class="btn btn-success" value="Primero" />';
			
        var ant = fil.insertCell(fil.cells.length);
        ant.innerHTML = '<input type="button" id="btnAnt" class="btn btn-success"  value="Anterior" />';
		//ant.className = 'pag_btn';
		
		var nums = fil.insertCell(fil.cells.length);	
		nums.innerHTML = ' - 1 - '; 
        nums.className = 'pag_num';
		
        var sig = fil.insertCell(fil.cells.length);
        sig.innerHTML = '<input type="button" id="btnSig" class="btn btn-success"  value="Siguiente" />';
        //sig.className = 'pag_btn';
        
		var ult = fil.insertCell(fil.cells.length);
        ult.innerHTML = '<input type="button" id="btnUlt" class="btn btn-success"  value="Ultimo" />';
		
		pri.onclick = function() 
		{
			if (self.currentPage == 1)
                return;

			self.setPage(1);
		}
		
		ant.onclick = function()
        {
            if (self.currentPage == 1)
                return;

			self.setPage(self.currentPage - 1);
        }
		
		sig.onclick = function()
        {
            if (self.currentPage == self.pages)
                return;
			
			self.setPage(self.currentPage + 1);
        }
 
 		ult.onclick = function() 
		{
			if (self.currentPage == self.pages)
                return;
			
			self.setPage(self.pages);
		}
 
        // Agregar el DIV de los controles
        this.miDiv.appendChild(tblPaginador);
 
        if (this.divTable.rows.length - 1 > this.pages * this.sizePage)
            this.pages = this.pages + 1;
 
        this.setPage(this.currentPage);
    }
}