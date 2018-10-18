<body>
<div class="container">  
<div class="row">
<div class="col-md-5">
<h1>Insert Drug Formula</h1>
<label >Name Drug</label><br>
<input type="text" class="form-control" id="drugName" name="drugName"><br>
<label >Recipe Type</label><br>
<input type="text" class="form-control" id="recipetype" name="recipetype"><br>
<!-- <label >Side Effect</label><br>
<textarea type="text" class="form-control" id="sideEffect" rows="4" cols="50"  name="sideEffect"></textarea><br> -->

<span id="temp1"></span>
<span id="temp2"></span>
<span id="temp3"></span>
<span id="temp3"></span>

<script>
$(document).ready(function(){
    var str = "";
    str = 
            '<p class="herb"><label>Herb Name</label><textarea type="text" class="form-control herbname" rows="1" cols="50">'
			+'</textarea><label>Weight</label><textarea class="form-control weight" rows="1" cols="50">'
			+'</textarea></p>'; 

            $("#temp1").append(str);
    
    str = '<p class="suggestion"><label>Suggestion</label><textarea type="text" class="form-control suggestion1" rows="4" cols="50">'
			+'</textarea></p>';

			$("#temp3").append(str);
            
    str = '<p class="use"><label>Use</label><textarea type="text" class="form-control use1" rows="4" cols="50">'
			+'</textarea></p>';

            $("#temp2").append(str);

    str = '<p class="warning"><label>Warning</label><textarea type="text" class="form-control warning1" rows="4" cols="50">'
			+'</textarea></p>';

			$("#temp3").append(str);
    $("#create").click(function(){
          str = 
            '<p class="herb"><label>Herb Name*</label><textarea type="text" class="form-control herbname" rows="1" cols="50">'
			+'</textarea><label>Weight*</label><textarea class="form-control weight" rows="1" cols="50">'
			+'</textarea></p>';

            $("#temp1").append(str);
            
    });       
    $("#removeHerb").click(function(){
            $('.herb').remove(); 
    });

    $("#createSuggestion").click(function(){
        str = '<p class="suggestion"><label>Suggestion</label><textarea type="text" class="form-control suggestion1" rows="4" cols="50">'
			+'</textarea></p>';

			$("#temp3").append(str);
    });
    $("#removeSuggestion").click(function(){
            $('.suggestion').remove(); 
    });

    $("#createUse").click(function(){
        str = '<p class="use"><label>Use*</label><textarea type="text" class="form-control use1" rows="4" cols="50">'
			+'</textarea></p>';

			$("#temp2").append(str);
    });
    $("#removeUse").click(function(){
            $('.use').remove(); 
    });

    $("#createWarning").click(function(){
        str = '<p class="warning"><label>Warning*</label><textarea type="text" class="form-control warning1" rows="4" cols="50">'
			+'</textarea></p>'; 

			$("#temp3").append(str);
    });
    $("#removeWarning").click(function(){
            $('.warning').remove(); 
    });

    $("#insert").click(function(){
    	var obj = {
            "drugName" : $("#drugName").val(),
            "recipetype" : $("#recipetype").val(),
            "herb" : null,
            "suggestion":null,
            "use":null,
            "warning":null
        };

    	var arr = [];
        $( ".herb" ).each(function( index ) {
        	//arr[index] = $( this ).val();
            var herb = $( this ).children(".herbname").val();
            var weight = $( this ).children(".weight").val();
            arr.push({
            	"herb": herb,
                "weight": weight
            });
        });
        obj.herb = arr;

        var arr = [];
        $( ".suggestion1" ).each(function( index ) {
        	arr[index] = $( this ).val();
        });
        obj.suggestion = arr;

        var arr = [];
        $( ".use1" ).each(function( index ) {
        	arr[index] = $( this )  .val();
        });
        obj.use = arr;

        var arr = [];
        $( ".warning1" ).each(function( index ) {
        	arr[index] = $( this ).val();
        });
        obj.warning = arr;

        console.log(obj); //ติด

        $.post("http://localhost:8080/Mhunpris/api/drugformula/insert", JSON.stringify(obj),//ติด
            function (data, textStatus, jqXHR) {
                alert(data.message);
                
            }
        );
    })
});
</script>

<body>
<button id="create" class="btn btn-success">Insert Herb</button>   <button id="removeHerb" class="btn btn-danger">Remove Herb</button><br><br><br>
<button id="createSuggestion" class="btn btn-success">Insert Suggestion</button>   <button id="removeSuggestion" class="btn btn-danger">Remove Suggestion</button><br><br><br>
<button id="createUse" class="btn btn-success">Insert Use</button>  <button id="removeUse" class="btn btn-danger">Remove Use</button><br><br><br>
<button id="createWarning" class="btn btn-success">Insert Warning</button>  <button id="removeWarning" class="btn btn-danger">Remove Warning</button><br><br><br>
<br><button type="button" class="btn btn-primary btn-lg" id="insert" >Insert</button> 
</body>
</html>
