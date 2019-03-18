$(document).ready(function() {
    var table = $('#acc_table').DataTable({
        "ajax": {"url" : "Account_data.json", "dataSrc": ""},
        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='Edit btn btn-warning btn-sm fa fa-pencil' id='edit-btn'></button> <button class='Delete btn btn-danger btn-sm fa fa-trash' id='del-btn'></button>"
        }],
        responsive: true
    });          

    table.on('click', 'button#edit-btn', function(){
        var closestRow = $(this).closest('tr');
        var data = table.row(closestRow).data();
        $('#editModal').modal('toggle');
        $('#editAcc_ID').val(data[0]);
        $('#editEmpID').val(data[1]);
        $('#editUName').val(data[2]);
        $('editPwd').val(data[4]);
        $('#editPriv').val(data[3]);
    });

    table.on('click', 'button#del-btn', function(){
        var closestRow = $(this).closest('tr'); 
        var data = table.row(closestRow).data();
        $('#removeModal').modal('toggle');
        $('#delAcc_ID').val(data[0]);
    });

});