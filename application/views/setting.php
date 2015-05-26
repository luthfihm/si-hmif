<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1><i class="fa fa-cog"></i> Setting</h1>
                <hr/>
            </div>
            <div class="col-lg-6">
                <div id="list-category">

                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="mb">Username and Password</h4>
                <form class="form-horizontal" role="form" id="change_form">
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?php echo $_SESSION['username_hmif']; ?>">
                        </div>
                    </div>
                    <div class="form-group" id="group-old-pass">
                        <label for="old_pass" class="col-sm-3 control-label">Old Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="old_pass" class="form-control" id="old_pass" placeholder="Old Password">
                            <span class="glyphicon glyphicon-warning-sign form-control-feedback" id="pass_wrong" style="display:none"></span>
                        </div>
                    </div>
                    <div class="form-group" id="group-new-pass">
                        <label for="password" class="col-sm-3 control-label">New Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
                            <span class="glyphicon glyphicon-warning-sign form-control-feedback" id="new_wrong" style="display:none"></span>
                        </div>
                    </div>
                    <div class="form-group" id="group-pass1">
                        <label for="password1" class="col-sm-3 control-label">Re-type Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password1" class="form-control" id="password1" placeholder="Re-type Password">
                            <span class="glyphicon glyphicon-warning-sign form-control-feedback" id="pass1_wrong" style="display:none"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-2">
                            <button type="submit" class="btn btn-default btn-lg">Change</button>
                        </div>
                        <div class="col-sm-6" id="CallBack">

                        </div>
                    </div>

                </form>
            </div>
        </div><! --/row -->
    </section>
</section>