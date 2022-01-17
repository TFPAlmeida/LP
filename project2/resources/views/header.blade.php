<?php 
use App\Http\Controllers\AnnouncementController;

$tota=0;

if(Session::has('user'))
{
  $total= AnnouncementController::cartItem();
}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">MyProject</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
        <!--  <li><a href="/myorders">Announcements</a></li>-->
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          @if(Session::has('user'))
          <li><a href="/cartlist">cart({{$total}})</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @elseif(Session::has('company'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('company')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="/myAnnouncements">My Announcements</a></li>
            <li><a href="/addAnnouncement">Add Announcements</a></li>
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @elseif(Session::has('admin'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('admin')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="/users">Users</a></li>
            <li><a href="/companies">Companies</a></li>
            <li><a href="/announcements">Announcements</a></li>
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @elseif(!Session::has('user') && !Session::has('company') && !Session::has('admin'))
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/login_user">Login Cliente</a></li>
              <li><a href="/login_company">Login Company</a></li>
              <li><a href="/login_admin">Login Admin</a></li>
            </ul>
          </li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Register
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/register_user">Register Cliente</a></li>
              <li><a href="/register_company">Register Company</a></li>
              <li><a href="/confirmAdmin">Register Admin</a></li>
            </ul>
          </li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>