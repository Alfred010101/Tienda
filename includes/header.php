<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/images/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      Tienda
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/Proyecto_Tienda/index.php' ? 'active' : ''); ?>" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/Proyecto_Tienda/registrar.php' ? 'active' : ''); ?>" href="registrar.php">Registrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/Proyecto_Tienda/consultar.php' ? 'active' : ''); ?>" href="consultar.php">Buscar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mostrar todo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>