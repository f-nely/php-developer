<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$result_usuario = "SELECT user.id, user.nome nome_user, user.email, user.niveis_acesso_id,
nivac.nome nome_niv_ac
FROM usuarios user
RIGHT JOIN niveis_acessos AS nivac ON  nivac.id = user.niveis_acesso_id
ORDER BY id";

$resultado_usuarios = mysqli_query($conn, $result_usuario);

while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
    echo "ID: " . $row_usuario['id'] . "<br>";
    echo "Nome do usuário: " . $row_usuario['nome_user'] . "<br>";
    echo "E-mail: " . $row_usuario['email'] . "<br>";
    echo "Nome do Níve de Acesso: " . $row_usuario['nome_niv_ac'] . "<br><hr>";
}