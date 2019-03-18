$(document).ready(function() {

    // Product

    var table = $('#dataTables-example').DataTable({
        "ajax": {"url" : "Inventory_data.json", "dataSrc": ""},
        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='btn btn-warning btn-sm fa fa-pencil' id='edit-btn'></button> <button class='btn btn-danger btn-sm fa fa-trash' id='del-btn'></button>"
        }],
        responsive: true
    });
    
    $('#addNewBtn').click(function(){
        var data;
        data[0] = $('#addNewPCode').val();
        data[1] = $('#addNewPName').val();
        data[2] = $('#addNewDescription').val();
        data[3] = $('#addNewCategory').val();
        data[4] = $('#addNewUnit').val();
        data[5] = $('#addNewSPrice').val();
        $.post("addNewProduct.php", data);
    });

    table.on('click', 'button#edit-btn', function(){
        var closestRow = $(this).closest('tr');
        var data = table.row(closestRow).data();
        $('#editModal').modal('toggle');
        $('#editInput').val(data[0]);
        $('#editPCode').val(data[1]);
        $('#editPName').val(data[2]);
        $('#editDescription').val(data[3]);
        $('#editCategory').val(data[4]);
        $('#editUnit').val(data[5]);
        $('#editPrice').val(data[6]);
    });

    table.on('click', 'button#del-btn', function(){
        var closestRow = $(this).closest('tr'); 
        var data = table.row(closestRow).data();
        $('#removeModal').modal('toggle');
        $('#delInput').val(data[0]);
    });

    // Ingredient

    var ingredient_table = $('#Ingredient-datatable').DataTable({
        "ajax": {"url" : "Ingredient_data.json", "dataSrc": ""},
        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='btn btn-primary btn-sm fa fa-minus' data-toggle='modal' data-target='#minusQTYModal-I' id='minusQTY-I'></button> <button class='btn btn-primary btn-sm fa fa-plus' data-toggle='modal' data-target='#addQTYModal-I' id='addQTY-I'></button> <button class='btn btn-warning btn-sm fa fa-pencil' data-toggle='modal' data-target='#editModal-I' id='edit-btn-I'></button> <button class='btn btn-danger btn-sm fa fa-trash' data-toggle='modal' data-target='#removeModal-I' id='del-btn-I'></button>"
        }],
        responsive: true
    });
    
    $('#addNewBtn-I').click(function(){
        var newData;
        newData[0] = $('#addNewICode').val();
        newData[1] = $('#addNewIName').val();
        newData[2] = $('#addNewIQTY').val();
        newData[3] = $('#addNewIUnit').val();
        newData[4] = $('#addNewICPrice').val();
        $.post("addNewIngredient.php", newData);
    });

    ingredient_table.on('click', 'button#edit-btn-I', function(){
        var closestRow = $(this).closest('tr');
        var data = ingredient_table.row(closestRow).data();
        $('#editInput-I').val(data[0]);
        $('#editICode').val(data[1]);
        $('#editIName').val(data[2]);
        $('#editIQTY').val(data[3]);
        $('#editIUnit').val(data[4]);
        $('#editIPrice').val(data[5]);
    });

    ingredient_table.on('click', 'button#del-btn-I', function(){
        var closestRow = $(this).closest('tr'); 
        var data = ingredient_table.row(closestRow).data();
        $('#delInput-I').val(data[0]);
    });

    ingredient_table.on('click', 'button#minusQTY-I', function(){
        var closestRow = $(this).closest('tr');
        var data = ingredient_table.row(closestRow).data();
        $('#minusIQTY-ID').val(data[0]);
        data[1] = $('#minusQTY-I').val();
    });

    ingredient_table.on('click', 'button#addQTY-I', function(){
        var closestRow = $(this).closest('tr');
        var data = ingredient_table.row(closestRow).data();
        $('#addIQTY-ID').val(data[0]);
        data[1] = $('#addRestockNo-I').val();
        data[2] = $('#addIQTY-ID').val();
    });

});