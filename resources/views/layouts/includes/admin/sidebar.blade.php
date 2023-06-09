<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#categorias" aria-expanded="false"
                aria-controls="categorias">
                <i class="  mdi mdi-clipboard-text menu-icon"></i>
                <span class="menu-title">Categorias</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="categorias">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('category.index') }}">Categorias</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('category.create') }}">Nova Categoria</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#produtos" aria-expanded="false"
                aria-controls="produtos">
                <i class=" mdi mdi-archive menu-icon"></i>
                <span class="menu-title">Produtos</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="produtos">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}">Produtos</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('product.create') }}">Novo Produto</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('brand.index') }}">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Marcas</span>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
                <i class="mdi mdi-emoticon menu-icon"></i>
                <span class="menu-title">Icons</span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- <li class="nav-item">
        <a class="nav-link" href="documentation/documentation.html">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li> --}}
    </ul>
</nav>
