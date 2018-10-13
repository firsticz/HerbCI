
        var usernamelocal = localStorage.getItem("usernamelocal");
        console.log(usernamelocal)
        let navlogin = $("#navlogin");
        var strnav;
        if(usernamelocal == null){
            strnav += '<div class="container">'
                    +    '<a class="navbar-brand" href="index2">Mhunpri</a>'
                      +  '<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">'
                       +    '<span class="navbar-toggler-icon"></span>'
                      +  '</button>'
                        +'<div class="collapse navbar-collapse" id="navbarResponsive">'
                          +  '<ul class="navbar-nav ml-auto">'
                           
                           + '<li class="nav-item">'
                             +   '<a class="nav-link" href="login2">Login</a>'
                           +' </li>'
                           +' <!-- <li class="nav-item dropdown">'
                               + '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
                               + 'Login'
                               + '</a>'
                               + '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">'
                               + '<a class="dropdown-item" href="portfolio-1-col.html">Sign in</a>'
                              + ' <a class="dropdown-item" href="portfolio-2-col.html">Sign up</a>'
                              + ' </div>'
                           + '</li> -->'
                           +' </li>'
                           + '</ul>'
                       + '</div>'
                    +'</div>'
        }
        else{
            strnav += '<div class="container">'
                    +    '<a class="navbar-brand" href="index2">Mhunpri</a>'
                      +  '<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">'
                       +    '<span class="navbar-toggler-icon"></span>'
                      +  '</button>'
                        +'<div class="collapse navbar-collapse" id="navbarResponsive">'
                          +  '<ul class="navbar-nav ml-auto">'
                            +'<li class="nav-item">'
                             +   '<a class="nav-link">Welcome '+usernamelocal+'</a>'
                           + '</li> '
                           + '<li class="nav-item">'
                             +   '<button class="btn" onclick="navlogout()">Logout</button>'
                           +' </li>'
                        
                           +' </li>'
                           + '</ul>'
                       + '</div>'
                    +'</div>'
        }
        navlogin.html(strnav);

    function navlogout(){
        localStorage.removeItem("usernamelocal");
        window.location.href = "index2";
    }