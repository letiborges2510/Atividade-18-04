
<nav class="navbar navbar-default">

  <div class="container">

  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-crud">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SISTEMA</a>
    </div>

    <div class="collapse navbar-collapse" id="menu-crud">

      <ul class="nav navbar-nav">
    
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">CLIENTES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="listar-clientes.php">Listar</a></li>
            <li><a href="cadastrar-clientes.php">Cadastrar</a></li>
          </ul>
        </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout [<?php echo $_SESSION['usuario']; ?>]</a></li>
      </ul>

    </div>
  </div>
</nav>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>





