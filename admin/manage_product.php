<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Manage Products</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
            </ol>
        </div>
        <div class="page-content fade-in-up">
            <div class="ibox">
                <div class="ibox-head">
                </div>
                <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Product Name</th>
                            <th>MRP</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <?php
                            include 'manage_product_action.php';
                            $var_data= getAllProducts();
                            foreach ($var_data as $data){
                                echo $data['img'];
                                echo "<tr>";
                                echo "<td>".$data['pid']."</td>";
                                echo "<td>".$data['catname']."</td>";
                                echo "<td>".$data['pname']."</td>";
                                echo "<td>".$data['MRP']."</td>";
                                echo "<td>".$data['price']."</td>";
                                echo "<td>".$data['qty']."</td>";
                                echo "<td><img src='{$data['img']}'></td>";
                                echo "<td>".$data['description']."</td>";
                                echo "<td>".$data['status']."</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
<?php require_once 'inc/footer.php' ?>