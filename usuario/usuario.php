<?php

include('../log/validar.php');
include('../menu/menu.php')


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area usuario</title>
    <link rel="stylesheet" type="text/css" href="../css/user.css">


</head>

<body>

    <section class="perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">

                <div class="perfil-usuario-avatar">
                    <img src="" alt="img-avatar">

                </div>
                <button class="boton-portada" onclick="window.location.href = '#'">trocar capa</button>

                </button>
                <button onclick="window.location.href = 'edicao/edicao.php'" class="boton-por">
                    editar perfil
                </button>
            </div>
        </div>


        <div class="perfil-usuario-body">
        <div class="container-fluid text-center  ">

<div class="container ">


    <div class="row ">

        <div class="perfil-usuario-bio">

            <h3 class="titulo"><?php echo $_SESSION['Login']; ?></h3>
            <!--Exibe o nome da sessão iniciada-->



            <ul class="lista-datos">
                <li><a href="" class="icono fas fa-map-signs"></a> Localização:</li>
                <!--colocar um echo para exibir a rua-->
                <li><a href="" class="icono fas fa-phone-alt"></a> Telefone:</li>
                <!--colocar um echo para exibir o telefone-->
                <li><a href="" class="icono fas fa-briefcase"></a> Estuda em:</li>
                <!--colocar um echo para exibir a instituição -->
                <a href="../index.php">sair</a>

            </ul>

        </div>






    </div>
</div>

</div>




    </section>

</body>

</html>


