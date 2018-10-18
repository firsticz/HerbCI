<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
   
    <title>Herb Search</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" id="navlogin">
       
    </nav>



    <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Herb
    <small>Search</small>
    </h1>

    <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index2">Home</a>
    </li>
    <li class="breadcrumb-item active">Herb Search</li>
    </ol>

    <img class="img-fluid rounded mb-4" src="<?php echo base_url() ?>assets/img/brandherb.jpg" alt="">
    <div class="row justify-content-center align-items-center">
        <div class="card col-lg-6 mb-4">
                <h5 class="card-header">Herb Search</h5>
                <div class="card-body text-center">
                    <img src="<?php echo base_url() ?>assets/img/herb.jpg" alt="">
                    <form id="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Herb name.." id="herb" required>
                        <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit">Go!</button>
                        </span>
                    </div>
                    </form>
                </div>
        </div>
    </div>

        <div class="card mb-4" id="result">

        </div>
      
</div>
</div>
</div>
          <footer class="py-5 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h5><i class="fas fa-leaf"></i> Mhunprai</h5>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="">Product</a></li>
                                    <li><a href="">Benefits</a></li>
                                    <li><a href="">Partners</a></li>
                                    <li><a href="">Team</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="">Documentation</a></li>
                                    <li><a href="">Support</a></li>
                                    <li><a href="">Legal Terms</a></li>
                                    <li><a href="">About</a></li>
                                </ul>
                            </div>
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fab fa-facebook fa-lg"></i></a></li>
                            <li class="nav-item"><a href="" class="nav-link"><i class="fab fa-twitter fa-lg"></i></a></li>
                            <li class="nav-item"><a href="" class="nav-link"><i class="fab fa-github fa-lg"></i></a></li>
                            <li class="nav-item"><a href="" class="nav-link"><i class="fab fa-instagram fa-lg"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="text-md-right">Contact Us</h5>
                        <hr>
                        <form>
                            <fieldset class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </fieldset>
                            <fieldset class="form-group">
                                <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                            </fieldset>
                            <fieldset class="form-group text-xs-right">
                                <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php echo base_url() ?>assets/js/navlogin.js"></script>
        <script src="<?php echo base_url() ?>assets/js/setup.js"></script>
        <script>
        $("#search").submit(function (e) { 
            e.preventDefault();
            var formdata = {
                "herbname": $("#herb").val()
            }
            let herbs = $("#result");
        $.post("http://localhost:8080/Mhunpris/api/herb/searchproperties",JSON.stringify(formdata),
            function (data, textStatus, jqXHR) {
                
                if(data.message == false){
                    alert("ไม่พบข้อมูล");
                }else{
                    var listOfherb = data.data;
                    var strHerb = "";
                    strHerb +=         '<div class="card-body col-md-12">'
                              +  '<div class="row">'
                                 +   '<div class="col-lg-12 ">' 
                                  +  '<h2 class="card-title">'+listOfherb.herbname+'</h2>'
                                    +'<h3 class="card-title">สรรพคุณ</h3>'
                                   + '<p class="card-text">'+listOfherb.properties+'</p>'
                                +    '</div>'
                                +'</div>'
                                +'</div>'
                                +'<div class="card-footer text-muted">'
                                +'อ้างอิงจากบัญชียาหลักแห่งชาติ'
                                +'</div>'

                herbs.html(strHerb);  
                }
                
            }
        );
            
        });
    </script>
</body>
</html>