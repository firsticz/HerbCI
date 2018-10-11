<body>
    <div class="container">  
    <div class="row">
        <div class="col-md-5">
        <div class="form-group">
                <h1>Insert Drug Formula</h1>
                <label >Name Drug</label><br>
                <input type="text" class="form-control" id="Drugname"><br>
                <div class="form-row">
                <label >Recipe Type</label><br>
                <input type="text" class="form-control" id="Recipetype"><br>   
                <div data-role="dynamic-fields">
                <div class="form-inline">
                <label >Herb</label><br>
                <input type="text" class="form-control"  id="field-name"  id="Herb" ><br>
                <label >Weight</label><br>
                <input type="text" class="form-control"  id="field-name"  id="weight" >
                <button class="btn btn-danger" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button><br><br>  
            </div>  <!-- /div[data-role="dynamic-fields"] -->
        </div>  <br><!-- /div.col-md-12 -->
        <div data-role="dynamic-fields">
                <div class="form-inline">
         <label >Suggestion </label><br>
            <textarea type="text" class="form-control" id="field-name" rows="4" cols="50"  placeholder="Suggestion"></textarea>
            <button class="btn btn-danger" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                    </div>  <!-- /div[data-role="dynamic-fields"] -->
        </div>  <br><br><!-- /div.col-md-12 -->
        <div data-role="dynamic-fields">
                <div class="form-inline">
         <label >Use </label><br>
            <textarea type="text" class="form-control" id="field-name" rows="4" cols="50"  placeholder="Use"></textarea>
            <button class="btn btn-danger" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                    </div>  <!-- /div[data-role="dynamic-fields"] -->
        </div>  <br><br><!-- /div.col-md-12 -->
        <div data-role="dynamic-fields">
                <div class="form-inline">
         <label >Warning</label><br>
            <textarea type="text" class="form-control" id="field-name" rows="4" cols="50"  placeholder="Warning"></textarea>
            <button class="btn btn-danger" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                    </div>  <!-- /div[data-role="dynamic-fields"] -->
        </div>  <br><br><!-- /div.col-md-12 -->
        <div data-role="dynamic-fields">
                <div class="form-inline">
         <label >Side Effect</label><br>
            <textarea type="text" class="form-control" id="field-name" rows="4" cols="50"  placeholder="Side Effect"></textarea>
            <button class="btn btn-danger" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                    </div>  <!-- /div[data-role="dynamic-fields"] -->
        </div>  <br><br><!-- /div.col-md-12 -->
        <br><button type="button" class="btn btn-primary">Insert</button> 
    </div>  <!-- /div.row -->
    </div>
</div>	<script type="text/javascript">
	$(function() {
    // Remove button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
        function(e) {
            e.preventDefault();
            $(this).closest('.form-inline').remove();
        }
    );
    // Add button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
        function(e) {
            e.preventDefault();
            var container = $(this).closest('[data-role="dynamic-fields"]');
            new_field_group = container.children().filter('.form-inline:first-child').clone();
            new_field_group.find('input').each(function(){
                $(this).val('');
            });
            container.append(new_field_group);
        }
    );
});
	</script>
</body>
</html>
 