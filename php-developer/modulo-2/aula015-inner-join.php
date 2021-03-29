<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "SELECT user.id, user.nome nome_usuario, user.email, user.niveis_acesso_id,
nivac.nome  nome_niv_ac
FROM usuarios AS user
INNER JOIN niveis_acessos AS nivac ON nivac.id = user.niveis_acesso_id";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
    echo "ID: " . $row_usuario['id'] . "<br>";
    echo "Nome usuário: " . $row_usuario['nome_usuario'] . "<br>";
    echo "E-mail: " . $row_usuario['email'] . "<br>";
    echo "Nome nível acesso: " . $row_usuario['nome_niv_ac'] . "<br>";
    echo "Níveis de acesso id: " . $row_usuario['niveis_acesso_id'] . "<br><hr>";
}