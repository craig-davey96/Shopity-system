<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 18/10/2017
 * Time: 23:33
 */
?>
@include('_partials._header')
@include('_partials._topmenu')
@include('_partials._menu')

<div class="rightColumn">

    @yield('content')

</div>

@include('_partials._footer')
