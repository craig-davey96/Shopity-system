<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 19/10/2017
 * Time: 19:03
 */
?>
@extends('_layouts._master')
@section('content')

    <div class="row">

        <div class="col-lg-4">

            <div class="card card-statistics">
                <div class="card-body">
                    Total Amount Made
                    <h2 class="text-success">&pound;100,000</h2>
                </div>
                <div class="card-footer bg-success text-white">
                    <i class="fa fa-2x fa-money"></i>
                </div>
            </div>

        </div>

        <div class="col-lg-4">

            <div class="card card-statistics">
                <div class="card-body">
                    Total Amount Of Orders
                    <h2 class="text-primary">100</h2>
                </div>
                <div class="card-footer bg-primary text-white">
                    <i class="fa fa-2x fa-shopping-cart"></i>
                </div>
            </div>

        </div>

        <div class="col-lg-4">

            <div class="card card-statistics">
                <div class="card-body">
                    New Clients
                    <h2 class="text-warning"></h2>
                </div>
                <div class="card-footer bg-warning text-white">
                    <i class="fa fa-2x fa-users"></i>
                </div>
            </div>

        </div>

    </div>

    <br>

    <div class="row">

        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    Revenue By Month
                </div>
                <div class="card-body">

                </div>
            </div>

        </div>

    </div>

@endsection
