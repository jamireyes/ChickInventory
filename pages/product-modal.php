    <!-- add new modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addNewModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="fa fa-plus-square"></span> Add New Product</h4>
                </div>
                <form class="form-horizontal" action="include/addNewProduct.php" method="POST" id="addForm" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Product Code</label>
                            <div class="col-md-6"> 
                                <input type="text" class="form-control" id="addNewPCode" name="addNewPCode" placeholder="Product Code" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Product Name</label>
                            <div class="col-md-6"> 
                                <input type="text" class="form-control" id="addNewPName" name="addNewPName" placeholder="Product Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Description</label>
                            <div class="col-md-6">
                                <textarea type="text" class="form-control" id="addNewDescription" name="addNewDescription" placeholder="Description" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Category</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="addNewCategory" name="addNewCategory" placeholder="Category" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Unit</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="addNewUnit" name="addNewUnit" placeholder="Unit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Selling Price</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="addNewSPrice" name="addNewSPrice" placeholder="Selling Price" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Add" id="addNewBtn">
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
                    <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit Stock</h4>
                </div>
                <form class="form-horizontal" action="include/editProduct.php" method="POST" id="editForm" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Product Code</label>
                            <div class="col-md-6"> 
                                <input type="text" class="form-control" id="editPCode" name="editPCode" placeholder="Product Code" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Product Name</label>
                            <div class="col-sm-6"> 
                                <input type="text" class="form-control" id="editPName" name="editPName" placeholder="Title" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea type="text" class="form-control" id="editDescription" name="editDescription" placeholder="Description" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Category</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="editCategory" name="editCategory" placeholder="Category" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Unit</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="editUnit" name="editUnit" placeholder="Unit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Selling Price</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="editPrice" name="editPrice" placeholder="Selling Price" required>
                            </div>
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="Product_ID" id="editInput" hidden="true">
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
            <form action="include/deleteProduct.php" method="post">
                <div class="modal-content">
                    <div class="modal-header modal-header-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Remove Stock</h4>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to remove this ?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="Product_ID" id="delInput" hidden="true">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <input type="submit" class="btn btn-danger" value="Yes" id="removeBtn">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /remove modal -->