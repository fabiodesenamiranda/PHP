<?php 
    $projeto = "Agenda de Contatos";
    include('./includes/functions.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title><?php echo $projeto ?></title>
</head>
<body>
    <div class="container">
        <h1><?php echo $projeto ?></h1>
        <h2><?php echo boasVindas("Fabio") ?></h2>

<form action="./createContact.php" method="post">
    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Nome</label>
        <input type="text" name="name" placeholder="Nome" class="form-control" id="exampleInputName1">
    </div>

    <div class="mb-3">
        <label for="exampleInputLastname1" class="form-label">Sobrenome</label>
        <input type="text" name="lastname" placeholder="Sobrenome" class="form-control" id="exampleInputLastname1">
    </div>

    <div class="mb-3">
        <label for="exampleInputaddress" class="form-label">Endereço Completo</label>
        <input type="text" name="address" placeholder="Endereço Completo" class="form-control" id="exampleInputAddress1">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" name="email" placeholder="E-mail" class="form-control" id="exampleInputEmail1">
    
     </div>

     <div class="mb-3">
        <label for="exampleInputPhone1" class="form-label">Telefone</label>
        <input type="text" name="phone" placeholder="Telefone" class="form-control" id="exampleInputPhone">
    </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


        <h3>Contatos Cadastrados</h3>

        <ul>
            <? include('./includes/listContacts.php') ?>
        </ul>
    </div>
</body>
</html>