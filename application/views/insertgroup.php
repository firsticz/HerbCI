<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div data-role="dynamic-fields">
                <div class="form-inline">
                <div class="form-group">
                <h1>Insert Herb</h1>
                <label class="sr-only"  for="field-name">ชื่อกลุ่มอาการ</label>
                 <input type="text" class="form-control" id="field-name" placeholder="Name Symtom Group"><br><br> 
                    <button class="btn btn-danger" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>  <!-- /div.form-inline -->
            </div>  <!-- /div[data-role="dynamic-fields"] -->
        </div>  <!-- /div.col-md-12 -->
        <br><button type="button" class="btn btn-primary">Insert</button>
        </div> 
    </div>  <!-- /div.row -->
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







