<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <style>

        * {
            margin: 0;
            padding: 0;
        }
        body {
            background: #0b2027;
            font-family: 'Roboto', sans-serif;
            line-height: 18px;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        .btn-menu {
            display: none;
            padding: 20px;
           background: #0d2c44;
           color: #fff;
        }

        .contenedor-menu {
            width: 20%;
            min-width: 300px;
            margin: 50px;
            display: inline-block;
            font-family: 'Roboto', sans-serif;
            line-height: 18px;
        }

        .contenedor-menu .menu {
            width: 100%;
        }

        .contenedor-menu ul{
            list-style: none;
        }

        .contenedor-menu .menu li a {
            color: #494949;
            display: block;
            padding: 15px 20px;
            background: #e9e9e9;
        }

        .contenedor-menu .menu li a:hover{
            background: #1a95d5;
            color: #fff;
        }
.contenedor-menu .menu ul{
    display: none;
}
        

    </style>
</head>
<body>
    
        
    <div class="contenedor-menu" >
        <a href="#" class="btn-menu">Menu<i class="icono fa fa-bars" aria-hidden="true"></i></a>


    <ul class="menu">

        <li><a href="#">uno</a> <i class="icono fa fa-bath" aria-hidden="true"></i></li>
       

        <li><a href="#">dos <i class="icono fa fa-bath" aria-hidden="true"></i></a>
       

            <ul>
                <li><a href="#">sub1</a></li>
                <li><a href="#">sub2</a></li>
            </ul>
        </li>

        <li><a href="#">tres</a> <i class="icono fa fa-bath" aria-hidden="true"></i></li>
       

        <li><a href="#">cuatro</a><i class="icono fa fa-bath" aria-hidden="true"></i></li>
        


    </ul>
    </div>

</body>
</html>




