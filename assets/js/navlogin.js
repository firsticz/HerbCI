
        var usernamelocal = localStorage.getItem("usernamelocal");
        var user =localStorage.getItem("user");
        let navlogin = $("#navlogin");
        var strnav = '';
        if(usernamelocal == null){
            strnav += '<div class="container">'
                    +    '<a class="navbar-brand" href="index2">Mhunpri</a>'
                      +  '<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">'
                       +    '<span class="navbar-toggler-icon"></span>'
                      +  '</button>'
                        +'<div class="collapse navbar-collapse" id="navbarResponsive">'
                          +  '<ul class="navbar-nav ml-auto">'
                           + '<li class="nav-item">'
                            +   '<a class="nav-link" href="login">Login</a>'
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
                           + '</ul>'
                       + '</div>'
                    +'</div>'
        }
        navlogin.html(strnav);

    function navlogout(){
        localStorage.removeItem("usernamelocal");
        localStorage.removeItem("user");
        alert("ออกจากระบบสำเร็จ")
        window.location.href = "index2";
    }