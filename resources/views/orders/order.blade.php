@extends('_layouts._master')
@section('content')

    <div class="row">

        <div class="col-lg-3">

            <div class="card">
                <div class="card-header">
                    Order Details
                </div>
                <div class="card-body"></div>
            </div>

        </div>
        <div class="col-lg-3">

            <div class="card">
                <div class="card-header">
                    Customer Details
                </div>
                <div class="card-body"></div>
            </div>

        </div>

        <div class="col-lg-3">

            <div class="card">
                <div class="card-header">
                    Shipping Details
                </div>
                <div class="card-body"></div>
            </div>

        </div>

        <div class="col-lg-3">

            <div class="card">
                <div class="card-header">
                    Options
                </div>
                <div class="card-body"></div>
            </div>

        </div>

    </div>

    <br>

    <div class="row">

        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    Billing Address
                </div>
                <div class="card-body"></div>
            </div>

        </div>
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header">
                    Delivery Address
                </div>
                <div class="card-body"></div>
            </div>

        </div>

    </div>

    <br>

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    Items
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-hover">

                        <thead>
                            <th>SKU</th>
                            <th>Price</th>
                            <th style="width: 10%;">Quantity</th>
                            <th style="width: 20%;">Total</th>
                        </thead>

                        <tbody>

                            <tr>
                                <td colspan="2"></td>
                                <th>Sub Total</th>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <th>Shipping</th>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <th>Total</th>
                                <td></td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    Order History
                </div>
                <div class="card-body">



                </div>
            </div>

        </div>
    </div>

@endsection