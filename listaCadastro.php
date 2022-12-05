<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="default.css" rel="stylesheet">
    <title>Social Link - Lista de Usuários</title>
</head>

<body style="background-color: #ececec;">
<div class="position-fixed m-2">
    <button class="btn btn-danger arsenalbold" onclick="window.location.href='home.html'">
        <p class="my-auto">
        &lt; Voltar
        </p>
    </button>
</div>
    <div class="titulo arsenalbold">
        <h1>SOCIAL LINK</h1>
    </div>
    <div class="arsenalbold">
        <?php
    // CONEXÃO AO BANCO DE DADOS
    $connect = mysqli_connect('localhost', 'root', '', 'estagio');
    // DEFINIÇÃO DA QUERY E AQUISIÇÃO DOS RESULTADOS
    $query_select = "SELECT * FROM usuarios";
    $result = mysqli_query($connect, $query_select);
    echo "<br>";
    echo "<table class='table'>
    <thead>
    <tr>
    <th scope='col'>ID</th>
    <th scope='col'>Nome</th>
    <th scope='col'>Sobrenome</th>
    <th scope='col'>Data de Nascimento</th>
    <th scope='col'>Data de Criação</th>
    <th scope='col'>Data de Modificação</th>
    <th scope='col'>E-mail</th>
    <th scope='col'>Senha</th>
    <th scope='col'></th>
    <th scope='col'></th>
    </tr>
    </thead>
    <tbody>";
    //Transformar dados do MySQL em arrays de strings
    while ($row = mysqli_fetch_assoc($result)) {
        //Escrever o valor da idUsuario no site
        echo "<tr name='itemLista' id='" . $row["idUsuario"] . "'>";
        // Escrever o valor de cada campo do banco de dados no HTML
        foreach ($row as $field => $value) {
            echo "<td>" . $value . "</td>";
        }
        //Criar os botões de editar e excluir em cada linha
        echo "<td><button class='btn btn-warning py-auto my-auto' type='button' onClick='editar({$row['idUsuario']})'>Editar</button></td>";
        echo "<td><button class='btn btn-danger  my-auto' type='button' onClick='deletar({$row['idUsuario']})'>Deletar</button></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </div>
    <script src="script.js"></script>
</body>

</html>