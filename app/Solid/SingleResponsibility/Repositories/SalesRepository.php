<?php

namespace App\Solid\SingleResponsibility\Repositories;

use App\Models\Sale;
class SalesRepository {

    public function betweeen($start_date, $end_date) {
        return Sale::whereBetween('created_at', [$start_date, $end_date])->sum('charge');
    }

}
