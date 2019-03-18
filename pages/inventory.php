<?php
    include 'include/connection.php';
    include 'include/product_sql.php';
    include 'InventoryDataToFile.php';
    include 'include/ingredient_sql.php';
    include 'IngredientDataToFile.php';
    require 'product-modal.php';
    require 'ingredient-modal.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ChickInventory</title>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/custom.css" rel="stylesheet">
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">ChickInventory</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-money"></i> POS</a>
                        </li>
                        <li>
                            <a href="table.php"><i class="fa fa-calendar"></i> Reservations</a>
                        </li>
                        <li>
                            <a href="inventory.php"><i class="fa fa-cube"></i> Inventory</a>
                        </li>
                        <li>
                            <a href="account.php"><i class="fa fa-user-circle"></i> Account</a>
                        </li>
                        <li>
                            <a href="employeeInfo.php"><i class="fa fa-id-badge"></i> Employee</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Inventory</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row panel-body">
                        <button class="Add btn btn-success" data-toggle="modal" data-target="#addNewModal" id="addNewModalBtn">
                        <span class="fa fa-plus-square"></span> Add New Product
                        </button>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Products</div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Unit</th>
                                        <th>Selling Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="row panel-body">
                        <button class="Add btn btn-success" data-toggle="modal" data-target="#addNewModal-I" id="addNewModalBtn-I">
                        <span class="fa fa-plus-square"></span> Add New Ingredient
                        </button>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Ingredients</div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="Ingredient-datatable">
                                <thead>
                                    <tr>
                                        <th>Ingredient ID</th>
                                        <th>Ingredient Code</th>
                                        <th>Ingredient Name</th>
                                        <th>Quantity</th>
                                        <th>Unit</th>
                                        <th>Cost Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        
    ?>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="include/js/inventory_CRUD.js"></script>
    
</body>

</html>
