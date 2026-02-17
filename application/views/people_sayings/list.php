<div id="page-wrapper">
    <div class="pull-right">
        <a href="<?php echo base_url('people_sayings/SayingsController/create') ?>" class="btn btn-info btn-lg">Add</a>
    </div>
    <div class="main-page">
        <h2 class="title1"><?php echo $title ?></h2>
        <div class="grids widget-shadow">
            <div class="table-responsive">
                <table class="table-striped" width="100%" id="user_data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Sayings</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var dataTable = $('#user_data').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?php echo base_url() . 'people_sayings/SayingsController/fetch_user'; ?>",
                type: "POST"
            },
            "columnDefs": [{
                "targets": [0, 2],
                "orderable": false,
            }, ],
        });
    });
</script>

</body>

</html>