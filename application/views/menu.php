<body>

    <div class="container">
        <header id="main-header">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-5">
                    <img src="<?php echo base_url() ?>assets/img/img1.jpg" alt="">
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="d-flex flex-column">
                        <div class="p-5 bg-green text-white">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <h1 class="display-4">Mhunprai</h1>
                                <a class="btn btn-dark" href="<?php echo base_url() ?>main/login">
                                    Login</a>
                            </div>
                        </div>

                        <div class="p-4 bg-greentwo">
                            Exprienced Mhumprai
                        </div>
                        <div>
                            <div class="d-flex flex-row text-white align-item-stretch text-center">
                                <div class="port-item p-4 bg-greenmenu1" data-toggle="collapse" data-target="#home">
                                    <i class="fas fa-home fa-2x d-block"></i>
                                    <span class="d-none d-sm-block">Home</span>
                                </div>
                                <div class="port-item p-4 bg-greenmenu2" data-toggle="collapse" data-target="#herbsearch">
                                    <i class="fas fa-feather-alt fa-2x d-block"></i>
                                    <span class="d-none d-sm-block">Herb Search</span>
                                </div>
                                <div class="port-item p-4 bg-greenmenu3" data-toggle="collapse" data-target="#symptomsearch">
                                    <i class="fas fa-feather-alt fa-2x d-block"></i>
                                    <span class="d-none d-sm-block">Symptom Search</span>
                                </div>
                                <div class="port-item p-4 bg-greenmenu4" data-toggle="collapse" data-target="#group">
                                    <i class="fas fa-feather-alt fa-2x d-block"></i>
                                    <span class="d-none d-sm-block">Group</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <!--home-->
        <div id="home" class="collapse show">
            <div class="card card-body bg-greenmenu1 text-white py-5">
                <h2>Welcome To Mhunprai</h2>
                <p class="lead">test</p>
            </div>

            <div class="card card-body py5">
                <h3>Test</h3>
                <p>Hello</p>
                <hr>

                <!-- 
                <h4>ยาหอมทิพโอสถ</h4>
                <p>คะแนนความพึงพอใจ</p>
                <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <h4>ยาหอมเทพจิตร</h4>
                <p>คะแนนความพึงพอใจ</p>
                <div class="progress mb-3">
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div> -->
                <div id="vote"></div>
            </div>


        </div>
        <!--home-->    

        