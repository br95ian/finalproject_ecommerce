<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>
<div class="content-wrapper">

    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Add Category</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
            </div>
        </div>
        <div class="ibox-body">
            <form class="form-horizontal" id="form-sample-1" method="post" action="add_category_action.php" novalidate="novalidate">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="category">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button class="btn btn-info" type="submit" name="cat_btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once 'inc/footer.php';
?>