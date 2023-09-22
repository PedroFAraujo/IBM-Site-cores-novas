<?php 
	// Importaça dos arquivos
	require_once('../assets/scripts/conexao.php');
	require_once('../assets/scripts/iniciarSessao.php');
	require_once('../assets/scripts/consultaCliente.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Turn Motors | Meu perfil</title>

	<!-- icones -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<!-- Arquivos do Bootstrap -->
	<link rel="stylesheet" href="../assets/css/css-bootstrap/bootstrap.min.css">
	<script src="../assets/js/js-bootstrap/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<link rel="stylesheet" href="../assets/css/estilos-importantes.css" />
	<link rel="stylesheet" href="../assets/css/perfil.css">
	<link rel="stylesheet" href="../assets/css/trocarFoto.min.css">

	<link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />

	<script src="../assets/js/trocarFoto.js" defer></script>
</head>

<body id="container__body">
	<?php
		require_once('../assets/components/header.php');
		$id = (int)$_SESSION['id'];
		$queryCliente = "SELECT * FROM cliente WHERE id=$id";
		$stmt = $pdo->query($queryCliente);
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
	?>

	<main>
		
		<div class="div__title">
			<h1>Olá, <?= $_SESSION['nomeCliente'] ?>!</h1>
		</div>	

		<div class="campos__perfil">
			<div class="opcoes__icones">
				<div class="filho-opcoesIcone">
					<div class="meio-circulo__branco-top">⠀</div>
					<div class="icones__esquerda">
						<div class="icone__esquerda"><img class="img__icon__esquerda" src="../assets/img/icone-perfil.svg" alt="Perfil"></div>
						<div class="icone__esquerda"><img class="img__icon__esquerda" src="../assets/img/icone-carro.svg" alt="Veículos"></div>
						<div class="icone__esquerda"><img class="img__icon__esquerda" src="../assets/img/icone-carrinho.svg" alt="Compras"></div>
						<div class="icone__esquerda"><img class="img__icon__esquerda" src="../assets/img/icone-porco-dinheiro.svg" alt="Orçamentos"></div>
						<div class="icone__esquerda"><img class="img__icon__esquerda" src="../assets/img/icone-agendamento.svg" alt="Agendamentos"></div>
						<div class="icone__esquerda"><img class="img__icon__esquerda" src="../assets/img/icone-dinheiro.svg" alt="Plano"></div>
					</div>
					<div class="meio-circulo__branco-bottom">⠀</div>
				</div>
			</div>

			
				<div class="perfil__main">
					<div class="espaco__branco">
						<div class="upload">
							<img src="../assets/img/img-perfil/<?php echo $user['fotoPerfil']; ?>" class="image" id="image" id="image"> <!-- Exibe a imagem atual do usuário -->
							<div class="rightRound" id="upload">
								<input type="file" name="fileImg" id ="fileImg" accept=".jpg, .jpeg, .png, .svg"> <!-- Input de seleção de arquivo -->
								<i class="fa fa-camera" style='color:#ffc857'></i> <!-- Ícone de câmera -->
							</div>
							<div class="leftRound" id ="cancel" style="display: none;">
								<i class = "fa fa-times" style='color:#ffc857'></i> <!-- Ícone de cancelar-->
							</div>
							<div class="rightRoundConfirm" id ="confirm" style="display: none;">
								<input type="submit"> <!-- Botão de envio do formulário -->
								<i class = "fa fa-check" style='color:#ffc857'></i> <!-- Ícone de confirmar -->
							</div>
						</div>
					</div>

					<div class="perfil__info">
						<div class="caixa__info">
							<i class='bx bx-user icone'></i>
							<div class="perfil__texto">
								<p><?=$_SESSION['nomeCliente']?></p>
							</div>
							<i class='bx bxs-user span'></i>
						</div>

						<div class="caixa__info">
							<i class='bx bx-envelope icone'></i>
							<div class="perfil__texto">
								<p id="perfil__texto__email"><?=$_SESSION['email']?></p>
							</div>
							<i class='bx bxs-user span'></i>
						</div>

						<div class="caixa__info">
							<img class="icone__turnmotors__perfil" src="../assets/img/logo-turnmotors-vermelha.svg" alt="Logo Turn Motors">
							<div class="perfil__texto">
								<p>Plano: <?=$_SESSION['plano']?></p>
							</div>
							<i class='bx bxs-user span'></i>
						</div>
					</div>

					<div class="botao">
						<a class="btn__perfil" href="#">Ver Mais</a>
					</div>

				</div>
		</div>
		

	</main>

	<?php
		require_once('../assets/components/footer.php');
	?>
</body>
</html>