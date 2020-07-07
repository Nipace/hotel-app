<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-hotel"></i>        
        </div>
        <div class="sidebar-brand-text mx-3">Hotel App</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      @role('Admin')
      <div class="sidebar-heading">
        Rooms
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link " href="{{route('roomtypes.index')}}" >
          <i class="fas fa-fw fa-cog"></i>
          <span>Add Room Type</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link " href="{{route('rooms.index')}}">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Add Rooms</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Items(Food & Drinks)
      </div>
          <li class="nav-item">
            <a class="nav-link " href="{{route('category.index')}}">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Add Item's Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('items.index')}}">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Add Items</span>
            </a>
          </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
@endrole
@role('Waiter')
      <!-- Heading -->
      <div class="sidebar-heading">
        Order
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('order.index')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Take Order</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>View Profile</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
@endrole
@role('Receptionist')
      <!-- Heading -->
      <div class="sidebar-heading">
        Register
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('customer.index')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Customer Register</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Room Inquiry</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Billing</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
@endrole
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>