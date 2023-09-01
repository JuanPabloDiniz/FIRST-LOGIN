<?php include_once"config.php"?>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$datan = $_POST['datan'];
$ende = $_POST['ende'];
$cpf = $_POST['cpf'];


$sql = "INSERT INTO clientes(nome, email, senha, datan, ende, cpf) VALUES('$nome','$email','$senha', $datan, $ende, $cpf)";
if (mysqli_query($conn, $sql)){

    header('Location: index.html');
  
 }
else {
echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
}

?>

