<div class="col-lg-2">
  <div class="sidebar-nav">
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <span class="visible-xs navbar-brand">Sidebar menu</span>
      </div>
      <div class="navbar-collapse collapse sidebar-navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{ URL::route('admin.users.index') }}">
              <i class="fa fa-th-list"></i>
              Listar Usuários
            </a>
          </li>
          <li>
            <a href="{{ URL::route('admin.users.create') }}">
              <i class="fa fa-plus"></i>
              Novo Usuário
            </a>
          </li>
          <li>
            <a href="{{ URL::route('admin.users.create') }}">
              <i class="fa fa-filter"></i>
              Filtrar
            </a>
          </li>
          <li>
            <a href="{{ URL::route('admin.users.create') }}">
              <i class="fa fa-check-square"></i>
              Ativos
            </a>
          </li>
          <li>
            <a href="{{ URL::route('admin.users.create') }}">
              <i class="fa fa-minus-square"></i>
              Inativos
            </a>
          </li>
          <li>
            <a href="{{ URL::route('admin.users.create') }}">
              <i class="fa fa-trash"></i>
              Excluídos
            </a>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
