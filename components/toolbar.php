<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index">
    <i class="im im-first-aid"></i>
    <span>MedCare</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Exames
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="listar_exame.php">Listar</a>
          <a class="dropdown-item" href="cadastro_exame.php">Cadastrar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pacientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="listar_cliente.php">Listar</a>
          <a class="dropdown-item" href="cadastro_cliente.php">Cadastrar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Médicos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="listar_medico.php">Listar</a>
          <a class="dropdown-item" href="cadastro_medico.php">Cadastrar</a>
        </div>
      </li>
    </ul>

    <form action="db/db.php" method="post" class="form-inline my-2 my-lg-0">
      <h6 class="mr-2"><?php print_r($_SESSION['usuario_logado']['email']); ?></h6> 
      <input type="hidden" name="logout" value="true">
      <div class="botao-logout" onClick="javascript:this.parentNode.submit();">
        <i class="im im-sign-out"></i>
      </div>
    </form>
  </div>
</nav>
