<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Checkout Mirror Fashion</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
	</head>	
	<body>
		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>
					Obrigado por comprar na Mirror Fashion!
					Preencha seus dados para efetivar a compra.
				</p>
			</div>	
		</div>
		
		<div class="container">
			<div class="row">
				<form class="col-sm-8">
					<div class="row">
						<fieldset class="col-md-6">
							<legend>Dados pessoais</legend>
							
							<div class="form-group">
								<label for="nome">Nome Completo</label>
								<input type="text" class="form-control" id="nome" name="nome" autofocus required/>
							</div>
							
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com"/>
							</div>
							
							<div class="form-group">
								<label for="cpf">CPF</label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required/>
							</div>
							
							<div class="checkbox">
								<label>
									<input type="checkbox" value="sim" name="spam" checked/>
									Quero receber spam da Mirror Fashion
								</label>
							</div>
						</fieldset>
						<fieldset class="col-md-6">
							<legend>Cartão de crédito</legend>
							
							<div class="form-group">
								<label for="numero-cartao">Número - CVV</label>
								<input type="text" class="form-control" id="numero-cartao" name="numero-cartao"/>
							</div>
							
							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label>
								<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
									<option value="master">MasterCard</option>
									<option value="visa">Visa</option>
									<option value="amex">American Express</option>
								</select>
							</div>
							
							<div class="form-group">
								<label for="validade-cartao">Validade</label>
								<input type="month" class="form-control" id="validade-cartao" name="validade-cartao"/>
							</div>
						</fieldset>
					</div>
					<button type="submit" class="btn btn-success btn-lg pull-right">
						<span class="glyphicon glyphicon-thumbs-up"/>
						Confirmar pedido
					</button>
					</br></br></br>
				</form>
				<div class="col-sm-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h2>Sua compra</h2>
						</div>
						<div class="panel-body">
							<img src="img/produtos/foto2-<?= $_POST['cor']; ?>.png" 
								class="img-thumbnail img-responsive"/>
							<dl>
								<dt>Produto</dt>
								<dd><?= $_POST['produto']; ?></dd></dd>
								
								<dt>Preço</dt>
								<dd id="preco"><?= $_POST['preco']; ?></dd></dd>
								
								<dt>Cor</dt>
								<dd><?= $_POST['cor']; ?></dd>
								
								<dt>Tamanho</dt>
								<dd><?= $_POST['tamanho']; ?></dd></dd>
							</dl>
							
							<div class="form-group">
								<label for="quantidade">Quantidade</label>
								<input id="quantidade" class="form-control" type="number" min="1" max="99" value="1"/>
							</div>
							<div class="form-group">
								<label for="total">Total</label>
								<output for="total" id="total" class="form-control"><?= $_POST['preco']; ?></output>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>	