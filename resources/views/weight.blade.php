@extends('main')
@section('content')
    
    <div class="container-fluid mt-4">
        {{-- <div class="row">
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
        </div> --}}
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    {{-- <div class="col-3">
                        <div class="div">
                            <div class="field">
                                <p>Metal</p>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">12 Pae</option>
                                        <option value="">14 Pae</option>
                                        <option value="">16 Pae</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <p>Price</p>

                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="field">
                                <p>Category</p>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">Shwe Mahar</option>
                                        <option value="">A Nay mhar</option>
                                        <option value="">Bay Dar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <p>Product Type</p>


                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">Bracelets</option>
                                        <option value="">Ring</option>
                                        <option value="">Earing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <p>Color</p>


                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">Red</option>
                                        <option value="">Green</option>
                                        <option value="">Blue</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <p>Brand</p>

                                

                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">24K</option>
                                        <option value="">32K</option>
                                        <option value="">48K</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <p>Size</p>


                                <div class="form-group">
                                    <input type="text" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-12 mb-2">
                        <div class="form-group form-inline">
                            <label for="" class="mr-2 font-weight-600">Price</label>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row weight mb-4">
                            <div class="col col-md-3">
                                Weight
                            </div>
                            <div class="col col-md">
                                Gram
                            </div>
                            <div class="col col-md">
                                Kyat
                            </div>
                            <div class="col col-md">
                                Pae
                            </div>
                            <div class="col col-md">
                                Ywe
                            </div>
                            <div class="col-2 text-right">
                                Amount
                            </div>
                        </div>
                        <div class="row weight">
                            <div class="col-3">
                                Jewellery Net Weight
                            </div>
                            <div class="col">
                                <input type="text" class="manual-input">
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                                
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                                
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">        
                            </div>
                            <div class="col-2 text-right">
                                {{-- 1234 --}}
                            </div>
                        </div>
                        <hr>
                        <div class="row weight mb-3">
                            <div class="col-3">
                                Net Gold Weight
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                            </div>
                            <div class="col">
                                <input type="text" class="manual-input">
                                
                            </div>
                            <div class="col">
                                <input type="text" class="manual-input">
                                
                            </div>
                            <div class="col">
                                <input type="text" class="manual-input">
                                
                            </div>
                            <div class="col-2 text-right">
                                <input type="text" class="auto-input">
                            </div>
                        </div>

                        <div class="row weight mb-3">
                            <div class="col-3">
                                Decrease Gold Weight
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                            </div>
                            <div class="col">
                                <input type="text" class="manual-input">
                                
                            </div>
                            <div class="col">
                                <input type="text" class="manual-input">
                                
                            </div>
                            <div class="col">
                                <input type="text" class="manual-input">
                                
                            </div>
                            <div class="col-2 text-right">
                                <input type="text" class="auto-input">
                            </div>
                        </div>
                        <hr>
                        <div class="row weight mb-3">
                            <div class="col-3">
                                Total Gold Weight
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                                
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                                
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                                
                            </div>
                            <div class="col-2 text-right">
                                {{-- <input type="text" class="auto-input"> --}}
                            </div>
                        </div>

                        <div class="row weight mb-3">
                            <div class="col-3">
                                Total Gems Weight
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                                
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                                
                            </div>
                            <div class="col">
                                <input type="text" class="auto-input">
                                
                            </div>
                            <div class="col-2 text-right">
                                {{-- <input type="text" class="auto-input"> --}}
                            </div>
                        </div>

                        <div class="row weight mb-3">
                            <div class="col-3">
                                Total Gems Pcs
                            </div>
                            <div class="col-2">
                                <input type="text" class="auto-input">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" p-3 mb-3 lot">
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-12 col-md-10 d-flex flex-wrap">
                                    <div class="form-group mr-3">
                                        <select name="" id="" class="form-control form-control-sm lot-input">
                                            <option value="">--Gems Stone--</option>
                                            <option value="">A Stone</option>
                                            <option value="">B Stone</option>
                                        </select>
                                    </div>
                                    <div class="form-group mr-3">
                                        <input type="text" placeholder="Pcs" class="form-control form-control-sm lot-input">
                                    </div>
                                    <div class="form-group mr-3">
                                        <input type="text" placeholder="Weight" class="form-control form-control-sm lot-input">
                                    </div>
                                    <div class="form-group mr-3">
                                        <input type="text" placeholder="Price" class="form-control form-control-sm lot-input">
                                    </div>
                                    <div class="form-group mr-3">
                                        <button class="btn btn-dark btn-sm w-100" style="width: 70px !important" data-toggle="modal" data-target="#createLot">+ Lot</button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2 d-flex justify-content-end align-items-center">
                                    <button class="btn btn-sm btn-primary" style="transform: translateY(-10px)">Save</button>
                                </div>
                            </div>
    
                        </div>
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
                                {{-- <div class="row">
                                   
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

                                </div> --}}
                                <div class="table-responsive">
    
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
                                </div>
                            </div>
    
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary py-1" data-dismiss="modal">+ Add</button>
                            </div>
    
                            </div>
                        </div>
                    </div>
                    <table class="table mb-5" id="example" class="display" style="width:100%">
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
                    </table>
                    {{-- <div class="row">
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
                    </div> --}}
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 summary">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="pt-3">Item Pricing</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-2">
                            Gold Amount (1+2)
                        </div>
                        <div class="col-6 mt-2">
                            <input type="text" disabled value="88,200" class="w-100">
                        </div>
                        <div class="col-6 mt-2">
                            Germs Amount
                        </div>
                        <div class="col-6 mt-2">
                            <input type="text" disabled value="143,280" class="w-100">
                        </div>
                        <div class="col-6 mt-2">
                            Other Cost
                        </div>
                        <div class="col-6 mt-2">
                            <input type="text" class="w-100">
                        </div>
                        <div class="col-6 mt-2">
                            Workmanship
                        </div>
                        <div class="col-6 mt-2">
                            <input type="text" class="w-100">
                        </div>
                        <div class="col-6 mt-2">
                            Fixed Amount
                        </div>
                        <div class="col-6 mt-2">
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

@section('scripts')
<script>
    $('#example').DataTable( {searching: false, paging: false, info: false, responsive: true} );

</script>
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
