<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clínica</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Clínica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Médico
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-medico">listar</a></li>
          </ul>
        </li>

      	<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Paciente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-paciente">listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consulta
            </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-consulta">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-consulta">listar</a></li>
          </ul>
        </li> 
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <div class="container mt-3">
    <div class="row">
      <div class="col">
      <?php  
        include('config.php');
        switch (@$_REQUEST['page']){
          case 'cadastrar-medico':
            include('cadastrar-medico.php');
          break;
           case 'listar-medico':
            include('listar-medico.php');
          break;
           case 'editar-medico':
            include('editar-medico.php');
          break;
           case 'salvar-medico':
            include('salvar-medico.php');
          break;

           case 'cadastrar-paciente':
            include('cadastrar-paciente.php');
          break;
           case 'listar-paciente':
            include('listar-paciente.php');
          break;
           case 'editar-paciente':
            include('editar-paciente.php');
          break;
           case 'salvar-paciente':
            include('salvar-paciente.php');
          break;

           case 'cadastrar-consulta':
            include('cadastrar-consulta.php');
          break;
           case 'listar-consulta':
            include('listar-consulta.php');
          break;
           case 'editar-consulta':
            include('editar-consulta.php');
          break;
           case 'salvar-consulta':
            include('salvar-consulta.php');
          break;


          default:
          print "<h1>Seja bem-vindo a Clínica</h1>";
        }
      ?>
      </div>
    </div>
  </div>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

