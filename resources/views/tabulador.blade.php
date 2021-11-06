@extends('layouts.main')
@section('contenido')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

<style>

table.steelBlueCols {
  background-color: #F6FFF6;
  width: 1024px;
  text-align: left;
  border-collapse: collapse;
  margin: 20px 10px;
  
}
table.steelBlueCols td, table.steelBlueCols th {
  border: 0px solid #555555;
  padding: 10px 10px;
}
table.steelBlueCols tbody td {
  font-size: 11px;
  font-weight: bold;
  color: #8F8F8F;
}
table.steelBlueCols tr:nth-child(even) {
  background: #CECECE;
}
table.steelBlueCols thead {
  background: #00B050;
}
table.steelBlueCols thead th {
  font-size: 12px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: left;
}
table.steelBlueCols tfoot td {
  font-size: 13px;
}
table.steelBlueCols tfoot .links {
  text-align: right;
}
table.steelBlueCols tfoot .links a{
  display: inline-block;
  background: #FFFFFF;
  color: #398AA4;
  padding: 2px 8px;
  border-radius: 5px;
}





/*'''''''''''''''''''''''''''''''''''''''*/ 



 

table { font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif; font-size: 12px; margin: 45px; width: 550px;

    text-align: center; border-collapse: collapse; }

 

th { font-size: 13px; font-weight: normal; padding: 8px; border-top: 4px solid #aabcfe;

    border-bottom: 1px solid #fff; color: #039; }

 

td { padding: 8px; background: #e8edff; border-bottom: 1px solid #fff; color: #669; border-top: 1px solid transparent; }

 

tr:hover td { background: #d0dafd; color: #339; }

 

.editar {color: blue; cursor:pointer;}

 

#contenedorForm {margin-left: 45px; font-size:12px;}

 

.boton {   color: black; padding: 5px; margin: 10px;

  background-color: #b9c9fe;

  font-weight: bold; }




</style>


<script>




var editando=false;

 

function transformarEnEditable(nodo){



if (editando == false) {

var nodoTd = nodo.parentNode; 

var nodoTr = nodoTd.parentNode; 

var nodoContenedorForm = document.getElementById('contenedorForm'); 

var nodosEnTr = nodoTr.getElementsByTagName('td');

var alimento = nodosEnTr[0].textContent; var calorias = nodosEnTr[1].textContent;

var grasas = nodosEnTr[2].textContent; var proteina = nodosEnTr[3].textContent;

var carbohidratos = nodosEnTr[4].textContent; var opciones = nodosEnTr[5].textContent;

var nuevoCodigoHtml = '<td><input type="text" name="alimento" id="alimento" value="'+alimento+'" size="10"></td>'+

'<td><input type="text" name="calorias" id="calorias" value="'+calorias+'" size="5"</td>'+

'<td><input type="text" name="grasas" id="grasas" value="'+grasas+'" size="5"</td>'+

'<td><input type="text" name="proteina" id="proteina" value="'+proteina+'" size="5"</td>'+

'<td><input type="text" name="carbohidratos" id="carbohidratos" value="'+carbohidratos+'" size="5"</td> <td>En edición</td>';

 

nodoTr.innerHTML = nuevoCodigoHtml;

 

nodoContenedorForm.innerHTML = 'Pulse Aceptar para guardar los cambios o cancelar para anularlos'+

'<form name = "formulario" action="ac" method="get" onsubmit="capturarEnvio()" onreset="anular()">'+

'<input class="boton" type = "submit" value="Aceptar"> <input class="boton" type="reset" value="Cancelar">';

editando = "true";}

else {alert ('Solo se puede editar una línea. Recargue la página para poder editar otra');

}

}

 

function capturarEnvio(){

var nodoContenedorForm = document.getElementById('contenedorForm'); //Nodo DIV

nodoContenedorForm.innerHTML = 'Pulse Aceptar para guardar los cambios o cancelar para anularlos'+

'<form name = "formulario" action="ac" method="get" onsubmit="capturarEnvio()" onreset="anular()">'+

'<input type="hidden" name="alimento" value="'+document.querySelector('#alimento').value+'">'+

'<input type="hidden" name="calorias" value="'+document.querySelector('#calorias').value+'">'+

'<input type="hidden" name="grasas" value="'+document.querySelector('#grasas').value+'">'+

'<input type="hidden" name="proteina" value="'+document.querySelector('#proteina').value+'">'+

'<input type="hidden" name="carbohidratos" value="'+document.querySelector('#carbohidratos').value+'">'+

'<input class="boton" type = "submit" value="Aceptar"> <input class="boton" type="reset" value="Cancelar">';

document.formulario.submit();

}

 

function anular(){

window.location.reload();

}


</script>

<h1>Tabulador</h1>




<table class="steelBlueCols">
<thead>
<tr>
<th>Enfermeria</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>
<tr>
<th>Tipo</th>
<th>Precio Base Hora</th>
<th>Comision</th>
<th>Precio Venta</th>
<th>Gan. Subtotal</th>
<th>Dedusibles</th>
<th>Gan. Estimada</th>
</tr>
</thead>
<tbody>
<tr>
<td>cell1_1</td>
<td>cell2_1</td>
<td>cell3_1</td>
<td>cell4_1</td>
<td>cell5_1</td>
<td>cell6_1</td>
<td>cell7_1</td>
</tr>
<tr>
<td>cell1_2</td>
<td>cell2_2</td>
<td>cell3_2</td>
<td>cell4_2</td>
<td>cell5_2</td>
<td>cell6_2</td>
<td>cell7_2</td>
</tr>
<tr>
<td>cell1_3</td>
<td>cell2_3</td>
<td>cell3_3</td>
<td>cell4_3</td>
<td>cell5_3</td>
<td>cell6_3</td>
<td>cell7_3</td>
</tr>
<tr>
<td>cell1_4</td>
<td>cell2_4</td>
<td>cell3_4</td>
<td>cell4_4</td>
<td>cell5_4</td>
<td>cell6_4</td>
<td>cell7_4</td>
</tr>
<tr>
<td>cell1_5</td>
<td>cell2_5</td>
<td>cell3_5</td>
<td>cell4_5</td>
<td>cell5_5</td>
<td>cell6_5</td>
<td>cell7_5</td>
</tr>
</tbody>
</table>





<table>


<tr> <th>Tipo</th> <th>Precio base hora</th> <th>comision</th>

<th>Precio Venta</th> <th>Gan Subtotal</th> <th>Opciones</th>

</tr>

<tr> <td>General</td> <td>49</td> <td>0.2</td>

<td>0.4</td> <td>12.7</td> <td><span class="editar" onclick="transformarEnEditable(this)">Editar</span></td>

</tr>

<tr> <td>Cirujano</td> <td>90</td> <td>0.3</td>

<td>1.0</td> <td>23.5</td> <td><span class="editar" onclick="transformarEnEditable(this)">Editar</span></td>

</tr>

<tr> <td>Brujo</td> <td>46</td> <td>0.4</td>

<td>0.9</td> <td>10.9</td> <td><span class="editar" onclick="transformarEnEditable(this)">Editar</span></td>

</tr>

<tr> <td>Especialista</td> <td>37</td> <td>0.5</td>

<td>0.8</td> <td>8.3</td> <td><span class="editar" onclick="transformarEnEditable(this)">Editar</span></td>

</tr>

</table>

<div id="contenedorForm">

</div>


@endsection