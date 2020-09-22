<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="2; URL='../principal/index.php'"/>
	<title>Document</title>
</head>
<body>
<h1>Enviado com Sucesso</h1>
<?php header("location: ../principal/index.php");
        ?>
</body>
</html>


<?php
require_once '../login/classes/usuarios.php';
$u = new Usuario();
?> 

<?php
require_once('PHPMailer.php');
require_once('SMTP.php');
require_once('Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$selectbolo = $_POST['selectbolo'];
$qtdbol = $_POST['qtdbol'];
$selecttopo = $_POST['selecttopo'];
$qtddoc = $_POST['qtddoc'];
$message = $_POST['message'];
$name = $_POST['name'];
$fone = $_POST['tel'];
$email= $_POST['email'];



try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'matheus.comercial.hs@gmail.com';
	$mail->Password = 'senha';
	$mail->Port = 587;

	$mail->setFrom('matheus.comercial.hs@gmail.com');
	$mail->addAddress('matheushenriquesantoscct@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via gmail Matheus';
	$mail->Body = "Usuario: $name <br>Email: $email<br>Telefone: $fone<br><br>PEDIDO: <br>Bolo: $selectbolo <br>qtd: $qtdbol <br>topo: $selecttopo <br>qtdtopo: $qtddoc<br>Descrição: $message";
	$mail->AltBody = "Bolo: $selectbolo, qtd: $qtdbol, topo: $selecttopo, qtdtopo: $qtddoc, Descrição: $message";

	if($mail->send()) {
		$u->conectar("finalodaw", "localhost", "root", "");
		$u->cadastraPedido($selecttopo,$selectbolo, $qtdbol,$qtddoc);
		echo 'Email enviado com sucesso';
		
	} else {
		echo 'Email nao enviado';
	}
	
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
?>

