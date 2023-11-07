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
        // return response()->json(AppItemModel::all());
        $app_item = AppItemModel::
        select(AppItemModel::raw('
            tbl_app.id as `app_id`,
            tbl_app.sn as `sn`,
            tbl_app.item_title as `item_title`,
            tbl_app.unit_id as `unit_id`,
            pmo.pmo_title,
            source_of_funds.source_of_funds_title,
            tbl_app.source_of_funds_id,
            tbl_app.category_id as `category_id`,
            tbl_app.mode as `mode`,
            tbl_app.app_price as `price`,
            tbl_app.app_year as `app_year`,
            item_unit.item_unit_title as  `item_unit_title`,
            item_category.item_category_title as `item_category_title`,
            mode_of_proc.mode_of_proc_title as `mode_of_proc_title`


        '))
        ->join('source_of_funds', 'tbl_app.source_of_funds_id', '=', 'source_of_funds.id')
        ->join('pmo', 'tbl_app.pmo_id', '=', 'pmo.id')
        ->join('item_category', 'tbl_app.category_id', '=', 'item_category.id')
        ->join('mode_of_proc', 'tbl_app.mode', '=', 'mode_of_proc.id')
        ->join('item_unit', 'tbl_app.unit_id', '=', 'item_unit.id');
// Print the SQL query
// $sql = $app_item->toSql();
// dd($sql);

// // Execute the query and return the result
$appItems = $app_item->get();

return response()->json($appItems);
        
    }
    public function post_add_appItem(Request $request)
    {

        AppItemModel::create($request->all());

        return (['message' => 'successfull']);
    }
}
