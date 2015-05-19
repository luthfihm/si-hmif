<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SI HMIF - <?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/zabuto_calendar.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/gritter/css/jquery.gritter.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lineicons/style.css'); ?>">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsive.css'); ?>" rel="stylesheet">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >

<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/ui-sam.jpg'); ?>" class="img-circle" width="60"></a></p>
            <h5 class="centered">Sistem Informasi HMIF</h5>

            <li class="mt">
                <a class="<?php if ($content=='new_post') echo 'active'; ?>" href="<?php echo base_url('admin/new_post'); ?>">
                    <i class="fa fa-pencil-square"></i>
                    <span>New Post</span>
                </a>
            </li>

            <li class="mt">
                <a class="<?php if ($content=='post') echo 'active'; ?>" href="<?php echo base_url('admin/post'); ?>">
                    <i class="fa fa-archive"></i>
                    <span>Post</span>
                </a>
            </li>

            <li class="mt">
                <a class="<?php if ($content=='setting') echo 'active'; ?>" href="<?php echo base_url('admin/setting'); ?>">
                    <i class="fa fa-cog"></i>
                    <span>Setting</span>
                </a>
            </li>

            <li class="mt">
                <a href="<?php echo base_url('admin/logout'); ?>">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<?php $this->load->view($content); ?>

<!--main content end-->

<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        <?php echo date('Y'); ?> - Sistem Informasi HMIF ITB.
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script class="include" type="text/javascript" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery.sparkline.js'); ?>"></script>


<!--common script for all pages-->
<script src="<?php echo base_url('assets/js/common-scripts.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/gritter/js/jquery.gritter.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/gritter-conf.js') ?>"></script>

<!-- TinyMCE -->
<script src="<?php echo base_url('tinymce/jquery.tinymce.min.js'); ?>"></script>
<script src="<?php echo base_url('tinymce/tinymce.min.js'); ?>"></script>
<?php if ($content == 'new_post'){ ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.tinymce').tinymce({
            theme : "modern",
            menubar : false,
            plugins: [
                "code advlist autolink link image lists charmap preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking fullscreen",
                "table contextmenu directionality emoticons paste textcolor"
            ],

            toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist",
            relative_urls : false,
            image_advtab: true,
            browser_spellcheck : true
        });
    });
    function toggleExcerpt()
    {
        if($('#custom').is(':checked'))
        {
            $("#excerpt-display").show();
        }
        else
        {
            $("#excerpt-display").hide();
        }
    }
</script>
<?php } ?>

</body>
</html>
