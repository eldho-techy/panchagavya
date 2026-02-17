<script src="<?php echo base_url() . 'admin_assets/js/Chart.bundle.js' ?>"></script>
    <script src="<?php echo base_url() . 'admin_assets/js/utils.js' ?>"></script>


    <!-- new added graphs chart js-->

    <!-- Classie -->
    <!-- for toggle left push menu script -->
    <script src="<?php echo base_url() . 'admin_assets/js/classie.js ' ?>"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };


        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }
    </script>
    <!-- //Classie -->
    <!-- //for toggle left push menu script -->

    <!--scrolling js-->
    <script src="<?php echo base_url() . 'admin_assets/js/jquery.nicescroll.js' ?>"></script>
    <script src="<?php echo base_url() . 'admin_assets/js/scripts.js' ?>"></script>
    <!--//scrolling js-->

    <!-- side nav js -->
    <script src='<?php echo base_url() . 'admin_assets/js/SidebarNav.min.js' ?>' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->

    <!-- for index page weekly sales java script -->
   

    <!-- //for index page weekly sales java script -->


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() . 'admin_assets/js/bootstrap.js' ?>">
    </script>