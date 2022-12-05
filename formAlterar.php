<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="default.css">
    <title>Social Link - Alteração de Cadastro</title>
</head>

<body style="background-color: #ffdd77;">
    <div class="position-fixed m-2">
        <button class="btn btn-danger arsenalbold" onclick="window.location.href='listaCadastro.php'">
            <p class="my-auto">
            &lt; Voltar
            </p>
        </button>
    </div>
    <div class="titulo arsenalbold">
        <h1>SOCIAL LINK</h1>
    </div>
    <div class="card interfacebox" style="border-color: #fa9327;">
        <div class="card-header text-center arsenalbold" style="background-color: #fdc45c;">
            Alteração de Usuário
        </div>
        <div class="row interface arsenalbold">

            <?php
            // CONEXÃO AO BANCO DE DADOS
            $connect = mysqli_connect('localhost', 'root', '', 'estagio');
            // Atribui o ID do cadastro a ser editado a uma variável
            $idUsuario = $_REQUEST['id'];
            // Busca as informações da tabela onde está o ID selecionado.
            $rs = mysqli_query($connect, "SELECT nome, sobrenome, dataNasc, email, senha FROM usuarios WHERE idUsuario = $idUsuario");
            // Transforma os dados em array/string
            $row = mysqli_fetch_array($rs);
            // Cria um formulário com as informações adquiridas.
            echo "<div class='col container px-auto my-auto' style='width: 400px; padding-right: auto;'>
    <form method='POST' action='alteraCadastro.php'>
    <div class='mb-3'>
<input type='hidden' name='idUsuario' id='idUsuario' value='" . $idUsuario . "'>
<div class='text-center'>
<label class='form-label'>ID: " . $idUsuario . "</label><br>
</div>
<div class='mb-3'>
<label for='email' class='form-label'>Email:</label><input class='form-control' type='email' name='email' id='email' value='" . $row['email'] . "' required>
</div>
<div class='mb-3'>
<label class='form-label'>Senha:</label><input class='form-control' type='password' name='senha' id='senha' maxlength='48' required>
</div>
<div class='mb-3'>
<label class='form-label'>Nome:</label><input class='form-control' type='text' name='nome' id='nome' value='" . $row['nome'] . "' required>
</div>
<div class='mb-3'>
<label class='form-label'>Sobrenome:</label><input class='form-control' type='text' name='sobrenome' id='sobrenome' value='" . $row['sobrenome'] . "' required>
</div>
<div class='mb-3'>
<label class='form-label'>Data de Nascimento</label><input class='form-control' type='date' name='dataNasc' id='dataNasc' value='" . $row['dataNasc'] . "' required>
</div>
<input class='btn btn-warning' style='width:100%;' type='submit' value='Editar' id='cadastrar' name='cadastrar'>
</div>
</div>";
            ?>
            <div class="col-md-auto px-0 my-0">
                <img class="imgpersonagem" src="img/yu.png" alt="Joker from Persona Q2">
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>