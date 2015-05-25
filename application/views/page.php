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
    <link href="<?php echo base_url('fancybox/jquery.fancybox-1.3.4.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('jquery-ui/jquery-ui.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('datetimepicker/jquery.timepicker.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('datetimepicker/lib/bootstrap-datepicker.css'); ?>" rel="stylesheet">


    <!-- Include one of jTable styles. -->
    <link href="<?php echo base_url('jtable/themes/metro/darkgray/jtable.min.css'); ?>" rel="stylesheet" type="text/css" />



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
                <a class="<?php if ($content=='post' || $content=='list_post') echo 'active'; ?>" href="<?php echo base_url('admin/post'); ?>">
                    <i class="fa fa-file-text"></i>
                    <span>View Posts</span>
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
<script src="<?php echo base_url('fancybox/jquery.fancybox-1.3.4.pack.js'); ?>"></script>
<script src="<?php echo base_url('jquery-ui/jquery-ui.min.js'); ?>"></script>
<script src="<?php echo base_url('datetimepicker/lib/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('datetimepicker/jquery.timepicker.js'); ?>"></script>
<script src="<?php echo base_url('datetimepicker/dist/jquery.datepair.js'); ?>"></script>


<!--common script for all pages-->
<script src="<?php echo base_url('assets/js/common-scripts.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/gritter/js/jquery.gritter.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/gritter-conf.js') ?>"></script>

<!-- TinyMCE -->
<script src="<?php echo base_url('tinymce/jquery.tinymce.min.js'); ?>"></script>
<script src="<?php echo base_url('tinymce/tinymce.min.js'); ?>"></script>

<!-- Include jTable script file. -->
<script src="<?php echo base_url('jtable/jquery.jtable.js'); ?>" type="text/javascript"></script>

