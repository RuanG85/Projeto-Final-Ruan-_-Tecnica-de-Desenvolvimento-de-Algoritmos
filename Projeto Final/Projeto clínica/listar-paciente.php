<h1>listar Paciente</h1>
<?php
 $sql = "SELECT * FROM paciente";

 $res = $conn->query($sql);

 $qtd = $res->num_rows;

 if($qtd > 0){
 	print "<p> Encontrou <b>$qtd<b/> resultado(s)</p>";
 	print "<table class= 'table table-bordered table-striped table-hover'";
 	print "<tr>";
 	print "<th>#</th>";
 	print "<th>Nome</th>";
 	print "<th>Data de nascimento</th>";
 	print "<th>E-mail</th>";
 	print "</th>";
 	while( $row = $res->fetch_object() ){
 		print "<tr>";
 		print "<td>".$row->id_paciente."</td>";
 		print "<td>".$row->nome_paciente."</td>";
 		print "<td>".$row->data_paciente."</td>";
 		print "<td>".$row->email_paciente."</td>";
 		print "<td>
 					<button class='btn btn-success' onclick=\"location.href='?page=editar-paciente&id_medico={$row->id_paciente}';\">Editar</button>

 					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-paciente&acao=excluir&id_paciente={$row->id_paciente}';}else{false;}\">Excluir</button>
 					</td>";
 		print "</tr>";

 	}
 	print "</table>";
 }else{
 	print "<p>Não encontrou resultado</p>";
 	
 }