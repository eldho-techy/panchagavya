<div id="page-wrapper">
    <div class="pull-right">
        <a href="<?php echo base_url('people_sayings/SayingsController/index') ?>" class="btn btn-info btn-lg">Back</a>
    </div>
    <div class="main-page">
        <h2 class="title1"><?php echo $title ?> Page</h2>
        <div class="grids widget-shadow">
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">

                <div class="form-body">
                    <form method="post" action="<?php echo base_url('people_sayings/SayingsController/save') ?>" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name"  name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="job">Job</label>
                                    <input type="text" class="form-control" id="job"  name="job" placeholder="Job">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="sayings">Sayings</label>
                                    <input type="text" class="form-control" id="sayings"  name="sayings" placeholder="Sayings" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image"  name="image" required>
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
                url: "<?php echo base_url('people_sayings/SayingsController/getsing'); ?>/" + id,
                success: function(results) {
                    var result = JSON.parse(results);
                    $('#name').val(result.name);
                    $('#job').val(result.job);
                    $('#sayings').val(result.sayings);
                }

            });
        }

    });
</script>

</body>

</html>