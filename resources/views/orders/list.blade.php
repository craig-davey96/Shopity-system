<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 22/10/2017
 * Time: 15:28
 */
?>
@extends('_layouts._master')
@section('content')

    <div class="pageHeader">
        <h3>Orders</h3>
        <div class="action">
            <a href="{{ url('orders/create') }}" class="btn btn-dark btn-sm" data-toggle="tooltip" data-placement="left" title="Add Order"><i class="fa fa-plus"></i></a>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <table class="table table-hover">

                        <thead>
                            <th>#</th>
                            <th>Order Reference</th>
                            <th>Customer Name</th>
                            <th>Item Count</th>
                            <th>Status</th>
                            <th style="width: 15%;">Date Created</th>
                        </thead>

                        <tbody>

                            @foreach($orders as $key => $value)

                                <tr>
                                    <td> <a href="{{ url('orders/order/'.$value->order_id) }}">#{{ $value->order_id }}</a> </td>
                                    <td>{{ $value->order_reference }}</td>
                                    <td>{{ $value->order_id }}</td>
                                    <td>{{ $value->item_count }}</td>
                                    <td>{{ $value->status }}</td>
                                    <td style="width: 15%;">{{ date('d/m/Y H:i a') }}</td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>

        </div>

    </div>

@endsection

