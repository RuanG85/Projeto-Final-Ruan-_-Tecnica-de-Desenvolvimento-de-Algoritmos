<h1>Cadastrar Médico</h1>
<form action="?page=salvar-medico" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_medico" class="form-control">
		</label>
	</div>
	
	<div class="mb-3">
		<label>Especialidade
			<input type="text" name="espec_medico" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>Telefone
			<input type="text" name="telefone_medico" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>		
	</div>
</form>