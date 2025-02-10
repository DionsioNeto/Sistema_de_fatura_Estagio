<div>
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{Request::is('/') ? 'active' : ''}}" aria-current="page" href="/">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('stock') ? 'active' : ''}}" href="/stock">
                <span data-feather="file"></span>
                Produtos em stock
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('add-stock') ? 'active' : ''}}" href="/add-stock">
                  <span data-feather="file"></span>
                  Adiconar produtos ao Stock
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('faturas') ? 'active' : ''}}" href="/faturas">
                <span data-feather="shopping-cart"></span>
                Faturas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Reenbolso
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Reports
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Históricos
              </a>
            </li>
          </ul>
        </div>
    </nav>
</div>
