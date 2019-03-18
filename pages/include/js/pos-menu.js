$(document).ready(function() {
    var table = $('#pos-menu').DataTable({
        "ajax": {"url" : "Inventory_data.json", "dataSrc": ""},
        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent": "<button class='btn btn-success btn-sm fa fa-plus' id='AddToOrder'></button>"
        }],
        responsive: true
    });

    var arr = [];
    var arr1 = [];

    table.on('click', 'button#AddToOrder', function(){
        var closestRow = $(this).closest('tr');
        var data = table.row(closestRow).data();
        var qty = 1;

        var row =  "<tr><td>"+ data[1] + "</td><td>" + qty + "</td><td>" + data[3] + "</td><td>" + data[4] + "</td></tr>";
        $('#pos-table tbody tr:first').before(row);
        arr.push(data[0]);
        arr1.push(data[4]);
    });

    $('#pos-cancel').click(function(){
        if($('#pos-cancel').val() == "Yes"){
            $('#pos-table > tbody > tr > td').remove();
            $('#changeDisplay > h3').remove();
            arr.length = 0;
            arr1.length = 0;
        }
    });

    $('#pos-checkout').click(function(){
        
        var sum = 0;

        for(var x = 0; x < arr1.length; x++){
            sum = parseFloat(sum) + parseFloat(arr1[x]);
        }

        total = sum.toFixed(2);
        $('#display').append("<h3 class='col-md-12 col-md-offset-1'>Total Amount : "+ total +"</h3>");

        $('#AmtPaid').keyup(function(){
            $('#changeDisplay > h3').remove();
            $('#changeDisplay').append("<h3 class='col-md-12 col-md-offset-1'>Change : "+ (parseFloat($('#AmtPaid').val() - total)).toFixed(2) +"</h3>");
        });
    });

    $('#pos-confirm').click(function(){
        
        var newData = [];

        newData[0] = $('#ORStat').val();
        newData[1] = total;

        var orderJSON = JSON.stringify(arr);
        var newDataJSON = JSON.stringify(newData);
        
        
        $.ajax({
            type: "POST",
            url: "include/placeOrder.php",
            data: { orderArr : orderJSON, newDataJ : newDataJSON }
        });
        
        $('#pos-table > tbody > tr > td').remove();
        arr.length = 0;
    });

    $('#posModal').on('hidden.bs.modal', function (e) {
        $('#display > h3').remove();
    });

});