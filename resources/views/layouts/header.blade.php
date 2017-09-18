<div class="blog-masthead">
      <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="/posts">Home</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">New features</a>
            <!--<a class="nav-link ml-auto" href="/register">Register/Log in</a>-->

            @if(Auth::check())
              <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
              <a class="nav-link ml-auto" href="/logout">Logout</a>
              <a class="nav-link ml-auto" href="#">Notifications <span class="label label-orange">3</span></a>
              @else
                <a class="nav-link ml-auto" href="/register">Register/login</a>
                
            @endif


        </nav>
      </div>
    </div>
    
    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">My Blog</h1>
        <p class="lead blog-description">A blog built with Laravel Framework.</p>
      </div>
    </div>