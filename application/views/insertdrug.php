<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>
<div class="container">  
<div class="row">
<div class="col-md-5">
<h1>Insert Drug Formula</h1>
<label >Name Drug</label><br>
<input type="text" class="form-control" id="drugname" name="drugname"><br>
<label >Recipe Type</label><br>
<input type="text" class="form-control" id="recipetype" name="recipetype"><br>
<label >Side Effect</label><br>
<textarea type="text" class="form-control" id="sideEffect" rows="4" cols="50"  name="sideEffect"></textarea><br>

<span id="temp1"></span>
<span id="temp2"></span>
<span id="temp3"></span>
<script>
$(document).ready(function(){
    var str = "";
    str = 
            '<p class="herb1">Herb Name<textarea class="form-control herb" rows="1" cols="50">'
			+'</textarea>Weight<textarea class="form-control weight" rows="1" cols="50">'
			+'</textarea></p>';

            $("#temp1").append(str);
    str = '<p class="use">Use<textarea class="form-control use" rows="4" cols="50">'
			+'</textarea></p>';

            $("#temp2").append(str);
    str = '<p class="warning">Warning<textarea class="form-control warning" rows="4" cols="50">'
			+'</textarea></p>';

			$("#temp3").append(str);
    $("#create").click(function(){
          str = 
            '<p class="herb1">Herb Name<textarea class="form-control herb" rows="1" cols="50">'
			+'</textarea>Weight<textarea class="form-control weight" rows="1" cols="50">'
			+'</textarea></p>';

			$("#temp1").append(str);
    });       
    $("#removeHerb").click(function(){
            $('.herb1').remove(); 
    });

    $("#createUse").click(function(){
        str = '<p class="use">Use<textarea class="form-control use" rows="4" cols="50">'
			+'</textarea></p>';

			$("#temp2").append(str);
    });
    $("#removeUse").click(function(){
            $('.use').remove(); 
    });

    $("#createWarning").click(function(){
        str = '<p class="warning">Warning<textarea class="form-control warning" rows="4" cols="50">'
			+'</textarea></p>';

			$("#temp3").append(str);
    });
    $("#removeWarning").click(function(){
            $('.warning').remove(); 
    });

    $("#insert").click(function(){
    	var obj = {
            "drugname" : $("#drugname").val(),
            "recipetype" : $("#recipetype").val(),
            "herb" : null,
            "use":null,
            "warning":null

        };
    	var arr = [];
        $( ".herb1" ).each(function( index ) {
        	//arr[index] = $( this ).val();
            var name = $( this ).children(".herb").val();
            var weight = $( this ).children(".weight").val();
            arr.push({
            	"name": name,
                "weight": weight
            });
        });
        obj.herb = arr;

        var arr = [];
        $( ".use" ).each(function( index ) {
        	arr[index] = $( this ).val();
        });
        obj.use = arr;

        var arr = [];
        $( ".warning" ).each(function( index ) {
        	arr[index] = $( this ).val();
        });
        obj.use = arr;

        console.log(obj); //ติด

        $.post("http://localhost:8080/Mhunpris/api/drugformula/insert", JSON.stringify(obj),//ติด
            function (data, textStatus, jqXHR) {
                alert(data.message);
            }
        );
    })
});
</script>
</head>
<body>
<button id="create" class="btn">Insert Herb</button>   <button id="removeHerb" class="btn">Remove Herb</button><br><br><br>
<button id="createUse" class="btn">Insert Use</button>  <button id="removeUse" class="btn">Remove Use</button><br><br><br>
<button id="createWarning" class="btn">Insert Warning</button>  <button id="removeWarning" class="btn">Remove Warning</button><br><br><br>
<br><button type="button" class="btn btn-primary" id="insert" >Insert</button> 
</body>
</html>
