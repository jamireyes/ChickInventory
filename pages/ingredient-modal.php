    <!-- add new modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addNewModal-I">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="fa fa-plus-square"></span> Add New Ingredient</h4>
                </div>
                <form class="form-horizontal" action="include/addNewIngredient.php" method="POST" id="addForm-I" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Ingredient Code</label>
                            <div class="col-md-6"> 
                                <input type="text" class="form-control" id="addNewICode" name="addNewICode" placeholder="Ingredient Code" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Ingredient Name</label>
                            <div class="col-md-6"> 
                                <input type="text" class="form-control" id="addNewIName" name="addNewIName" placeholder="Ingredient Name" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Unit</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="addNewIUnit" name="addNewIUnit" placeholder="Unit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Cost Price</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="addNewICPrice" name="addNewICPrice" placeholder="Cost Price" required>
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
    <div class="modal fade" tabindex="-1" role="dialog" id="editModal-I">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-warning">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit Stock</h4>
                </div>
                <form class="form-horizontal" action="include/editIngredient.php" method="POST" id="editForm-I" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Ingredient Code</label>
                            <div class="col-md-6"> 
                                <input type="text" class="form-control" id="editICode" name="editICode" placeholder="Ingredient Code" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Ingredient Name</label>
                            <div class="col-sm-6"> 
                                <input type="text" class="form-control" id="editIName" name="editIName" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Quantity</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="editIQTY" name="editIQTY" placeholder="Quantity" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Unit</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="editIUnit" name="editIUnit" placeholder="Unit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-md-offset-1 control-label">Cost Price</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="editIPrice" name="editIPrice" placeholder="Cost Price" required>
                            </div>
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="Ingredient_ID" id="editInput-I" hidden="true">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-warning" id="editBtn-I">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /edit modal -->

    <!-- remove modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="removeModal-I">
        <div class="modal-dialog" role="document">
            <form action="include/deleteIngredient.php" method="post">
                <div class="modal-content">
                    <div class="modal-header modal-header-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Remove Stock</h4>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to remove this ?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="Ingredient_ID" id="delInput-I" hidden="true">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <input type="submit" class="btn btn-danger" value="Yes" id="removeBtn-I">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /remove modal -->

    <!-- minus stock modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="minusQTYModal-I">
        <div class="modal-dialog modal-sm" role="document">
            <form action="include/minusQTY-I.php" method="post">
                <div class="modal-content">
                    <div class="modal-header-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><span class="fa fa-minus-square"></span> Update Quantity</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-5 control-label">Quantity</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="minusQTY-I" name="minusQTY-I" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="Ingredient_ID" id="minusIQTY-ID" hidden="true">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-danger" id="minusStockBtn">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /minus stock modal -->

    <!-- add restock modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addQTYModal-I">
        <div class="modal-dialog modal-sm" role="document">
            <form action="include/addQTY-I.php" method="post">
                <div class="modal-content">
                    <div class="modal-header-success">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><span class="fa fa-plus-square"></span> Update Quantity</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-5 control-label">Restock No.</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="addRestockNo-I" name="addRestockNo-I" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-5 control-label">Quantity</label>
                            <div class="col-md-7">
                                <input type="number" class="form-control" id="addQTY-I" name="addQTY-I" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="Ingredient_ID" id="addIQTY-ID" hidden="true">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" id="addRestockBtn">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /add restock modal -->