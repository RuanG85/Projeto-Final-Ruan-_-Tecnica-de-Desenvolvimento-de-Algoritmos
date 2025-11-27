<h1>Salvar Médico</h1>
<?php 

	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome =$_POST['nome_medico'];
			$espec =$_POST['espec_medico'];
			$telefone =$_POST['telefone_medico'];

			$sql = "INSERT INTO medico (nome_medico, espec_medico, telefone_medico)
			VALUES ('{$nome}', '{$espec}', '{$telefone}')";

			$res = $conn->query($sql);

			if ($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-medico';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=listar-medico';</script>";
			}
			break;
		
		case 'editar':
			$nome = $_POST['nome_medico'];
			$espec = $_POST['espec_medico'];
			$telefone = $_POST['telefone_medico'];

			$sql = "UPDATE medico SET nome_medico='{$nome}', espec_medico='{$espec}', telefone_medico='{$telefone}' WHERE id_medico=".$_REQUEST['id_medico'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-medico';</script>";
			}else{
				print "<script>alert('Não editou');</script>";
				print "<script>location.href='?page=listar-medico';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM medico WHERE id_medico=".$_REQUEST['id_medico'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-medico';</script>";
			}else{
				print "<script>alert('Não excluiu');</script>";
				print "<script>location.href='?page=listar-medico';</script>";
			}
			break;

	}