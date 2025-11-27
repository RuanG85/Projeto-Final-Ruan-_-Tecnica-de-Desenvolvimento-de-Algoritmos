<h1>Editar Paciente</h1>
<?php

	$sql = "SELECT * FROM paciente WHERE id_paciente=".$_REQUEST['id_paciente'];

	$res = $conn->query($sql);

	$row = $res->fetch_object();

?>

<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_paciente" value="<?php print $row->id_paciente; ?>">
	<div class="mb-3">
		<label>Nome 
			<input type="text" name="nome_paciente" class="form-control" value="<?php print $row->nome_paciente; ?>">
		</label>
	</div>
	<div class="mb-3">
		<label>Data de nascimento
			<input type="date" name="data_paciente" class="form-control" value="<?php print $row->tipo_paciente; ?>">
		</label>
	</div>
	<div class="mb-3">
		<label>E-mail
			<input type="email" name="email_paciente" class="form-control" value="<?php print $row->sexo_paciente; ?>">
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
