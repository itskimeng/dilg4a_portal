<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppItemModel;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppItemController extends Controller
{
    public function index()
    {

    }
    public function fetchAppData()
    {
        return response()->json(AppItemModel::all());
        // return response()->json(AppItemModel::select('id', 'sn', 'code', 'new_entry', 'merge_code', 'item_title', 'unit_id', 'source_of_funds_id', 'category_id', 'pmo_id', 'quantity', 'mode', 'price', 'remarks', 'app_year')
        //     ->orderBy('id', 'desc')
        //     ->get());
    }
}
