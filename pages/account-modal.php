    <!-- add new modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addNewModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="fa fa-plus-square"></span> Add New Account</h4>
                </div>
                <form class="form-horizontal" action="include/addNewAccount.php" method="POST" id="addForm" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Employee ID</label>
                            <div class="col-md-6"> 
                                <input type="text" class="form-control" id="addEmpID" name="addEmpID" placeholder="Employee ID" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Username</label>
                            <div class="col-md-6"> 
                                <input type="text" class="form-control" id="addUName" name="addUName" placeholder="Username" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="addPwd" name="addPwd" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Privilege</label>
                            <div class="col-md-6">
                                <select name="addPriv" id="addPriv" class="form-control" required>
                                    <option class="" value="ADMIN">Admin</option>
                                    <option class="" value="USER">User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Add" id="addNewBtn-I">
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <!-- /add new modal -->

    <!-- edit modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-warning">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit Account</h4>
                </div>
                <form class="form-horizontal" action="include/editAccount.php" method="POST" id="editForm" autocomplete="off">
                    <div class="modal-body">
                    <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Employee ID</label>
                            <div class="col-md-6"> 
                                <input type="text" class="form-control" id="editEmpID" name="editEmpID" placeholder="Employee ID" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Username</label>
                            <div class="col-md-6"> 
                                <input type="text" class="form-control" id="editUName" name="editUName" placeholder="Username" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="editPwd" name="editPwd" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Privilege</label>
                            <div class="col-md-6">
                                <select name="editPriv" id="editPriv" class="form-control" required>
                                    <option class="" value="ADMIN">Admin</option>
                                    <option class="" value="USER">User</option>
                                </select>
                            </div>
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="editAcc_ID" id="editAcc_ID" hidden="true">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-warning" id="editBtn">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /edit modal -->

    <!-- remove modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
        <div class="modal-dialog" role="document">
            <form action="include/deleteAccount.php" method="post">
                <div class="modal-content">
                    <div class="modal-header modal-header-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Remove Stock</h4>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to remove this ?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="delAcc_ID" id="delAcc_ID" hidden="true">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <input type="submit" class="btn btn-danger" value="Yes" id="removeBtn-I">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /remove modal -->