<?php
    $date = strtotime($post->date);
    $hari = ["Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"];
    $bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    $w = date("N",$date);
    $d = date("d",$date);
    $n = date("n",$date);
    $Y = date("Y",$date);
    $tanggal = $hari[$w].", ".$d." ".$bulan[$n-1]." ".$Y;
    $category = $this->category->get($post->category);
    $str = explode("/",$post->attachment);
    $file = $str[sizeof($str)-1];
?>
<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1><a href="<?php echo base_url('admin/post'); ?>"><i class="fa fa-arrow-left"></i></a> View Posts</h1>
                <hr/>
            </div>
        </div><! --/row -->
        <div class="row">
            <div class="col-lg-12">
                <h2><?php echo $post->title; ?></h2>
                <h4><b><?php echo $category->name; ?></b></h4>
            </div>
            <div class="col-lg-8">
                <img class="img-responsive" src="<?php echo base_url($post->featured_image); ?>" alt=""/>
                <?php echo $post->content; ?><br/>
                <h4 class="mb">Excerpt</h4>
                <p><?php echo $post->excerpt; ?></p>
            </div>
            <div class="col-lg-4">
                <h4 class="mb">Time and Location</h4>
                <table>
                    <tr>
                        <td width="55px"><img src="<?php echo base_url('assets/img/Calendar.png'); ?>" alt="" height="40px"/></td>
                        <td><strong></b><?php echo $tanggal; ?><br/><?php echo substr($post->start_time,0,5)." - ".substr($post->end_time,0,5); ?></strong></td>
                    </tr>
                    <tr>
                        <td width="55px"><img src="<?php echo base_url('assets/img/Pin.png'); ?>" alt="" height="40px"/></td>
                        <td><strong><?php echo $post->location; ?></strong></td>
                    </tr>
                </table>
                <br/>
                <h4 class="mb">Attachment</h4>
                <table>
                    <tr>
                        <td width="55px"><img src="<?php echo base_url('assets/img/Download.png'); ?>" alt="" height="40px"/></td>
                        <td><strong><a href="<?php echo base_url($post->attachment); ?>"><?php echo $file; ?></a></strong></td>
                    </tr>
                </table>
                <br/>
                <h4 class="mb">Contact Person</h4>
                <table>
                    <tr>
                        <td width="55px"><img src="<?php echo base_url('assets/img/Contact.png'); ?>" alt="" height="40px"/></td>
                        <td><strong></b><?php echo $post->contact_name; ?><br/><?php echo $post->contact; ?></strong></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</section>