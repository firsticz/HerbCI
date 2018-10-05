<footer id="main-footer" class="p-5 bg-dark text-white">
<div class="container">
        <div class="row">
            <div class="col-md-5">
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
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right">Contact Us</h5>
                <hr>
            </div>
            <div class="col-md-5">
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
</div>
<script>
    $('.port-item').click(function(){
        $('.collapse').collapse('hide');
    });
</script>

    <script>
        let vote = $("#vote");
        $.post("http://localhost:8080/Mhunpris/api/score/findAll", {},
            function (data, textStatus, jqXHR) {
                var listOfFormula = data.data;
                var strVote = "";
                $.each(listOfFormula, function( index, value ) {
                    strVote += '<h4>'+value.drugformula+'</h4>'
                            + '<p>คะแนนความพึงพอใจ</p>'
                            + '<div class="progress mb-3">'
                            + '<div class="progress-bar" role="progressbar" style="width: '+value.score+'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'+value.score+'%</div>'
                            + '</div>';                
                });
                vote.html(strVote);  
            }
        );
    </script>
</body>