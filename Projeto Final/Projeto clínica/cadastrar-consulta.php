<h1>Cadastrar consultas</h1>
<form action="?page=salvar-consulta" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Médico</label>
		<select name="id_medico" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql_1 = "SELECT * FROM medico";
				$res_1 = $conn->query($sql_1);
				if($res_1->num_rows > 0){
					while($row_1 = $res_1->fetch_object()){
						print "<option value='{$row_1->id_medico}'>{$row_1->nome_medico}</option>";
					}
				}else{
					print "<option> Não há médicos cadastrados</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Paciente</label>
		<select name="id_paciente" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql_2 = "SELECT * FROM paciente";
				$res_2 = $conn->query($sql_2);
				if($res_2->num_rows > 0){
					while($row_2 = $res_2->fetch_object()){
						print "<option value='".$row_2->id_paciente."'>".$row_2->nome_paciente."</option>";
					}
				}else{
					print "<option> Não há pacientes cadastrados</option>";
				}
			?>
		</select>
	</div>


	<div class="mb-3">
		<label>Data da consulta
			<input type="date" name="data_consulta" class="form-control">
		</label>
	</div>
	
	<div class="mb-3">
		<label>Horário
			<input type="time" name="horario_consulta" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>		
	</div>
</form>