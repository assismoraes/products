$('#pricePerItem').maskMoney();

$(function() {
    fillTable();
})

$('#btnSaveProd').click(function() {
    $('.form-control').removeClass('is-invalid');
    
    var now = new Date($.now());
    var nowFormatted = now.toLocaleString();

    var product = {
        id: $('#id').val(),
        productName: $('#productName').val(),
        quantityInStock: $('#quantityInStock').val(),
        pricePerItem: $('#pricePerItem').val(),
        dateTime: nowFormatted
    };
    
    $.ajax({
        url: '/',
        type: 'POST',
        data: product,
        success: function(message) {
            $('#productName').val('');
            $('#quantityInStock').val('');
            $('#pricePerItem').val('');
            $('#id').val('');
            fillTable();            
        },
        statusCode: {
            422: function(errors) { 
                var err = errors.responseJSON.errors;
                $.each(err, function(i, e) {
                    $('#'+i).addClass('is-invalid');
                });
            }
        }
    });
    
});


function fillTable() {
    $.ajax({
        url: '/products',
        type: 'GET',
        dataType: 'JSON',
        success: function(products) {   
            $('#tableBody').empty();       
            var total = 0;  
            $.each(products, function(i, p) {
                var t = p.pricePerItem * p.quantityInStock;
                total +=  t;
                $('#tableBody').append('<tr><th class="text-center" scope="row">' + p.productName + '</th><td class="text-center" >' + p.quantityInStock + '</td><td class="text-center" ><i class="fa fa-dollar"></i> ' + p.pricePerItem + '</td><td class="text-center" >' + p.dateTime + '</td><td class="text-center" ><i class="fa fa-dollar"></i> ' + t + '</td><td class="text-center" ><button type="button" onclick=edit("' + p.id +'") class="btn btn-outline-primary btn-sm">Edit</button></td></tr>');
            });
            $('#tableBody').append('<tr><th class="text-center" scope="row">----</th><td class="text-center" >----</td><td class="text-center" >----</td><td class="text-center" >----</td><td class="text-center" ><i class="fa fa-dollar"></i> ' + total + '</td><td class="text-center" >----</td></tr>');
        }
    });
}


function edit(id) {
    $.ajax({
        url: '/products/' + id,
        type: 'GET',
        dataType: 'JSON',
        success: function(p) { 
            $('#productName').val(p.productName);
            $('#quantityInStock').val(p.quantityInStock);
            $('#pricePerItem').val(p.pricePerItem);
            $('#id').val(p.id);
        }
    });
}


