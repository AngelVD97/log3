@extends('layouts.main')
@section('contenido')


    <style>

h1{
    font-size: 1.5rem;
    color: #C00000;  
}


.select_mate{
    height: 40px;
    
}

select {
    color: #C00000; 
    border-color: #C00000; 
}


.card h2{
    font-size: 1rem;
}

.card{
    width: 20%;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 0px;
    margin-bottom: 1em;
    display: inline-flex;
    margin: 1rem;
}



.card .card_header{
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
.card .card_header .tittle,.card .card_header .id{
    /*display: flex;*/
    align-items: center;
}


.card .card_header .tittle p{
    margin-left: .5em;
}
.card .card_header .id p{
    margin-right: 1em;
}
.card .card_section{
    padding: .7em .5em;
    font-size: 2rem;
    color: #C00000;
    text-align: center;
}
.card .card_footer{
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #888888;
    padding: .5em;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}
.card .card_footer:before{
    content: '';
    position: absolute;
    width: 5%;
    margin-left: 2.5%;
    top: 0;
    left: 0;
    border-top: 1px solid #888888;
}


    </style>



    <h1>Informe</h1>

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


    
    <div class="card">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Ingresos</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"></i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>$2459</p>
        </div>
       
    </div>

    <div class="card">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Ganancias</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"></i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>$1000</p>
        </div>
       
    </div>

    <div class="card">
        <div class="card_header red">
            <div class="tittle">
                <div class="circle"></div>
                <h2>Devoluciones</h2>
            </div>
            <div class="id">
                <i class="fas fa-dollar-sign"></i>
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
                <i class="fas fa-dollar-sign"></i>
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
                <i class="fas fa-dollar-sign"></i>
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
                <i class="fas fa-dollar-sign"></i>
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
                <i class="fas fa-dollar-sign"></i>
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
                <i class="fas fa-dollar-sign"></i>
                <img src="img/icon.svg" alt="">
            </div>
        </div>
        <div class="card_section">
            <p>$8000</p>
        </div>
       
    </div>

    


@endsection