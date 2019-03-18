
<!-- add new modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="resStatModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><span class="fa fa-plus-square"></span> Add Reservations</h4>
            </div>
            <form class="form-horizontal" action="include/addReservation.php" method="POST" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-1 control-label">Customer Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="CName" id="CName" placeholder="Customer Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-1 control-label">Reserved Date</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" name="reservedDate" id="reservedDate" placeholder="Reserved Date" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-1 control-label">Reserved Time</label>
                        <div class="col-md-6">
                            <input type="time" class="form-control" name="reservedTime" id="reservedTime" placeholder="Reserved Time" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-1 control-label">Table No.</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="tableNo" id="tableNo" min="1" placeholder="Table No." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-1 control-label">No. of Party</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="NoParty" id="NoParty" min="1" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" id="addResbtn" value="Confirm">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /add new modal -->

<!-- edit modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="editResModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-warning">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Edit Reservations</h4>
            </div>
            <form class="form-horizontal" action="include/editReservation.php" method="POST" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-1 control-label">Customer Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="editCName" id="editCName" placeholder="Customer Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-1 control-label">Reserved Date</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" name="editreservedDate" id="editreservedDate" placeholder="Reserved Date" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-1 control-label">Reserved Time</label>
                        <div class="col-md-6">
                            <input type="time" class="form-control" name="editreservedTime" id="editreservedTime" placeholder="Reserved Time" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-1 control-label">Table No.</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="edittableNo" id="edittableNo" min="1" placeholder="Table No." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-md-offset-1 control-label">No. of Party</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="editNoParty" id="editNoParty" min="1" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" name="Res_ID" id="Res_ID" hidden="true">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-warning" id="editResBtn" value="Confirm">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /edit modal -->

<!-- remove modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="delResModal">
    <div class="modal-dialog" role="document">
        <form action="include/deleteReservation.php" method="post">
            <div class="modal-content">
                <div class="modal-header modal-header-danger">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Remove Stock</h4>
                </div>
                <div class="modal-body">
                    <p>Do you really want to remove this ?</p>
                </div>
                <div class="modal-footer">
                    <input type="text" name="Res_ID-del" id="Res_ID-del" hidden="true">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <input type="submit" class="btn btn-danger" value="Yes" id="delbtn-submit">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /remove modal -->
