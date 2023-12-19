<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseRequestModel;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PurchaseRequestController extends Controller
{
    public function generatePurchaseRequestNo($cur_year = 2023)
    {

        return response()->json(
            PurchaseRequestModel::
            select(PurchaseRequestModel::raw('COUNT(*)+1 as "pr_count" '))
                ->whereYear('pr_date', $cur_year)
                ->get());
    }
}
