<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1><i class="fa fa-file-text"></i> View Posts</h1>
                <hr/>
                <h4><a href="#" onclick="getAll();" id="all" style="font-weight: bolder;">All (<?php echo $num_all_post; ?>)</a> | <a href="#" onclick="getPublished();" id="published">Published (<?php echo $num_published; ?>)</a> | <a href="#" onclick="getDraft();" id="draft">Draft (<?php echo $num_draft; ?>)</a></h4>
            </div>
            <div class="col-lg-12">
                <form class="form-inline">
                    <div class="form-group">
                        <select class="form-control" id="category">
                            <option value="">Select Category</option>
                            <?php foreach ($categories as $category) { ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="button" class="btn btn-default" onclick="filterPost();">Filter</button>
                </form>
            </div>
            <div class="col-lg-12" id="list-post">

            </div>
        </div><! --/row -->
    </section>
</section>