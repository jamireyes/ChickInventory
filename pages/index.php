<?php
    include 'include/connection.php';
    include 'include/pos_menu_sql.php';
    include 'InventoryDataToFile.php';
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
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
                    <h1 class="page-header">Point of Sales</h1>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel panel-default">
                <div class="panel-heading"></div>
                    <div class="panel-body" >
                        <div class="container-fluid">
                            <div class="row" style="min-height: 610px; max-height: 610px; overflow-y: scroll;">
                                <table id="pos-table">
                                    <thead>
                                        <tr>
                                            <th class="pos-header">Product Name</th>
                                            <th class="pos-header">QTY</th>
                                            <th class="pos-header">Unit</th>
                                            <th class="pos-header">Price</th>
                                        </tr>
                                    </thead>
                                    <tr></tr>
                                </table>
                            </div>
                            <div class="row">
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#posCancelModal" id="pos-cancel">Cancel</button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#posModal" id="pos-checkout">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu</div>
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="pos-menu">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Unit</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="posModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="fa fa-cart-plus"></span>  Confirm Order</h4>
                </div>
                <form class="form-horizontal" action="#" method="post">
                    <div class="modal-body">
                        <div class="form-group" >
                            <div id="display"></div>
                            <div id="changeDisplay"></div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Status</label>
                            <div class="col-md-6">
                                <select name="ORStat" id="ORStat" class="form-control" required>
                                    <option value="DINE-IN">Dine-In</option>
                                    <option value="TAKE-OUT">Take-Out</option>
                                    <option value="DELIVERY">Delivery</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Amount Paid</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="AmtPaid" name="AmtPaid" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <input type="submit" class="btn btn-success" value="Confirm" id="pos-confirm">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="posCancelModal">
        <div class="modal-dialog" role="document">
            <form action="#" method="post">
                <div class="modal-content">
                    <div class="modal-header modal-header-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><span class="fa fa-exclamation-circle"></span>  Cancel Order</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to the cancel order?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-default" data-dismiss="modal" id="pos-no" value="No">
                        <input type="submit" class="btn btn-danger" id="pos-cancel" value="Yes">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="include/js/pos-menu.js"></script>

</body>

</html>
