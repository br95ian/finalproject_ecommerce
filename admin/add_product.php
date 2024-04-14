<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>
<div class="content-wrapper">

    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Add Product</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
            </div>
        </div>
        <div class="ibox-body">
            <form class="form-horizontal" id="form-sample-1" method="POST" action="add_product_action.php" enctype="multipart/form-data" novalidate="novalidate">
                <div class="form-group column">
                    <label class="col-sm-2 col-form-label">Product</label>
                    <div class="col-sm-10">
                        <select name="cat_id" id="cat_id" class="form-control">
                            <option value="">Select Category</option>
                                <?php
                                include "function/function.php";
                                categories($con);
                                ?>
                        </select>
                    </div><br>

                    <div class="form-group column">
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="product_name" placeholder="Product Name" >
                        </div>
                    </div>

                    <div class="form-group column">
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="mrp" placeholder="MRP" >
                        </div>
                    </div>

                    <div class="form-group column">
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="price" placeholder="Price" >
                        </div>
                    </div>

                    <div class="form-group column">
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="qty" placeholder="Qty" >
                        </div>
                    </div>

                    <div class="form-group column">
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="img" placeholder="Image" >
                        </div>    
                    </div>

                    <div class="form-group column">
                        <div class="col-sm-10">
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Product Description" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button class="btn btn-info" type="submit" name="p_btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once 'inc/footer.php';
?>