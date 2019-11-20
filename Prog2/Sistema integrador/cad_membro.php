<?php include "includes/cabecalho.php"; ?>
<?php include "includes/menu_lateral.php"; ?>
	<section class="col-2">
		<h2>Cadastrar membro</h2>
		<br>
		<div>
			<form action="" method="post" id="form-cadastro">
				<div class="form-item">
					<label for="nome" class="rotulo">Nome:</label><br>
					<input type="text" id="nome" name="nome" size="50" placeholder="Nome completo">
					<span class="msg-erro" id="msg-nome"></span>
				</div>
				<br>
				<div class="form-item">
					<label for="cnpj" class="rotulo">CPF:</label><br>
					<input type="text" id="cpf" name="cpf" size="20" placeholder="Número do CPF">
					<span class="msg-erro" id="msg-cpf"></span>
				</div>
				<br>
				<div class="form-item">
					<label for="congregacaoPertencente" class="rotulo">Congregação pertencente:</label><br>
					<select name="congregacaoPertencente" id="congregacaoPertencente">
						<option value="">Selecione a congregação</option>
						<option value="BV">Bela Vista</option>
						<option value="MT">Maria Terezinha</option>
						<option value="SD">Sede</option>
					</select>
					<span class="msg-erro" id="msg-congregacaoPertencente"></span>
				</div>
				<br>
				<div class="form-item">
					<label for="endereco" class="rotulo">Endereço:</label><br>
					<input type="text" id="endereco" name="endereco" placeholder="Rua, número, complemento" size="50">
					<span class="msg-erro" id="msg-endereco"></span>
				</div>
				<br>
				<div class="form-item">
					<label for="bairro" class="rotulo">Bairro:</label><br>
					<input type="text" id="bairro" name="bairro" placeholder="Nome do bairro" size="50">
					<span class="msg-erro" id="msg-bairro"></span>
				</div>
				<br>	
				<div class="form-item">
					<label for="cidade" class="rotulo">Cidade:</label><br>
					<input type="text" id="cidade" name="cidade" placeholder="Nome da cidade" size="50">
					<span class="msg-erro" id="msg-cidade"></span>
				</div>
				<br>
				<div class="form-item">
					<label for="estado" class="rotulo">Estado:</label><br>
					<select name="estado" id="estado">
						<option value="">Selecione o estado</option>
						<option value="AC">AC</option>
						<option value="AL">AL</option>
						<option value="AM">AM</option>
						<option value="AP">AP</option>
						<option value="BA">BA</option>
						<option value="CE">CE</option>
						<option value="DF">DF</option>
						<option value="ES">ES</option>
						<option value="GO">GO</option>
						<option value="MA">MA</option>
						<option value="MG">MG</option>
						<option value="MS">MS</option>
						<option value="MT">MT</option>
						<option value="PA">PA</option>
						<option value="PB">PB</option>
						<option value="PE">PE</option>
						<option value="PI">PI</option>
						<option value="PR">PR</option>
						<option value="RJ">RJ</option>
						<option value="RN">RN</option>
						<option value="RS">RS</option>
						<option value="RO">RO</option>
						<option value="RR">RR</option>
						<option value="SC">SC</option>
						<option value="SE">SE</option>
						<option value="SP">SP</option>
						<option value="TO">TO</option>
					</select>
					<span class="msg-erro" id="msg-estado"></span>
				</div>
				<br>
				<div class="form-item">
					<label for="email" class="rotulo">E-mail:</label><br>
					<input type="email" id="email" name="email" placeholder="fulano@dominio" size="50">
					<span class="msg-erro" id="msg-email"></span>
				</div>
				<br>				    
				<div>
					<table>
						<tr>
							<td>
								<div>
									<a class="button" id="btnGravar" href="#">Gravar</a>
								</div>
							</td>
							<td>
								<div>
									<a class="button" id="btnEditar" href="#">Editar</a>
								</div>
							</td>  
							<td>
								<div>
									<a class="button" id="btnExcluir" href="#">Excluir</a>
								</div>
							</td>     
						</tr>
					</table>
				</div>
			</div>
		</form>
	</div>			
</section>
</body>
</html>