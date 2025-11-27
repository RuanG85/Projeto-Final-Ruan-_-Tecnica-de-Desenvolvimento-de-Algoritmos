<h1>salvar consultas</h1>
<?php 

	switch ($_REQUEST['acao']) {
		case 'cadastrar':
        $id_medico       = $_POST['id_medico'];
        $id_paciente     = $_POST['id_paciente'];
        $data_consulta   = $_POST['data_consulta'];
        $horario_consulta = $_POST['horario_consulta'];

			$sql = "INSERT INTO consulta (id_medico, id_paciente, data_consulta, horario_consulta)
			VALUES ('{$id_medico}', '{$id_paciente}', '{$data_consulta}', '{$horario_consulta}')";

			$res = $conn->query($sql);

			if ($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
			}
			break;
		
		case 'editar':
        $id_medico       = $_POST['id_medico'];
        $id_paciente     = $_POST['id_paciente'];
        $data_consulta   = $_POST['data_consulta'];
        $horario_consulta = $_POST['horario_consulta'];

		$sql = "UPDATE consulta SET id_medico='{$id_medico}', id_paciente='{$id_paciente}', data_consulta='{$data_consulta}',horario_consulta='{$horario_consulta}' WHERE id_consulta=".$_REQUEST['id_consulta'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
			}else{
				print "<script>alert('Não editou');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM consulta WHERE id_consulta=".$_REQUEST['id_consulta'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
			}else{
				print "<script>alert('Não excluiu');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
			}
			break;

	}