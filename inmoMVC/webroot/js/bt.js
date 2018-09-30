$(document).ready(main);

function main() 
{

	$('#btnCargar').click(function() {
		alert("Hola.....");
		filterItem("NP");
	});
};

// Filtrar por Itemas de Niveles divTable Completa. 
function filterItem(varCodNivel)
{
	// var trHTML = '';
	// trHTML += '<th>#</th>';
	// trHTML += '<th>Nombre</th>';
	// trHTML += '<tr>';
	// trHTML += '<td class="trHead">1</td><td class="trHead">Pedro</td>';
	// trHTML += '</tr>';
	// $('#tablaGrilla').append('<tbody>' + trHTML + '</tbody>');
	// setPaginatorHTML();		

	var trHTML = ''; 
	var tdHTML = '';
	var urlFull = "tuescuela_consulta.php";
	setClearPaginatorHTML();
	$('#tablaGrilla thead').remove();
	$('#tablaGrilla tbody').remove();
	tdHTML = '<thead><tr>';
	tdHTML += '<td class="trHead">Recurso</td>';
	tdHTML += '<td class="trHead">Autor</td>';
	tdHTML += '<td class="trHead">Grado</td>';
	tdHTML += '<td class="trHead">Archivo</td>';	
	tdHTML += '</tr></thead>';
	$('#tablaGrilla').append(tdHTML);
	$.ajax({
		cache : false, 
		type : "GET", 
		dataType : "json", 
		contentType: "application/json; charset=utf-8",
		data : { 'codnivel' : varCodNivel },
		url : urlFull, 
	  complete: function(xhr, textStatus) {
	    // No usado.
	  },
	  success: function(data, textStatus, xhr) {
			if(data.length != 0)
			{
				var i = 0; 
				$.each(data, function() {
					tdHTML = '';
					trHTML += '<tr class="trBody">';
					$.each(this, function(fld, value) {
						if (i == 3) 
						{
							tdHTML += 
								'<td><a class="trBodyHyperlink" href="pdfs/' 
								+ value + '" target="_blank">'+ value +'</a></td>';
						}
						else
						{
							tdHTML += '<td>' + value + '</td>'; 
						}
						i++;
					});
					trHTML += tdHTML + '</tr>';
					i = 0;
				});
				$('#tablaGrilla').append('<tbody>' + trHTML + '</tbody>');
				setPaginatorHTML();			
			}
			else
			{ 
				setClearPaginatorHTML();
				var tbErr = document.getElementById('boxGrilla');
				tbErr.innerHTML = 'No existen datos.';
				tbErr.setAttribute(
					'style', 
					'font-family: Arial, Helvetica, sans-serif; ' 
					+ 'font-size:14px; font-weight:bold; color:#f00; '
					+ 'text-align:center;'
				);
			}
	  },
	  error: function(xhr, textStatus, errorThrown) {
			setClearPaginatorHTML();	
			var tbErr = document.getElementById('boxGrilla');
			tbErr.innerHTML = 'Se ha producido un Error. No se ha podido procesar los datos.';
			tbErr.setAttribute(
				'style', 
				'font-family: Arial, Helvetica, sans-serif; ' 
				+ 'font-size:14px; font-weight:bold; color:#f00; '
				+ 'text-align:center;'
			);	
	  }
	});	
}

// Vaciar el Contenedor. 
function setClearPaginatorHTML()
{
	$('#boxGrilla').empty();
	$('#boxGrilla').append('<table id="tablaGrilla"></table>');
	$('#boxGrilla').removeAttr('style');
}

// Cargar el Contenedor.
function setPaginatorHTML()
{
	var paginador = new Paginator(
		document.getElementById('boxGrilla'),
		document.getElementById('tablaGrilla'),
		3
	);
	paginador.show();
} 