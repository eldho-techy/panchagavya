<div id="page-wrapper">
    <div class="pull-right">
        <a href="<?php echo base_url('admin_item_list/ItemsController/index') ?>" class="btn btn-info btn-lg">Back</a>
    </div>
    <div class="main-page">
        <h2 class="title1"><?php echo $title ?> Page</h2>
        <div class="grids widget-shadow">
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">

                <div class="form-body">
                    <form method="post" action="<?php echo base_url('admin_item_list/ItemsController/save') ?>" enctype="multipart/form-data" class="upload-form">
                        <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="item_name">Item Name</label>
                                    <input type="text" class="form-control" id="item_name" placeholder="Item name" name="item_name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="category_id">Select Category</label>
                                    <select type="text" class="form-control" id="category_id" name="category_id">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="ingredients">Ingredients</label>
                                    <input type="text" class="form-control" id="ingredients" placeholder="Ingredients" name="ingredients">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" placeholder="price" name="price">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="sub_title">Sub Title</label>
                            <textarea class="form-control" id="sub_title" placeholder="Sub Title" name="sub_title"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="about_item">About Item</label>
                            <textarea class="form-control" id="about_item" placeholder="About Item" name="about_item"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control" id="image" name="image" data-max-size="3000" accept="image/*" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="special">Special</label>
                            <select type="text" class="form-control" id="special" name="special">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
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
                url: "<?php echo base_url('admin_item_list/ItemsController/getsing'); ?>/" + id,
                success: function(results) {
                    var result = JSON.parse(results);
                    $('#item_name').val(result.item_name);
                    $('#price').val(result.price);
                    $('#ingredients').val(result.ingredients);
                    $('#about_item').val(result.about_item);
                    $('#sub_title').val(result.sub_title);
                    $('#special').val(result.special);
                }

            });
        }

        $.ajax({
            url: "<?php echo site_url('admin_item_list/ItemsController/get_category'); ?>",
            async: false,
            success: function(result) {
                $('#category_id').html(result);
                $('#category_id').prepend(
                    $('<option></option>').val("").html('Select')
                );
            }
        });

    });
    
</script>

</body>

</html>