@extends('main')
@section('content')

<div class="container-fluid mt-4">

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <label for="" class="mr-2 ">Item Code</label>
                            <input type="text" class="form-control form-control-sm"
                                value="{{ str_pad(1, 5, '0', STR_PAD_LEFT) }}">
                        </div>
                        <div class="col-6 col-md-4">
                            <label for="" class="mr-2 ">Price</label>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                        <div class="col-6 col-md-4">
                            <label for="" class="mr-2">Image</label>
                            <input type="file" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
                <hr class="d-block d-sm-block d-md-none">
                <div class="col-12 mt-4">
                    <div class="d-none d-sm-none d-lg-block d-md-block">
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
                    </div>

                    {{-- mobile မှာ ပြမဲ့ခေါင်းစဉ် --}}
                    <div class="d-block d-sm-block d-lg-none d-md-none">
                        <strong>Jewellery Net Weight</strong>
                    </div>

                    <div class="row weight">
                        <div class="col-3 d-none d-sm-none d-lg-block d-md-block">
                            Jewellery Net Weight
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-inline d-sm-inline d-md-none d-lg-none">Gram</div>
                            <input type="text" class="manual-input">
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Kyat</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Pae</div>
                            <input type="text" class="auto-input" disabled>

                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Ywe</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                        <div class="col text-left">
                            {{-- 1234 --}}
                        </div>
                    </div>
                    <hr>

                    {{-- mobile မှာ ပြမဲ့ခေါင်းစဉ် --}}
                    <div class="d-block d-sm-block d-lg-none d-md-none">
                        <strong> Net Gold Weight</strong>
                    </div>
                    <div class="row weight mb-3">
                        <div class="col-3 d-none d-sm-none d-lg-block d-md-block">
                            Net Gold Weight
                        </div>

                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Gram</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Kyat</div>
                            <input type="text" class="manual-input">

                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Pae</div>
                            <input type="text" class="manual-input">

                        </div>
                        <div class="col-4 col-sm-4 col-md col-lg mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Ywe</div>
                            <input type="text" class="manual-input">

                        </div>
                        <div class="col text-right mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Amount</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                    </div>


                    <hr class="d-block d-md-none d-lg-none">

                    {{-- mobile မှာ ပြမဲ့ခေါင်းစဉ် --}}
                    <div class="d-block d-sm-block d-lg-none d-md-none">
                        <strong> Decrease Gold Weight</strong>
                    </div>
                    <div class="row weight mb-3">
                        <div class="col-3 d-none d-sm-none d-lg-block d-md-block">
                            Decrease Gold Weight
                        </div>

                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Gram</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Kyat</div>
                            <input type="text" class="manual-input">

                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Pae</div>
                            <input type="text" class="manual-input">

                        </div>
                        <div class="col-4 col-sm-4 col-md col-lg mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Ywe</div>
                            <input type="text" class="manual-input">

                        </div>
                        <div class="col text-right mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Amount</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                    </div>


                    <hr>

                    {{-- mobile မှာ ပြမဲ့ခေါင်းစဉ် total gold weight --}}
                    <div class="d-block d-sm-block d-lg-none d-md-none">
                        <strong> Total Gold Weight</strong>
                    </div>
                    <div class="row weight mb-3">
                        <div class="col-3 d-none d-sm-none d-lg-block d-md-block">
                            Total Gold Weight
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-inline d-sm-inline d-md-none d-lg-none">Gram</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Kyat</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Pae</div>
                            <input type="text" class="auto-input" disabled>

                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Ywe</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                        <div class="col text-left">
                            {{-- 1234 --}}
                        </div>
                    </div>

                    <hr class="d-block d-md-none d-lg-none">


                    {{-- mobile မှာ ပြမဲ့ခေါင်းစဉ် total gems weight --}}
                    <div class="d-block d-sm-block d-lg-none d-md-none">
                        <strong> Total Gems Weight</strong>
                    </div>
                    <div class="row weight mb-3">
                        <div class="col-3 d-none d-sm-none d-lg-block d-md-block">
                            Total Gems Weight
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-inline d-sm-inline d-md-none d-lg-none">Gram</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Kyat</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Pae</div>
                            <input type="text" class="auto-input" disabled>

                        </div>
                        <div class="col mt-1 mt-sm-1 mt-md-0 mt-lg-0">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Ywe</div>
                            <input type="text" class="auto-input" disabled>
                        </div>
                        <div class="col text-left">
                            {{-- 1234 --}}
                        </div>
                    </div>

                    <hr class="d-block d-md-none d-lg-none">

                    <div class="row weight mb-3">
                        <div class="col-3  d-none d-sm-none d-lg-block d-md-block">
                            Total Gems Pcs
                        </div>
                        <div class="col-6 col-md-2 col-lg-2">
                            <div for="" class="d-block d-sm-block d-md-none d-lg-none">Total Gems Pcs</div>
                            <input type="text" class="auto-input" disabled>
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
                                    <label for="">Gems Stone</label>
                                    <select name="" id="" class="form-control form-control-sm lot-input">
                                        <option value="">--Gems Stone--</option>
                                        <option value="">A Stone</option>
                                        <option value="">B Stone</option>
                                    </select>
                                </div>
                                <div class="form-group mr-3">
                                    <label for="">Pcs</label>
                                    <input type="text" placeholder="Pcs" class="form-control form-control-sm lot-input">
                                </div>
                                <div class="form-group mr-3">
                                    <label for="">Weight </label>
                                    <input type="text" placeholder="Weight"
                                        class="form-control form-control-sm lot-input">
                                </div>
                                <div class="form-group mr-3">
                                    <label for="">Price</label>
                                    <input type="text" placeholder="Price"
                                        class="form-control form-control-sm lot-input">
                                </div>
                                <div class="d-block d-sm-block d-md-none d-lg-none"></div>
                                <div class="form-group mr-3 d-flex align-items-end">
                                    <button class="btn btn-outline-dark btn-sm w-100" style="width: 70px !important"
                                        data-toggle="modal" data-target="#createLot">+ Lot</button>
                                    <button class="btn btn-dark btn-sm">Save</button>
                                </div>
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
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-warning btn-block">Save</button>
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