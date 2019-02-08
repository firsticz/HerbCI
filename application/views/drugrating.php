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
    <script src="<?php echo base_url() ?>assets/js/setup.js"></script>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .newspaper {
            -webkit-column-count: 4; /* Chrome, Safari, Opera */
            -moz-column-count: 4; /* Firefox */
            column-count: 4;
            -webkit-column-gap: 50px; /* Chrome, Safari, Opera */
            -moz-column-gap: 50px; /* Firefox */
            column-gap: 50px;
            -webkit-column-rule-style: solid; /* Chrome, Safari, Opera */
            -moz-column-rule-style: solid; /* Firefox */
            column-rule-style: solid;
            -webkit-column-rule-width: 1px; /* Chrome, Safari, Opera */
            -moz-column-rule-width: 1px; /* Firefox */
            column-rule-width: 1px;
            -webkit-column-rule-color: lightblue; /* Chrome, Safari, Opera */
            -moz-column-rule-color: lightblue; /* Firefox */
            column-rule-color: lightblue;
        }
        .checked {
            color: orange;
        }
</style>
    <title>DrugFormula Search</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" id="navlogin">
        
    </nav>




    <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">DrugFormula
    <small>Search</small>
    </h1>

    <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item"> -->
    <a href="index2" class="list-group-item"><i class="fa fa-home fa-fw"></i> Home</a><!-- <a href="index2">Home</a> -->
    </li>
    <!-- <li class="breadcrumb-item active">DrugFormula Search</li> -->
    </ol>

    <img class="img-fluid rounded mb-4" src="<?php echo base_url() ?>assets/img/brandrug.jpg" alt="">
    <div class="row justify-content-center align-items-center">
        <div class="card col-lg-6 mb-4">
                <h5 class="card-header">DrugFormula Search</h5>
                <div class="card-body text-center">
                    <img src="<?php echo base_url() ?>assets/img/drug.jpg" alt="">
                    <form id="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="DrugFormula name.." id="drugName">
                        <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit"> Go! <i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    </form>
                </div>
        </div>
    </div>
        <div class="card mb-4" id="result">

        </div>
        <div class="row" id="insertscore">
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

         <script>
        $("#search").submit(function (e) { 
            e.preventDefault();
            var formdata = {
                "drugName": $("#drugName").val()
            }
            let drug = $("#result");
            let drug2 = $("#insertscore");
        $.post("http://localhost:8080/Mhunpris/api/drugformula/findOne",JSON.stringify(formdata),
            function (data, textStatus, jqXHR) {
                
                if(data.message == false){
                    alert("ไม่พบข้อมูล");
                }else{
                    var i,j,k,l;
                    var sumscore,avg,count;
                    var listOfdrug = data.data;
                    console.log(data.data);
                    console.log(data.data3[0].userscore.length);
                    var strDrug = "";
                    strDrug +=         '<div class="card-body col-md-12">'
                              +  '<div class="row">'
                                 +   '<div class="newspaper">' 
                                  +  '<h2 class="card-title">'+listOfdrug.drugName+'</h2>'
                                    +'<h4 class="card-title">ประเภทสูตรยา</h3>'
                                   + '<p class="card-text">'+listOfdrug.recipeType+'</p>'
                                   +'<h4 class="card-title">สูตรสมุนไพร</h3>'
                                   for(i=0;i<listOfdrug.herb.length;i++){
                                       for(j=0;j<data.data2.length;j++){
                                           if(listOfdrug.herb[i].idherb == data.data2[j].idherb){
                                            strDrug +='<p class="card-text">'+data.data2[j].herbname+'   '+listOfdrug.herb[i].weight+'</p>'
                                           }
                                        
                                       }
                                       
                                   }
                                   strDrug +='<h4 class="card-title">รักษา</h3>'
                                   for(i=0;i<listOfdrug.suggestion.length;i++){
                                       strDrug +='<p class="card-text">'+listOfdrug.suggestion[i]+'</p>'
                                   }
                                   strDrug +='<h4 class="card-title">วิธีใช้</h3>'
                                   for(i=0;i<listOfdrug.suggestion.length;i++){
                                       strDrug +='<p class="card-text">'+listOfdrug.use[i]+'</p>'
                                   }
                                   strDrug +='<h4 class="card-title">คำเตือน</h3>'
                                   for(i=0;i<listOfdrug.suggestion.length;i++){
                                       strDrug +='<p class="card-text">'+listOfdrug.warning[i]+'</p>'
                               
                                    }
                                    
                                    strDrug +='</div>'
                                   +'</div>'
                                   +'</div>'
                                   
                                +'<div class="card-footer text-muted">'
                                +'<h2>Star Rating</h2>'
                                for(k=0;k<data.data3.length;k++){
                                    for(l=0;l<2;l++){
                                       if(listOfdrug.drugName == data.data3[k].id){
                                        sumscore = data.data3[0].userscore[0].score;
                                        count = data.data3[0].userscore.length;
                                       }
                                    }
                                   }
                                   avg = sumscore/count;
                                   avg = avg/20;
                                   console.log(avg);                                   
                                   if(avg == 1){
                                    strDrug +='<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star "></span>'
                                    +'<span class="fa fa-star "></span>'
                                    +'<span class="fa fa-star"></span>'
                                    +'<span class="fa fa-star"></span>'
                                   }else if(avg == 2){
                                    strDrug +='<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star"></span>'
                                    +'<span class="fa fa-star"></span>'
                                   }else if(avg == 3){
                                    strDrug +='<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star "></span>'
                                    +'<span class="fa fa-star"></span>'
                                   }else if(avg == 4){
                                    strDrug +='<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star"></span>'
                                   }else if(avg == 5){
                                    strDrug +='<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                    +'<span class="fa fa-star checked"></span>'
                                   }else{
                                    strDrug +='<span class="fa fa-star "></span>'
                                    +'<span class="fa fa-star "></span>'
                                    +'<span class="fa fa-star "></span>'
                                    +'<span class="fa fa-star "></span>'
                                    +'<span class="fa fa-star "></span>'
                                   }

                                   
                            
                                
                                +'</br>'
                                +'อ้างอิงจากบัญชียาหลักแห่งชาติ'
                                +'</div>'
                                  
                              
                                       
                
                drug.html(strDrug);
                
                if(usernamelocal != null){
                   var strDrug2 = "";
                                    console.log(user);
                                    strDrug2 += '<div class="col-md-12">'
                                           + '<form id="inscore">'
                                               + '<div class="row">'
                                               + '<div class="form-group col-md-3">'
                                                   + '<label for="score">ให้คะแนนสูตรยา</label>'
                                                   + '<input type="hidden" class="form-control" id="drugname" value="'+listOfdrug.drugName+'">'
                                                   + '<input type="hidden" class="form-control" name="usersocre" id="usersocre1" value="'+user+'">'
                                                   + '<input type="text" class="form-control" name="usersocre" id="usersocre2" placeholder="กรอกคะแนน 0-100" required>'
                                                   + '<button class="btn btn-primary" type="submit">ลงคะแนน</button>'
                                                +'</div>'
                                               + '</div>'
                                           + '</form>' 
                                       + '</div>'
                                drug2.html(strDrug2);
                                }
                }
                

                



            }
        );
            
        });
    </script>
    <script>
        $(function(){
            $("#inscore").submit(function (e) { 
                e.preventDefault();
                var formdata = {
                    "drugformulaId":$("#drugname").val(),
                    "userscore":[
                        $("#usersocre1").val(),
                        $("#usersocre2").val()
                    ]
                };
                $.post("http://localhost:8080/Mhunpris/api/usersocre/inputscore", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                    }
                );
            });
        });
    </script>
    
</body>
</html>