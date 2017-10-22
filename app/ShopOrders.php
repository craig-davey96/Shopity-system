<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ShopOrders extends Model
{
    //

    use Sortable;

    protected $fillable = [
        'order_reference',
        'client_reference',
        'item_count',
        'pay_method',
        'status',
        'site_specific_1',
        'site_specific_2',
        'site_specific_3',
        'site_specific_4',
        'site_specific_5',
        'site_specific_6',
        'site_specific_7',
        'site_specific_8',
        'site_specific_9',
        'site_specific_10',
        'ip_address'
    ];

}
