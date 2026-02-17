<div id="page-wrapper">
    <div class="pull-right">
        <a href="<?php echo base_url('admin/MainController/index') ?>" class="btn btn-info btn-lg">Back</a>
    </div>
    <div class="main-page">
        <h2 class="title1"><?php echo $title ?> Page</h2>
        <div class="grids widget-shadow">
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">

                <div class="form-body">
                    <form method="post" action="<?php echo base_url('admin/MainController/save') ?>">
                        <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="item_category">Item Category</label>
                                    <input type="text" class="form-control" id="item_category" placeholder="Category" name="item_category">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>

                            </div>

                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
</div>

<script type="text/javascript" language="javascript">
    var id = $('#id').val();
    $(document).ready(function() {
        if (id > 0) {
            $.ajax({
                url: "<?php echo base_url('admin/MainController/getsing'); ?>/" + id,
                success: function(results) {
                    var result = JSON.parse(results);
                    $('#item_category').val(result.category_name);
                }

            });
        }

    });
</script>

</body>

</html>