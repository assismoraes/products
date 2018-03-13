$('#pricePerItem').maskMoney();

$(function() {
    fillTable();
})

$('#btnSaveProd').click(function() {
    $('.form-control').removeClass('is-invalid');
    
    var now = new Date($.now());
    var nowFormatted = now.toLocaleString();

    var product = {
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
                $('#tableBody').append('<tr><th scope="row">' + p.productName + '</th><td>' + p.quantityInStock + '</td><td><i class="fa fa-dollar"></i> ' + p.pricePerItem + '</td><td>' + p.dateTime + '</td><td><i class="fa fa-dollar"></i> ' + t + '</td></tr>');
            });
            $('#tableBody').append('<tr><th scope="row">----</th><td>----</td><td>----</td><td>----</td><td><i class="fa fa-dollar"></i> ' + total + '</td></tr>');
        }
    });
}


