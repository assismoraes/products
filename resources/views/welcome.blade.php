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
                                <th scope="col">Product name</th>
                                <th scope="col">Quantity in stock</th>
                                <th scope="col">Price per item</th>
                                <th scope="col">Datetime submitted</th>
                                <th scope="col">Total value</th>
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