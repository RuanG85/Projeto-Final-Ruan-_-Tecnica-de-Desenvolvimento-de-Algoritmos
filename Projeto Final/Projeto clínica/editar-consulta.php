<h1>editar consultas</h1>
<?php
	$id_consulta = $_REQUEST['id_consulta']; 
	$sql_1 = "SELECT * FROM consulta WHERE id_consulta='{$id_consulta}'";

	$res_1 = $conn->query($sql_1);

	$row_1 = $res_1->fetch_object();

?>
<form action="?page=salvar-consulta" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_consulta" value="<?php print $row_1->id_consulta; ?>">
	<div class="mb-3">
		<label>Médico</label>
		<select name="id_medico" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM medico";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						if($row_1->id_medico == $row->id_medico){
							print "<option value='".$row->id_medico."' selected>".$row->nome_medico."</option>";
						}else{
							print "<option value='".$row->id_medico."'>".$row->nome_medico."</option>";
						}
					}
				}else{
					print "<option> Não há medicos cadastrados</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
	<label>Paciente</label>
		<select name="id_paciente" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM paciente";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						if($row_1->id_paciente == $row->id_paciente){
							print "<option value='".$row->id_paciente."' selected>".$row->nome_paciente."</option>";
						}else{
							print "<option value='".$row->id_paciente."'>".$row->nome_paciente."</option>";
						}
					}
				}else{
					print "<option> Não há pacientes cadastrados</option>";
				}
			?>
		</select>
	</div>

	<div class="mb-3">
		<label>Data da consulta
			<input type="date" name="data_consulta" value="<?php print $row_1->data_consulta; ?>"class="form-control">
		</label>
	</div>
	
	<div class="mb-3">
		<label>Horário
			<input type="time" name="horario_consulta" value="<?php print $row_1->horario_consulta; ?>"class="form-control">
		</label>
	</div>


	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>		
	</div>
</form>

