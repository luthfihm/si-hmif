<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1><i class="fa fa-pencil-square"></i> New Post</h1>
                <hr/>
            </div>
        </div><! --/row -->

        <div class="row">
            <div class="col-lg-8">
                <form class="form-horizontal style-form">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea class="form-control tinymce" rows="9" id="content"></textarea>
                        </div>
                    </div>
                    <h4 class="mb">Excerpt</h4>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="auto" value="auto" checked onchange="toggleExcerpt();"> Auto-generated
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="custom" value="custom" onchange="toggleExcerpt();"> Custom
                    </label>
                    <div class="form-group" style="display: none;" id="excerpt-display">
                        <br/>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="3" id="excerpt" placeholder="Enter max 200 character text here"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </section>
</section>