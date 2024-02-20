@extends('main')
@section('content')
    
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card pt-4 pl-3 pr-2">
                    <form action="">
                        <div class="form-group form-inline w-md-50">
                            <label class="mr-2">Price</label>
                            <input type="text" class="form-control form-control-sm" value="12345">
                            <button class="btn btn-warning btn-sm mt-2 mt-md-0 ml-md-2 px-3 py-1 rounded-lg">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="card p-3 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <b>Jewelery Net Weight</b>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Gram</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Kyat</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Pae</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Ywe</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Amount</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-3 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <b>Net Gold Weight</b>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Gram</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Kyat</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Pae</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Ywe</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Amount</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-3 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <b>Decrease Gold Weight</b>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Gram</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Kyat</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Pae</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Ywe</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Amount</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-3 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <b>Total Gold Weight</b>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Gram</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Kyat</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Pae</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Ywe</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Amount</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="card p-3 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <b>Total Gems Weight</b>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Gram</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Kyat</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Pae</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Ywe</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md mb-2 mb-md-0">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Amount</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="0.0" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="card p-3 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <b>Total Gems Pcs</b>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md mb-md-0 mb-2">
                            <div class="row">
                                <div class="col-7 col-md-12 mb-md-2">Gram</div>
                                <div class="col-5 col-md-12">
                                    <input type="number" value="11" class="custom-input" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="card p-3 mb-3">
                    <div class="d-flex justify-content-end mb-3">
                        <button class="btn btn-primary py-1" data-toggle="modal" data-target="#createLot">+ Add Lot</button>
                    </div>
    
    
                    {{-- Lot modal --}}
                    <div class="modal" id="createLot">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
    
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Lot</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
    
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                   
                                    <div class="col-12 col-md-4 lot-card">
                                        <div class="border rounded d-flex flex-column justify-content-between p-3 lot-card-inner" onclick="select(this)">
                                            <div class="d-flex justify-content-between">
                                                <b>ID</b>
                                                <span class="mb-2">1</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Gem</b>
                                                <span class="mb-2">DIA-S</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Pcs</b>
                                                <span class="mb-2">13</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Weight</b>
                                                <span class="mb-2">3.07</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Unit</b>
                                                <span class="mb-2">CT</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Gram</b>
                                                <span class="mb-2">3.07</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Price</b>
                                                <span class="mb-2">550,000.0000</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Unit</b>
                                                <span class="mb-2">RATI</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Amount</b>
                                                <span class="mb-2">7,500,000.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 lot-card">
                                        <div class="border rounded d-flex flex-column justify-content-between p-3 lot-card-inner" onclick="select(this)">
                                            <div class="d-flex justify-content-between">
                                                <b>ID</b>
                                                <span class="mb-2">1</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Gem</b>
                                                <span class="mb-2">DIA-S</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Pcs</b>
                                                <span class="mb-2">13</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Weight</b>
                                                <span class="mb-2">3.07</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Unit</b>
                                                <span class="mb-2">CT</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Gram</b>
                                                <span class="mb-2">3.07</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Price</b>
                                                <span class="mb-2">550,000.0000</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Unit</b>
                                                <span class="mb-2">RATI</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Amount</b>
                                                <span class="mb-2">7,500,000.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 lot-card">
                                        <div class="border rounded d-flex flex-column justify-content-between p-3 lot-card-inner" onclick="select(this)">
                                            <div class="d-flex justify-content-between">
                                                <b>ID</b>
                                                <span class="mb-2">1</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Gem</b>
                                                <span class="mb-2">DIA-S</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Pcs</b>
                                                <span class="mb-2">13</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Weight</b>
                                                <span class="mb-2">3.07</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Unit</b>
                                                <span class="mb-2">CT</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Gram</b>
                                                <span class="mb-2">3.07</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Price</b>
                                                <span class="mb-2">550,000.0000</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Unit</b>
                                                <span class="mb-2">RATI</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Amount</b>
                                                <span class="mb-2">7,500,000.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 lot-card">
                                        <div class="border rounded d-flex flex-column justify-content-between p-3 lot-card-inner" onclick="select(this)">
                                            <div class="d-flex justify-content-between">
                                                <b>ID</b>
                                                <span class="mb-2">1</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Gem</b>
                                                <span class="mb-2">DIA-S</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Pcs</b>
                                                <span class="mb-2">13</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Weight</b>
                                                <span class="mb-2">3.07</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Unit</b>
                                                <span class="mb-2">CT</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Gram</b>
                                                <span class="mb-2">3.07</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Price</b>
                                                <span class="mb-2">550,000.0000</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Unit</b>
                                                <span class="mb-2">RATI</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <b>Amount</b>
                                                <span class="mb-2">7,500,000.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- <div class="table-responsive">
    
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Gem</td>
                                            <td>Pcs</td>
                                            <td>Weight</td>
                                            <td>Unit</td>
                                            <td>Gram</td>
                                            <td>Price</td>
                                            <td>Unit</td>
                                            <td>Amount</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>DIA-S</td>
                                            <td>13</td>
                                            <td>3.07</td>
                                            <td>CT</td>
                                            <td>3.07</td>
                                            <td>5,500,000.00</td>
                                            <td>RATI</td>
                                            <td>7,500,000.00</td>
    
                                        </tr>
    
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>DIA-S</td>
                                            <td>13</td>
                                            <td>3.07</td>
                                            <td>CT</td>
                                            <td>3.07</td>
                                            <td>5,500,000.00</td>
                                            <td>RATI</td>
                                            <td>7,500,000.00</td>
    
                                        </tr>
    
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>DIA-S</td>
                                            <td>13</td>
                                            <td>3.07</td>
                                            <td>CT</td>
                                            <td>3.07</td>
                                            <td>5,500,000.00</td>
                                            <td>RATI</td>
                                            <td>7,500,000.00</td>
    
                                        </tr>
                                    </tbody>
                                </table>
                                </div> --}}
                            </div>
    
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary py-1" data-dismiss="modal">+ Add</button>
                            </div>
    
                            </div>
                        </div>
                    </div>
                    {{-- <table class="table mb-5">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Gem</td>
                                <td>Pcs</td>
                                <td>Weight</td>
                                <td>Unit</td>
                                <td>Gram</td>
                                <td>Price</td>
                                <td>Unit</td>
                                <td>Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>DIA-S</td>
                                <td>13</td>
                                <td>3.07</td>
                                <td>CT</td>
                                <td>3.07</td>
                                <td>5,500,000.00</td>
                                <td>RATI</td>
                                <td>7,500,000.00</td>
    
                            </tr>
                        </tbody>
                    </table> --}}
                    <div class="row">
                        <div class="col-12 col-md-4 mb-2">
                            <div class="border rounded d-flex flex-column justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <b>ID</b>
                                    <span class="mb-2">1</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Gem</b>
                                    <span class="mb-2">DIA-S</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Pcs</b>
                                    <span class="mb-2">13</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Weight</b>
                                    <span class="mb-2">3.07</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Unit</b>
                                    <span class="mb-2">CT</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Gram</b>
                                    <span class="mb-2">3.07</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Price</b>
                                    <span class="mb-2">550,000.0000</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Unit</b>
                                    <span class="mb-2">RATI</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Amount</b>
                                    <span class="mb-2">7,500,000.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-2">
                            <div class="border rounded d-flex flex-column justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <b>ID</b>
                                    <span class="mb-2">1</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Gem</b>
                                    <span class="mb-2">DIA-S</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Pcs</b>
                                    <span class="mb-2">13</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Weight</b>
                                    <span class="mb-2">3.07</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Unit</b>
                                    <span class="mb-2">CT</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Gram</b>
                                    <span class="mb-2">3.07</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Price</b>
                                    <span class="mb-2">550,000.0000</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Unit</b>
                                    <span class="mb-2">RATI</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Amount</b>
                                    <span class="mb-2">7,500,000.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 mb-2">
                            <div class="border rounded d-flex flex-column justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <b>ID</b>
                                    <span class="mb-2">1</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Gem</b>
                                    <span class="mb-2">DIA-S</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Pcs</b>
                                    <span class="mb-2">13</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Weight</b>
                                    <span class="mb-2">3.07</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Unit</b>
                                    <span class="mb-2">CT</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Gram</b>
                                    <span class="mb-2">3.07</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Price</b>
                                    <span class="mb-2">550,000.0000</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Unit</b>
                                    <span class="mb-2">RATI</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <b>Amount</b>
                                    <span class="mb-2">7,500,000.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="pt-3">Item Pricing</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-3">
                            Gold Amount (1+2)
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" disabled value="88,200" class="w-100">
                        </div>
                        <div class="col-6 mt-3">
                            Germs Amount
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" disabled value="143,280" class="w-100">
                        </div>
                        <div class="col-6 mt-3">
                            Other Cost
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" class="w-100">
                        </div>
                        <div class="col-6 mt-3">
                            Workmanship
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" class="w-100">
                        </div>
                        <div class="col-6 mt-3">
                            Fixed Amount
                        </div>
                        <div class="col-6 mt-3">
                            <input type="text" class="w-100">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6 mt-2">
                            <h4>Total Cost</h4>
                        </div>
                        <div class="col-6 mt-2">
                            <input type="text" disabled value="388,200" class="w-100">
                        </div>
                        <div class="col-6 mt-2">
                            Margin <input type="number" style="width: 40px"> %
                        </div>
                        <div class="col-6 mt-2">
                            <input type="text" disabled value="383,280" class="w-100">
                        </div>
                        <div class="col-6 mt-2">
                            Opening Sale Price
                        </div>
                        <div class="col-6 mt-2">
                            <input type="text" class="w-100">
                        </div>
                        <div class="col-6 mt-2">
                            Minimum Sale Price
                        </div>
                        <div class="col-6 mt-2">
                            <input type="text" class="w-100">
                        </div>
                        <div class="col-6 mt-2">
                            Remark
                        </div>
                        <div class="col-6 mt-2">
                            <textarea name="" class="w-100" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const select = el =>{
            let classes = el.classList;
            if(!classes.toString().includes('active')){
                el.classList.add('active');
            }else{
                el.classList.remove('active');

            }

        }
    </script>
@endsection
