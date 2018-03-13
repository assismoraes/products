<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <title>Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('boots4/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
                <div class="row">
                        <div class="col-md-12 order-md-1">
                          <h4 class="mb-3">Products</h4>
                          <form class="needs-validation" novalidate>
                            <input type="hidden" name="id" id="id" >
                            <div class="row">
                              <div class="col-md-6 mb-3">
                                <label for="productName">Product name</label>
                                <input type="text" class="form-control form-control-sm" name="productName" id="productName" placeholder="Product name" value="" required>
                                <div class="invalid-feedback">
                                    Invalid product name
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="quantityInStock">Quantity in stock</label>
                                <input type="number" class="form-control form-control-sm" id="quantityInStock" name="quantityInStock" placeholder="Quantity in stock" value="" required>
                                <div class="invalid-feedback">
                                    Invalid quantity
                                </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="pricePerItem">Price per item</label>
                                <input type="text" class="form-control form-control-sm" id="pricePerItem" name="pricePerItem" placeholder="Price per item" value="" required>
                                <div class="invalid-feedback">
                                    Invalid price
                                </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                          </form>
                          <button class="btn btn-primary btn-sm btn-block" id="btnSaveProd" type="submit">Save product</button>
                        </div>
                      </div>

                      <hr>

                      <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th class="text-center" scope="col">Product name</th>
                                <th class="text-center" scope="col">Quantity in stock</th>
                                <th class="text-center" scope="col">Price per item</th>
                                <th class="text-center" scope="col">Datetime submitted</th>
                                <th class="text-center" scope="col">Total value</th>
                                <th class="text-center" scope="col">Options</th>
                              </tr>
                            </thead>
                            <tbody id="tableBody">
                              
                            </tbody>
                          </table>
                          
                      </div>
        </div>
    </body>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('boots4/dist/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('js/jquery.maskMoney.min.js') }}" ></script>
    <script src="{{ asset('js/main.js') }}" ></script>
    
</html>