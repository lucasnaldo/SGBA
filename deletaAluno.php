<?php
    
include_once('conexao.php');

$id = filter_input(INPUT_GET,"id");
$nome = filter_input(INPUT_GET,"nome");
$ra = filter_input(INPUT_GET,"ra");
$email = filter_input(INPUT_GET,"email");
$curso = filter_input(INPUT_GET,"curso");


$sql_del = "DELETE FROM alunos WHERE nome LIKE '%$filtro%' OR ra LIKE '%$filtro%' OR email LIKE '%$filtro%';"
$query_del = mysqli_query($con,$sql_del);
    
if(!$query_del){
    die("Erro: ".mysqli_error($con));
}else{
    header("Location: consultaAluno.php");
}
?>
