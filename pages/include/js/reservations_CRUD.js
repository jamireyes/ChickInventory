$(document).ready(function() {

    var table = $('#resTable').DataTable({
        "ajax": {"url" : "reservation_data.json", "dataSrc": ""},
        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='Edit btn btn-warning btn-sm fa fa-pencil' data-toggle='modal' data-target='#editResModal' id='edit-btn'></button> <button class='Delete btn btn-danger btn-sm fa fa-trash' id='del-btn'></button>"
        }],
        responsive: true 
    });

    $('#addResbtn').click(function(){
        var data;
        data[0] = $('#CName').val();
        data[1] = $('#reservedDate').val();
        data[2] = $('#reservedTime').val();
        data[3] = $('#tableNo').val();
        data[4] = $('#NoParty').val();
        $.post("addReservation.php", data);
    });

    table.on('click', 'button#edit-btn', function(){
        var closestRow = $(this).closest('tr');
        var data = table.row(closestRow).data();
        $('#Res_ID').val(data[0]);
        $('#edittableNo').val(data[1]);
        $('#editCName').val(data[2]);
        $('editNoParty').val(data[3]);
        $('#editreservedDate').val(data[4]);
        $('#editreservedTime').val(data[5]);
    });

    table.on('click', 'button#del-btn', function(){
        var closestRow = $(this).closest('tr'); 
        var data = table.row(closestRow).data();
        $('#delResModal').modal('toggle');
        $('#Res_ID-del').val(data[0]); 
    });

});