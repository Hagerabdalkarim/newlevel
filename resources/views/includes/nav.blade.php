<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Cars</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="{{ route('cars') }}">Cars List</a></li>
      <li><a href="{{ route('createCar') }}">Insert Car</a></li>
      <li><a href="{{ route('trashedCar') }}">Trashed</a></li>
      <li><a href="#">Page 3</a></li> -->
      <!-- //
       <li class="{{ Request::segment(1) === '/' ? 'active' : null }}"> <a href="{{ route('cars') }}">Home</a> </li> 
      <li class="{{ Request::segment(1) === 'creatCar' ? 'active' : null }}"> <a href="{{ route('createCar') }}">Insert Car</a> </li> 
      <li class="{{ Request::segment(1) === 'trashedCar' ? 'active' : null }}"> <a href="{{ route('trashedCar') }}">Trashed</a> </li>
      // -->
     
      <li class="nav_link {{ Request::is('cars') ? 'active' : '' }}"><a href="{{ route('cars') }}">Home </a> </li> 
      <li class="nav_link {{ Request::is('createCar') ? 'active' : '' }}"> <a href="{{ route('createCar') }}">Insert Car</a> </li> 
      <li class="nav_link {{ Request::is('trashedCar') ? 'active' : '' }}"> <a href="{{ route('trashedCar') }}">Trashed</a> </li> 
      
    </ul>
  </div>
</nav>
