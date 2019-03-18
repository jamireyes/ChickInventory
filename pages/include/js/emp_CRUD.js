$(document).ready(function() {
        var table = $('#emp_table').DataTable({
            "ajax": {"url" : "Emp_Table.json", "dataSrc": ""},
            "columnDefs": [{
                "targets": -1,
                "data": null,
                "defaultContent": "<button class='Edit btn btn-warning btn-sm fa fa-pencil' id='edit-btn'></button> <button class='Delete btn btn-danger btn-sm fa fa-trash' id='del-btn'></button>"
            }],
            responsive: true
        });

        
        $('#addBtn').click(function(){
            var data;
            data[0] = $('#addLName').val();
            data[1] = $('#addFName').val();
            data[2] = $('#addMI').val();
            data[3] = $('#addCNum').val();
            data[4] = $('#addPos').val();
            data[5] = $('#addDOB').val();
            data[6] = $('#addGender').val();
            data[7] = $('#addAddress').val();
            $.post("addEmp.php", data);
        });
              

        table.on('click', 'button#edit-btn', function(){
            var closestRow = $(this).closest('tr');
            var data = table.row(closestRow).data();
            $('#editModal').modal('toggle');
            $('#editInput').val(data[0]);
            $('#editLName').val(data[1]);
            $('#editFName').val(data[2]);
            $('#editMI').val(data[3]);
            $('#editCNum').val(data[4]);
            $('#editPos').val(data[5]);
            $('#editDOB').val(data[6]);
            $('#editGender').val(data[7]);
            $('#editAddress').val(data[8]);
        });

        table.on('click', 'button.Delete', function(){
            var closestRow = $(this).closest('tr'); 
            var data = table.row(closestRow).data();
            $('#removeModal').modal('toggle');
            $('#delInput').val(data[0]);
        });

    });