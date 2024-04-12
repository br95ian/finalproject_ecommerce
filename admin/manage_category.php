<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>
    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Manage Categories</h1>
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
                            <th>Name</th>
                            <th>Status</th>
                            <th colspan="3" class="text-center">Operations</th>
                        </tr>
                        <tr>
                            <?php
                            require_once 'manage_category_action.php';
                            $var_data= getAllCategories();
                            foreach ($var_data as $data){
                                echo "<tr>";
                                echo "<td>".$data['id']."</td>";
                                echo "<td>".$data['catname']."</td>";
                                echo "<td>".$data['status']."</td>";
                                echo "<td><a href='edit_category.php?id=".$data['id']."'>Edit</a></td>";
                                echo "<td><a href='delete_category.php?id=".$data['id']."'>Delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
<?php require_once 'inc/footer.php' ?>