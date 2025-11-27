<h1>Cadastrar Paciente</h1>
<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_paciente" class="form-control">
		</label>
	</div>
	
	<div class="mb-3">
		<label>Data de nascimento
			<input type="date" name="data_paciente" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>E-mail
			<input type="email" name="email_paciente" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>		
	</div>
</form>