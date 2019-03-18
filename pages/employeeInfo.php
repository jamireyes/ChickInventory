<?php
    include 'include/connection.php';
    include 'include/emp_sql.php';
    include 'EmpDataToFile.php';
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
                <a class="navbar-brand" href="index.html">ChickInventory</a>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Employee Record</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row panel-body">
                            <button class="Add btn btn-success" data-toggle="modal" data-target="#addModal" id="addModalBtn">
                            <span class="fa fa-plus-square"></span> Add New Employee
                            </button>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="emp_table">
                                    <thead>
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>M.I.</th>
                                            <th>Contact Number</th>
                                            <th>Position</th>
                                            <th>Date of Birth</th>
                                            <th>Gender</th>
                                            <th>Address</th>
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
    </div>

    <!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="fa fa-plus-square"></span> Add New Employee</h4>
                </div>
                <form class="form-horizontal" action="include/addEmp.php" method="POST" id="addForm" autocomplete="off">
                    <div class="modal-body">
                        <div class="messages"></div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Full Name</label>
                            </div>
                            <div class="form-row">    
                                <div class="col-md-5">                                    
                                    <input type="text" class="form-control" id="addLName" name="addLName" placeholder="Last Name">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="addFName" name="addFName" placeholder="First Name">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="addMI" name="addMI" placeholder="M.I.">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Address</label>
                            </div>
                            <div class="col-md-12">
                                <textarea type="text" class="form-control" id="addAddress" name="addAddress" placeholder="Address" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">  
                            <div class="col-md-12">
                                <label>Contact Number</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="addCNum" name="addCNum" placeholder="Contact Number">
                            </div>
                        <div class="form-group">
                        </div>
                            <div class="col-md-12">
                                <label>Date of Birth</label>
                            </div>
                            <div class="col-md-12">
                                <input type="date" class="form-control" id="addDOB" name="addDOB">
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="col-md-3">
                                <label>Gender</label>
                                <select name="addGender" class="form-control">
                                    <option class="" value="M">Male</option>
                                    <option class="" value="F">Female</option>
                                </select>
                            </div>
                        
                            <div class="col-md-9">
                                <label>Position</label>
                                <input type="text" class="form-control" id="addPos" name="addPos" placeholder="Position">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Add" id="addBtn">
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <!-- /add modal -->

    <!-- edit modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-warning">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit Employee</h4>
                </div>
                <form class="form-horizontal" action="include/editEmp.php" method="POST" id="editForm">
                    <div class="modal-body">
                        <input type="text" name="Emp_ID" id="editInput" hidden="true">
                        <div class="edit-messages"></div>
                        <div class="form-group">
                            <div class="form-row col-md-12">
                                <label>Full Name</label>
                            </div>
                            <div class="form-row">    
                                <div class="col-md-5">                                    
                                    <input type="text" class="form-control" id="editLName" name="editLName" placeholder="Last Name">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" id="editFName" name="editFName" placeholder="First Name">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="editMI" name="editMI" placeholder="M.I.">
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Address</label>
                            </div>
                            <div class="col-md-12">
                                <textarea type="text" class="form-control" id="editAddress" name="editAddress" placeholder="Address" required></textarea>
                            </div>
                        </div>   
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Contact Number</label>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="editCNum" name="editCNum" placeholder="Contact Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Date of Birth</label>
                            </div>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="editDOB" name="editDOB">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label>Gender</label>
                                <select name="editGender" class="form-control">
                                    <option class="" value="M">Male</option>
                                    <option class="" value="F">Female</option>
                                </select>
                            </div>
                            <div class="col-md-9">
                                <label>Position</label>
                                <input type="text" class="form-control" id="editPos" name="editPos" placeholder="Position">
                            </div>
                        </div>    
                    </div>
                    <div class="modal-footer editModal">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-warning" id="editBtn">
                    </div>
                </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /edit modal -->

     <!-- remove modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
      <div class="modal-dialog" role="document">
        <form action="include/deleteEmp.php" method="post">
            <div class="modal-content">
              <div class="modal-header modal-header-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Remove Employee</h4>
              </div>
              <div class="modal-body">
                <p>Do you really want to remove this ?</p>
              </div>
              <div class="modal-footer">
                <input type="text" name="Emp_ID" id="delInput" hidden="true">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <input type="submit" class="btn btn-danger" value="Yes" id="removeBtn">
              </div>
            </div>
        </form>
      </div>
    </div>
    <!-- /remove modal -->

    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="include/js/emp_CRUD.js"></script>

</body>

</html>
