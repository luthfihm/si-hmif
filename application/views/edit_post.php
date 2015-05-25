<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1><i class="fa fa-pencil-square"></i> New Post</h1>
                <hr/>
            </div>
        </div><! --/row -->
        <form class="form-horizontal style-form" id="post-form">
            <div class="row">
                <div class="col-lg-9">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="Enter Title" id="title" value="<?php echo $post->title; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea class="form-control tinymce" rows="12" id="content"><?php echo $post->content; ?></textarea>
                        </div>
                    </div>
                    <h4 class="mb">Excerpt</h4>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="auto" value="auto" onchange="toggleExcerpt();"> Auto-generated
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="custom" value="custom" checked onchange="toggleExcerpt();"> Custom
                    </label>
                    <div><br/></div>
                    <div class="form-group" id="excerpt-display">
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="3" id="excerpt" placeholder="Enter max 200 character text here"><?php echo $post->excerpt; ?></textarea>
                        </div>
                    </div>
                    <h4 class="mb">Attachment</h4>
                    <a href="<?php echo base_url('filemanager/dialog.php?type=2&field_id=attachment'); ?>" onclick="showAttach();" class="btn btn-theme03 iframe-btn" id="attach_button">Get From File Manager</a>
                    <div class="alert alert-info col-sm-6" style="display: none" id="attach_show">
                        <button type="button" class="close" onclick="hideAttach();"><span aria-hidden="true">&times;</span></button>
                        <i class="fa fa-file"></i> <span id="attach_text"></span>
                    </div>
                    <input type="hidden" id="attachment" name="attachment" value="<?php echo $post->attachment; ?>" />
                </div>
                <div class="col-lg-3">
                    <h4 class="mb">Featured Image</h4>
                    <?php
                        $image = $post->featured_image;
                        if ($image == "")
                            $image = base_url('assets/img/add-image.png');
                        else
                            $image = base_url($image);
                    ?>
                    <input type="hidden" id="featured_image" value="<?php echo $post->featured_image; ?>"/>
                    <a href="<?php echo base_url('filemanager/dialog.php?type=1&field_id=featured_image'); ?>" onclick="showImg();" class="iframe-btn">
                        <img class="img-responsive" src="<?php echo $image; ?>" id="img_show" alt=""/>
                    </a>
                    <br/>
                    <h4 class="mb">Category</h4>
                    <select class="form-control" id="category">
                        <?php foreach ($categories as $category){ ?>
                            <option value="<?php echo $category->id; ?>" <?php if ($category==$post->category) echo 'selected'; ?>><?php echo $category->name; ?></option>
                        <?php } ?>
                    </select>
                    <br/>
                    <h4 class="mb">Time and Location</h4>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" placeholder="Date" id="date" value="<?php echo $post->date; ?>">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2"><i class="fa fa-clock-o"></i></span>
                        <input type="text" class="form-control" placeholder="Start Time" id="start_time" onchange="showEndTime();" value="<?php echo substr($post->start_time,0,5); ?>">
                        <input type="text" class="form-control" placeholder="End Time" id="end_time" value="<?php echo substr($post->end_time,0,5); ?>">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3"><i class="fa fa-location-arrow"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Location" id="location" value="<?php echo $post->location; ?>">
                    </div>
                    <br/>
                    <h4 class="mb">Contact Person</h4>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="Enter Name" id="contact_name" value="<?php echo $post->contact_name; ?>">
                            <input type="text" class="form-control" placeholder="Phone / e-mail address" id="contact" value="<?php echo $post->contact_name; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr/>
                    <div class="pull-right" id="form-button">
                        <button class="btn btn-warning" type="button" onclick="saveDraft();">Save Draft</button>
                        <button class="btn btn-primary" type="button" onclick="publish();">Publish</button>
                    </div>
                    <div class="pull-right" id="loading" style="display: none;">
                        <img src="<?php echo base_url('assets/img/loading.gif'); ?>" alt=""/> <strong>Processing ...</strong>
                    </div>
                </div>
            </div>
        </form>
    </section>
</section>