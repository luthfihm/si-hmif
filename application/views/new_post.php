<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1><i class="fa fa-pencil-square"></i> New Post</h1>
                <hr/>
            </div>
        </div><! --/row -->
        <form class="form-horizontal style-form">
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" placeholder="Enter Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control tinymce" rows="12" id="content"></textarea>
                    </div>
                </div>
                <h4 class="mb">Excerpt</h4>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="auto" value="auto" checked onchange="toggleExcerpt();"> Auto-generated
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="custom" value="custom" onchange="toggleExcerpt();"> Custom
                </label>
                <div><br/></div>
                <div class="form-group" style="display: none;" id="excerpt-display">
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="3" id="excerpt" placeholder="Enter max 200 character text here"></textarea>
                    </div>
                </div>
                <h4 class="mb">Attachment</h4>
                <a href="<?php echo base_url('filemanager/dialog.php?type=2&field_id=attachment'); ?>" class="btn btn-theme03" id="iframe-btn">Get From File Manager</a>
                <div class="alert alert-info col-sm-6" style="display: none">
                    <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-file"></i> <span>test</span>
                </div>
                <input type="hidden" id="attachment" name="attachment"/>
            </div>
            <div class="col-lg-3">
                <h4 class="mb">Featured Image</h4>
                <a href="#">
                    <img class="img-responsive" src="<?php echo base_url('assets/img/add-image.png'); ?>" alt=""/>
                </a>
                <br/>
                <h4 class="mb">Category</h4>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <br/>
                <h4 class="mb">Time and Location</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                    <input type="text" class="form-control" placeholder="DD/MM/YYYY">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-clock-o"></i></span>
                    <input type="text" class="form-control" placeholder="00:00 - 00:00">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon3"><i class="fa fa-location-arrow"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Location">
                </div>
                <br/>
                <h4 class="mb">Contact Person</h4>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" placeholder="Enter Name">
                        <input type="text" class="form-control" placeholder="Phone / e-mail address">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr/>
                <div class="pull-right">
                    <button class="btn btn-warning" type="button">Save Draft</button>
                    <button class="btn btn-primary" type="button">Publish</button>
                </div>
            </div>
        </div>
        </form>
    </section>
</section>