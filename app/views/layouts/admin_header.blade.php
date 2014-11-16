<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Abrir menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Projeto</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ URL::route('admin') }}"><i class="fa fa-dashboard"></i> Painel</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-key"></i> Segurança <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('admin.users.index') }}">Usuários</a></li>
            <li><a href="{{ URL::route('admin.acl_groups.index') }}">Grupos</a></li>
            <li class="divider"></li>
            <li><a href="{{ URL::route('admin.users.index') }}">Permissões</a></li>
            <li class="hide dropdown-header">Nav header</li>
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-car"></i> Anúncios</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i> Configurações <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   Bem vindo Usuário <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Editar Perfil</a></li>
            <li><a href="#">Alterar senha</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Sair</a>
        </li>
      </ul>
      <!-- /.nav navbar-nav navbar-right -->
    </div><!--/.nav-collapse -->
  </div>
</nav>
