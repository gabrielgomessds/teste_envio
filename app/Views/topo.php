
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= URL?>">Gomess </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php $paramentro?>">
        <a class="nav-link" href="<?= URL?>">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URL?>paginas/sobre">Sobre nós</a>
      </li>
    </ul>
   <span class="navbar-text">
   <a href=""> <button type="button" class="btn btn-primary">Cadastr-se</button> </a>
    <a href=""> <button type="button" class="btn btn-primary">Login</button> </a>
</span>
  </div>
</nav>