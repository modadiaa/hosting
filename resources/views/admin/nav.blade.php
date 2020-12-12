<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/admin')}}">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product.create')}}">
            <span data-feather="file"></span>
            Add Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product.index')}}">
            <span data-feather="shopping-cart"></span>
            List Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('category.index')}} ">
            <span data-feather="users"></span>
            Categories
          </a>
        </li>

      </ul>


    </div>
  </nav>
