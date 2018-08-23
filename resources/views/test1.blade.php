
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test1</title>
  <base target="_self">
  
  <meta name="google" value="notranslate">
  <link rel="shortcut icon" href="/images/cp_ico.png">

  
  <!--stylesheets / link tags loaded here-->



  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
  

  

  <style type="text/css">html,body {
  height:100%;
}

.first {
  height:40vh;
  min-height:100px;
  background-size:cover;
  background-image:url('https://images.unsplash.com/photo-1470434151738-dc5f4474c239?dpr=1&auto=format&crop=entropy&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb');
}

.affix {
  background-color: #eee;
  -webkit-transition:padding 0.2s ease-out;
  -moz-transition:padding 0.2s ease-out;  
  -o-transition:padding 0.2s ease-out;         
  transition:padding 0.2s ease-out;
}

@media (min-width:768px) {
    .affix-top {
      /* navbar style at top */
      background-color:transparent;
      border-color:transparent;
      padding: 15px;
      -webkit-transition:all 0.5s ease;
      -moz-transition:all 0.5s ease; 
      -o-transition:all 0.5s ease;         
      transition:all 0.5s ease;  
    }
}

nav .navbar-nav .nav-link,
nav .navbar-brand {
   color: #000;
}

section {
  height:calc(90% - 50px);
  height: 90vh;
}
</style>

</head>
<body >
  
  <nav id="nav" class="navbar fixed-top navbar-toggleable-sm" data-spy="affix">
  <div class="container-fluid">

                <a class="navbar-brand" href="{{ url('/home') }}">
                   My To-Do
                 </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-1">
             @yield('content')
        </main>
  <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
      window.alert = function(){/*disable alert*/};
      window.confirm = function(){/*disable confirm*/};
      window.prompt = function(){/*disable prompt*/};
      window.open = function(){/*disable open*/};
    }
    
    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        if(links[i].href.indexOf('#')!=-1) {
          links[i].addEventListener("click", function(e) {
          console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash=="#") {
                  e.preventDefault();
                  return false;
                }
                else {
                  /*
                  var el = document.getElementById(this.hash.replace(/#/, ""));
                  if (el) {
                    el.scrollIntoView(true);
                  }
                  */
                }
              }
              return false;
          })
        }
      }
    }, false);
  </script>
  
  <!--scripts loaded here-->
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  
  
  <script src="https://rawgit.com/bassjobsen/affix/master/assets/js/affix.js"></script>
  
  <script>
  /* affix the navbar after scroll below header */
$('nav').affix({
      offset: {
        top: $('#services').offset().top
      }
}); 
  </script>

</body>
</html>
