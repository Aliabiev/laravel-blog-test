<html>
  <head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </title>
  </head>
  <body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="{{url('/')}}">BLOG</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/category/create')}}">Create category</a></li>
        <li><a href="{{url('/news/create')}}">Add news</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-3">
        @section('sidebar')
        Это главная боковая панель.
        <ul class="list-group">
          @foreach($categoriesShare as $cat)
          <li class="list-group-item">
              <a href="{{url('/category/'.$cat->id)}}"> {{$cat->name}}  </a>
              <span class="badge"> {{$cat->news->count()}} </span></li>
          @endforeach
        </ul>
        @show
        </div>
    <div class="col-sm-8">
      @yield('content')
    </div>
  </div>
</div>
    <script type="text/javascript" href="{{asset('js/app.js')}}"></script>
  </body>
</html>