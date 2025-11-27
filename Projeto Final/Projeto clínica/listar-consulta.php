<h1>listar consultas</h1>
<?php
$sql = "SELECT 
            c.id_consulta,
            c.data_consulta,
            c.horario_consulta,
            m.nome_medico,
            p.nome_paciente
        FROM consulta AS c
        INNER JOIN medico AS m
            ON c.id_medico = m.id_medico
        INNER JOIN paciente AS p
            ON c.id_paciente = p.id_paciente";

 $res = $conn->query($sql);

 $qtd = $res->num_rows;

 if($qtd > 0){
 	print "<p> Encontrou <b>$qtd</b> resultado(s)</p>";
 	print "<table class= 'table table-bordered table-striped table-hover'>";
 	print "<tr>";
 	print "<th>#</th>";
 	print "<th>Data</th>";
 	print "<th>Horário</th>";
 	print "<th>Médico</th>";
 	print "<th>Paciente</th>";
 	print "</th>";
 	while( $row = $res->fetch_object() ){
 		print "<tr>";
            print "<td>".$row->id_consulta."</td>";
            print "<td>".$row->data_consulta."</td>";
            print "<td>".$row->horario_consulta."</td>";
            print "<td>".$row->nome_medico."</td>";
            print "<td>".$row->nome_paciente."</td>";
 		print "<td>
 					<button class='btn btn-success' onclick=\"location.href='?page=editar-consulta&id_consulta={$row->id_consulta}';\">Editar</button>

 					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-consulta&acao=excluir&id_consulta={$row->id_consulta}';}else{false;}\">Excluir</button>
 					</td>";
 		print "</tr>";

 	}
 	print "</table>";
 }else{
 	print "<p>Não encontrou resultado</p>";
 	
 }