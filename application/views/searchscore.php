<div class="container">
    <h1>Insert Herb</h1>
<form id="searchscore">
  <div class="form-group">
    <label >drugformula</label>
    <input type="text" class="form-control" id="drugformula" name="drugformula" placeholder="Herb Name input">
  </div>
  <div class="form-group">
    <label >score</label>
    <input type="text" class="form-control" id="score" name="score" placeholder="Herb Name input">
  </div>

  
  <button type="submit" class="btn btn-primary">Search</button>
  
</form>
</div>
   
    <div id="vote" class="container">

    </div>




<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="<?php echo base_url() ?>assets/js/setup.js"></script>

  <script>
        $(function(){
            $("#searchscore").submit(function (e) { 
                e.preventDefault();
                var formdata = {
                    "drugformula":$("#drugformula").val(),
                    "score":$("#score").val(),
                    
                };
                let vote = $("#vote");
                $.post("http://localhost:8080/Mhunpris/api/score/search", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        var listOfvote = data.data;
                        var strvote = "";
                        $.each(listOfvote, function( index, value ) {
                            strvote += '<p>'+value.vote+'</p>'            
                        });
                        vote.html(strvote);
                    }
                );
            });
        });
    </script>