<?php if ($content == 'new_post'){ ?>
<script type="text/javascript">
    var post_type = "";
    $(document).ready(function () {
        $('.tinymce').tinymce({
            theme : "modern",
            menubar : false,
            plugins: [
                "code advlist autolink link image lists charmap preview hr anchor pagebreak",
                "searchreplace visualblocks visualchars insertdatetime nonbreaking fullscreen",
            ],

            toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist",
            relative_urls : false,
            browser_spellcheck : true
        });
        $('.iframe-btn').fancybox({
            'width'		: 900,
            'height'	: 600,
            'type'		: 'iframe',
            'autoScale'    	: false
        });
        $('#date').datepicker({
            'format': 'yyyy-mm-dd',
            'autoclose': true
        });
        $('#start_time').timepicker({ 'timeFormat': 'H:i' });
        $("#post-form").submit(function () {
            if (post_type == "0" || post_type == "1")
            {
                $.ajax({
                    url : "<?php echo base_url('ajax/new_post'); ?>",
                    type : "post",
                    data : {
                        title : $("#title").val(),
                        content : $("#content").val(),
                        excerpt : $("#excerpt").val(),
                        attachment : $("#attachment").val(),
                        featured_image : $("#featured_image").val(),
                        category : $("#category").val(),
                        date : $("#date").val(),
                        start_time : $("#start_time").val(),
                        end_time : $("#end_time").val(),
                        location : $("#location").val(),
                        contact_name : $("#contact_name").val(),
                        contact: $("#contact").val(),
                        published : post_type
                    },
                    success : function (html) {
                        if (html == "true"){
                            window.location = "<?php echo base_url('admin/post'); ?>";
                        }else{
                            alert("Gagal");
                            $("#form-button").show();
                            $("#loading").hide();
                        }
                    },
                    beforeSend : function () {
                        $("#form-button").hide();
                        $("#loading").show();
                    },
                    error : function () {
                        alert("error");
                    }
                });
            }
            post_type = "";
            return false;
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
            $("#excerpt").val("");
        }
    }
    function showAttach()
    {
        var loop = setInterval(function(){
            var dir = $("#attachment").val();
            if (dir != ""){
                var arr_str = dir.split("/");
                $("#attach_text").html(arr_str[arr_str.length-1]);
                $("#attach_show").show();
                $("#attach_button").hide();
                clearInterval(loop);
            }
        },100);
    }
    function hideAttach()
    {
        $("#attach_show").hide();
        $("#attach_button").show();
        $("#attachment").val("");
    }

    function showImg()
    {
        var loop = setInterval(function(){
            var dir = $("#featured_image").val();
            if (dir != ""){
                $("#img_show").attr("src","<?php echo base_url(); ?>"+dir);
                clearInterval(loop);
            }
        },100);
    }
    function showEndTime()
    {
        var start_time = $('#start_time').val();
        if (start_time != "")
        {
            $("#end_time").removeAttr("disabled");
            $("#end_time").timepicker({
                'timeFormat': 'H:i',
                'minTime': start_time,
                'maxTime': '23:30',
                'showDuration': true
            });
        }
    }
    function saveDraft()
    {
        post_type = "0";
        $("#post-form").submit();
    }
    function publish()
    {
        post_type = "1";
        $("#post-form").submit();
    }
</script>
<?php } ?>
<?php if ($content == 'edit_post'){ ?>
    <script type="text/javascript">
        var post_type = "";
        $(document).ready(function () {
            $('.tinymce').tinymce({
                theme : "modern",
                menubar : false,
                plugins: [
                    "code advlist autolink link image lists charmap preview hr anchor pagebreak",
                    "searchreplace visualblocks visualchars insertdatetime nonbreaking fullscreen",
                ],

                toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist",
                relative_urls : false,
                browser_spellcheck : true
            });
            $('.iframe-btn').fancybox({
                'width'		: 900,
                'height'	: 600,
                'type'		: 'iframe',
                'autoScale'    	: false
            });
            $('#date').datepicker({
                'format': 'yyyy-mm-dd',
                'autoclose': true
            });
            $('#start_time').timepicker({ 'timeFormat': 'H:i' });
            $("#post-form").submit(function () {
                if (post_type == "0" || post_type == "1")
                {
                    $.ajax({
                        url : "<?php echo base_url('ajax/edit_post'); ?>",
                        type : "post",
                        data : {
                            id: "<?php echo $post->id; ?>",
                            title : $("#title").val(),
                            content : $("#content").val(),
                            excerpt : $("#excerpt").val(),
                            attachment : $("#attachment").val(),
                            featured_image : $("#featured_image").val(),
                            category : $("#category").val(),
                            date : $("#date").val(),
                            start_time : $("#start_time").val(),
                            end_time : $("#end_time").val(),
                            location : $("#location").val(),
                            contact_name : $("#contact_name").val(),
                            contact: $("#contact").val(),
                            published : post_type
                        },
                        success : function (html) {
                            if (html == "true"){
                                window.location = "<?php echo base_url('admin/post'); ?>";
                            }else{
                                alert("Gagal");
                                $("#form-button").show();
                                $("#loading").hide();
                            }
                        },
                        beforeSend : function () {
                            $("#form-button").hide();
                            $("#loading").show();
                        },
                        error : function () {
                            alert("error");
                        }
                    });
                }
                post_type = "";
                return false;
            });
            <?php if ($post->attachment!=""){ ?>
            showAttach();
            <?php } ?>
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
                $("#excerpt").val("");
            }
        }
        function showAttach()
        {
            var loop = setInterval(function(){
                var dir = $("#attachment").val();
                if (dir != ""){
                    var arr_str = dir.split("/");
                    $("#attach_text").html(arr_str[arr_str.length-1]);
                    $("#attach_show").show();
                    $("#attach_button").hide();
                    clearInterval(loop);
                }
            },100);
        }
        function hideAttach()
        {
            $("#attach_show").hide();
            $("#attach_button").show();
            $("#attachment").val("");
        }

        function showImg()
        {
            var loop = setInterval(function(){
                var dir = $("#featured_image").val();
                if (dir != ""){
                    $("#img_show").attr("src","<?php echo base_url(); ?>"+dir);
                    clearInterval(loop);
                }
            },100);
        }
        function showEndTime()
        {
            var start_time = $('#start_time').val();
            if (start_time != "")
            {
                $("#end_time").removeAttr("disabled");
                $("#end_time").timepicker({
                    'timeFormat': 'H:i',
                    'minTime': start_time,
                    'maxTime': '23:30',
                    'showDuration': true
                });
            }
        }
        function saveDraft()
        {
            post_type = "0";
            $("#post-form").submit();
        }
        function publish()
        {
            post_type = "1";
            $("#post-form").submit();
        }
    </script>
<?php } ?>
<?php if ($content == 'list_post'){ ?>
<script>
    $(document).ready(function () {
        $("#list-post").jtable({
            paging: true,
            pageSize: 10,
            actions: {
                listAction: "<?php echo base_url('ajax/list_post'); ?>",
                deleteAction: "<?php echo base_url('ajax/delete_post'); ?>"
            },
            fields: {
                id: {
                    key: true,
                    list: false
                },
                Title: {
                    title: "Title",
                    width: "68%",
                    display: function (data) {
                        return "<a href='<?php echo base_url() ?>admin/post/"+data.record.id+"' >"+data.record.Title+"</a>";
                    }
                },
                Status: {
                    title: "Status",
                    width: "10%"
                },
                Category: {
                    title: "Category",
                    width: "10%"
                },
                Date: {
                    title: "Date",
                    width: "10%"
                },
                Edit: {
                    listClass: "jtable-command-column",
                    width: "1%",
                    display: function (data) {
                        return "<button class='jtable-command-button jtable-edit-command-button' onclick='window.location=\"<?php echo base_url(); ?>admin/edit_post/"+data.record.id+"\"'></button>";
                    }
                }
            }
        });
        $("#list-post").jtable('load');
    });
    var publish = null;
    function getPublished()
    {
        publish = "1";
        $("#all").css("font-weight","normal");
        $("#published").css("font-weight","bolder");
        $("#draft").css("font-weight","normal");
        filterPost();
    }
    function getDraft()
    {
        publish = "0";
        $("#all").css("font-weight","normal");
        $("#published").css("font-weight","normal");
        $("#draft").css("font-weight","bolder");
        filterPost();
    }
    function getAll()
    {
        publish = null;
        $("#all").css("font-weight","bolder");
        $("#published").css("font-weight","normal");
        $("#draft").css("font-weight","normal");
        filterPost();
    }
    function filterPost()
    {
        $("#list-post").jtable('load', {
            category: $("#category").val(),
            published: publish
        });
    }
</script>
<?php } ?>
</body>
</html>
