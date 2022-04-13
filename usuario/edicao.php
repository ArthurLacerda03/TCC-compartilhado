<?php

include('../menu/menu.php');
include('../log/validar.php');
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/edit.css">
    <title>Document</title>
</head>

<body>

     <h1>Edite aqui as informações</h1>

     <div class="box">

    <form class="row g-3" action="edit.php">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationDefault01" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationDefault02"  required>
        </div>
        
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">e-mail</label>
            <input type="email" class="form-control" id="validationDefault03" required>
        </div>
        <div class="col-md-3">
            <label for="validationDefault04" class="form-label">cep</label>
            <input type="text" class="form-control" id="validationDefault05" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="validationDefault01" name="rua" disabled>
        </div> 
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="validationDefault01" name="bairro" disabled>
        </div>
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="validationDefault01" name="cidade" disabled>
        </div>
        <div class="col-md-3">
            <label for="validationDefault04" class="form-label">UF</label>
            <input type="text" class="form-control" id="validationDefault05" name="estado" disabled>
        </div>
       
        
       
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
        
    </form> 

    </div>

</body>


</html>