<div id="page-wrapper">
    <div class="pull-right">
        <a href="<?php echo base_url('admin_main/AdminController/index') ?>" class="btn btn-info btn-lg">Back</a>
    </div>
    <div class="main-page">
        <h2 class="title1"><?php echo $title ?> Page</h2>
        <div class="grids widget-shadow">
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">

                <div class="form-body">
                    <form method="post" action="<?php echo base_url('admin_main/AdminController/save') ?>" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="address" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="text" class="form-control" id="time" name="time" placeholder="time">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="insta">Instagram</label>
                                    <input type="text" class="form-control" id="insta" name="insta" placeholder="insta">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="job">Job</label>
                                    <input type="text" class="form-control" id="job" name="job" placeholder="job">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="youtube">Youtube Link</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube" placeholder="youtube" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Location">
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
                url: "<?php echo base_url('admin_main/AdminController/getsing'); ?>/" + id,
                success: function(results) {
                    var result = JSON.parse(results);
                    $('#name').val(result.name);
                    $('#email').val(result.email);
                    $('#phone').val(result.phone);
                    $('#time').val(result.time);
                    $('#address').val(result.address);
                    $('#youtube').val(result.youtube);
                    $('#password').val(result.password);
                    $('#facebook').val(result.facebook);
                    $('#insta').val(result.insta);
                    $('#twitter').val(result.twitter);
                    $('#job').val(result.job);
                    $('#location').val(result.location);
                }

            });
        }

    });
</script>

</body>

</html>