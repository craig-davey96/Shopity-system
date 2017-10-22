<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 18/10/2017
 * Time: 23:34
 */
?>

<aside class="leftMenu">

    <div class="user">

    </div>
    
    <ul>

        <li><a href="{{ url('dashboard') }}"><i class="fa fa-compass"></i>  DASHBOARD </a></li>

        <li class="dropdown">
            <a href=""><i class="fa fa-shopping-cart"></i> SALES</a>
            <ul>
                <li><a href="{{ url('orders') }}"><i class="fa fa-angle-double-right"></i> Orders</a></li>
            </ul>
        </li>
        
    </ul>
    
</aside>
