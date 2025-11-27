<h1>salvar Paciente</h1>
<?php 

	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome =$_POST['nome_paciente'];
			$data =$_POST['data_paciente'];
			$email =$_POST['email_paciente'];

			$sql = "INSERT INTO paciente (nome_paciente, data_paciente, email_paciente)
			VALUES ('{$nome}', '{$data}', '{$email}')";

			$res = $conn->query($sql);

			if ($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-paciente';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=listar-paciente';</script>";
			}
			break;
		
		case 'editar':
			$nome = $_POST['nome_paciente'];
			$data = $_POST['data_paciente'];
			$email = $_POST['email_paciente'];

			$sql = "UPDATE paciente SET nome_paciente='{$nome}', data_paciente='{$data}', email_paciente='{$email}' WHERE id_paciente=".$_REQUEST['id_paciente'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-paciente';</script>";
			}else{
				print "<script>alert('Não editou');</script>";
				print "<script>location.href='?page=listar-paciente';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM paciente WHERE id_paciente=".$_REQUEST['id_paciente'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-paciente';</script>";
			}else{
				print "<script>alert('Não excluiu');</script>";
				print "<script>location.href='?page=listar-paciente';</script>";
			}
			break;

	}