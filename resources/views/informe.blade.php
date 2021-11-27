@extends('layouts.main')
@section('contenido')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

    <style>


/*
 tabala css

*/
table.steelBlueCols {
  background-color: #F6FFF6;
  width: 1024px;
  text-align: left;
  border-collapse: collapse;
  margin: 20px 10px;
 
}
table.steelBlueCols td, table.steelBlueCols th {
  border: 0px solid #555555;
  padding: 10px 15px;
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

/*
 fin tabla css

*/


.targetas h1{
    font-size: 1.5rem;
    color: #C00000;  
}


.targetas  .select_mate{
    height: 40px;
    /*display: inline-flex;*/
}

select {
    color: #C00000; 
    border-color: #C00000; 
}


.targetas .card h2{
    font-size: 1rem;
}

.targetas .card{
    width: 20%;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 0px;
    margin-bottom: 1em;
    display: inline-flex;
    margin: 1rem;

}

.targetas .card:hover{

    cursor: pointer
    
}





.targetas .card2:hover{

cursor: pointer

}

.targetas .card2{
    
    display: flex;
    margin: 2rem;
  
}



.targetas .card .card_header{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: .1rem .5rem;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    color: #ffff;
}
.red{
    background-color: #00B050;
}
.purple{
    background-color: #9B51E0;
}
.blue{
    background-color: #21A1C9;
}
.targetas .card .card_header .tittle,.card .card_header .id{
    /*display: flex;*/
    align-items: center;
}


.targetas .card .card_header .tittle p{
    margin-left: .5em;
}
.targetas .card .card_header .id p{
    margin-right: 1em;
}
.targetas .card .card_section{
    padding: .7em .5em;
    font-size: 2rem;
    color: #C00000;
    text-align: center;
}
.targetas .card .card_footer{
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #888888;
    padding: .5em;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}
.targetas .card .card_footer:before{
    content: '';
    position: absolute;
    width: 5%;
    margin-left: 2.5%;
    top: 0;
    left: 0;
    border-top: 1px solid #888888;

}

.grafico{

    position: fixed;
    width: 1115px;
    height: 420px;
   /* left: 500px;*/
    top: 100px;
    right: -270px;
    /*bottom: 100px;*/
    display:none;
}




.grafico .card{
    flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid #e3e6f0;border-radius:.35rem
}






    </style>





<script>

       
$(document).ready(function(){



        $("#close1").click(function(){
        //$(".grafico").hide();
       //$(this).removeClass('activado');
       // $(this).addClass('no').delay(500);
        document.getElementById("obj2").style.display = "none";
        $(".card").removeClass('card2');      
       // document.getElementsByClassName("card").style.display = "flex";
        
        //window.setTimeout( show_popup, 500 );
  });

        $("#card1").click(function(){
        //$(".grafico").show()();
       // $(this).addClass('activado');
        //$(this).removeClass('no').delay(500);
        $(".card").addClass('card2');
        document.getElementById("obj2").style.display = "block";
        //document.getElementsByClassName("card").style.display = "inline-flex";
        //window.setTimeout( show_popup, 500 );
  });
});               
   


function abre()
{
var w=window.open("","","")
w.document.body.innerHTML=document.getElementById("obj2").innerHTML
}



</script>

    <h1>Informe</h1>



<div class="targetas">

    <div class="select_mate" data-mate-select="active" >
        <select name="" onchange="" onclick="return false;" id="">
            <option value=""  >Hoy</option>
            <option value="1">Ayer</option>
            <option value="2" >Esta Semana</option>
            <option value="3">Este Mes</option>
        </select>
        <p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        </svg></span>
        <div class="cont_list_select_mate">
            <ul class="cont_select_int">  </ul> 
        </div>
    </div>



    
    <div class="card" id="card1">
    <div class="activado">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Ingresos</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"> MXN</i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>MXN2459</p>
        </div>
        </div>
       
    </div>

    <div class="card">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Ganancias</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"> MXN</i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>$1000  MXN</p>
        </div>
       
    </div>

    <div class="card">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Devoluciones</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"> MXN</i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>$2000</p>
        </div>
       
    </div>

    <div class="card">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Promedio Cliente</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"> MXN</i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>$3000</p>
        </div>
       
    </div>

    <div class="card">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Targeta Credito</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"> MXN</i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>$4000</p>
        </div>
       
    </div>

    <div class="card">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Targeta Debito</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"> MXN</i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>$5000</p>
        </div>
       
    </div>

    <div class="card">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Paypal</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"> MXN</i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>$7000</p>
        </div>
       
    </div>

    <div class="card">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Otro</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"> MXN</i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>$8000</p>
        </div>
       
    </div>

    </div>


<div class="grafico" id="obj2">
<link href="{{ asset('/dash/css/sb-admin-2.min.css') }}" rel="stylesheet">



    <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opciones:</div>
                                            <a class="dropdown-item" href="/imprimir-pdf">Descargar Infomrme</a>
                                            <a class="dropdown-item" onclick=abre()>Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" id="close1" >Cerrar</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas id="myAreaChart" width="429" height="320" style="display: block; width: 429px; height: 320px;" class="chartjs-render-monitor"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>





<table class="steelBlueCols">
<thead>
<tr>
<th>Usuario</th>
<th>Fecha</th>
<th>Hora</th>
<th>Servicio</th>
<th>Timepo</th>
<th>Lugar</th>
<th>Mtd Pago</th>
<th>Ingresos</th>
</tr>
</thead>
<tbody>
<tr>
<td>cell1_1</td><td>cell2_1</td><td>cell3_1</td><td>cell4_1</td><td>cell5_1</td><td>cell6_1</td><td>cell7_1</td><td>cell8_1</td></tr>
<tr>
<td>cell1_2</td><td>cell2_2</td><td>cell3_2</td><td>cell4_2</td><td>cell5_2</td><td>cell6_2</td><td>cell7_2</td><td>cell8_2</td></tr>
<tr>
<td>cell1_3</td><td>cell2_3</td><td>cell3_3</td><td>cell4_3</td><td>cell5_3</td><td>cell6_3</td><td>cell7_3</td><td>cell8_3</td></tr>
<tr>
<td>cell1_4</td><td>cell2_4</td><td>cell3_4</td><td>cell4_4</td><td>cell5_4</td><td>cell6_4</td><td>cell7_4</td><td>cell8_4</td></tr>
</tbody>
</tr>
</table>


@endsection