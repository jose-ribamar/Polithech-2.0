<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>

  <nav class="blue">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo center">Politech</a>
      <ul id="nav-mobile" class="left">
        <li><a href="sass.html">Home</a></li>
        <li><a href="#" class="dropdown-trigger" data-target="dropdown1">Categorias</a></li>
        <li><a href="badges.html">Carrinho</a></li>
        <!-- <li><a href="collapsible.html">JavaScript</a></li> -->
      </ul>
    </div>
  </nav>
  
  @yield('conteudo')

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elemDrop = document.querySelectorAll('.dropdown-trigger');
      var instances = M.Dropdown.init(elemDrop, {
        coverTrigger: false,
        constrainWidth: false
      });
    });
  </script>

</body>
</html>
