<body>
    <div class="container">
    <div class="row">
        <div class="col-md-5">
        <div class="form-group">
        <h2> Herb</h2> 
        <label class="sr-only"  for="field-name">Herbname</label>
            <input type="text" class="form-control" id="field-name" placeholder="Herb Name"><br><br>
            <div data-role="dynamic-fields">
            <div class="form-inline">
                        <textarea type="text" class="form-control" id="field-name" rows="4" cols="50"  placeholder="Properties"></textarea><br><br>
                        <textarea type="text" class="form-control" id="field-name" rows="4" cols="50"  placeholder="Warning "></textarea>
                    <button class="btn btn-danger" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>  <!-- /div.form-inline -->
            </div>  <!-- /div[data-role="dynamic-fields"] -->
        </div>  <!-- /div.col-md-12 -->
        <br><button type="button" class="btn btn-primary">Primary</button>
    </div>  <!-- /div.row --><br>
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