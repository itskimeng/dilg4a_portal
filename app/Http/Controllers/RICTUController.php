<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RICTUModel;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RICTUController extends Controller
{
    public function ict_data()
    {
        return response()->json(RICTUModel::select('')
            ->limit(1000)
            ->get());
    }
    public function generateICTControlNo()
    {
        return response()->json(
            RICTUModel::select(RICTUModel::raw('COUNT(*)+1 as "ict_no_count" '))
                ->whereYear('request_date', 2024)
                ->get()
        );
    }

    public function fetch_ict_request(Request $request)
    {
        // return response()->json(AppItemModel::all());
        $page = $request->query('page');
        $itemsPerPage = $request->query('itemsPerPage', 500);

        $ict = RICTUModel::select(RICTUModel::raw('
        MAX(tbl_technicalassistance.control_no) as `control_no`,
        MAX(users.name) as `requested_by`,
        MAX(tbl_technicalassistance.request_date) as `requested_date`,
        MAX(tbl_technicalassistance.remarks) as `remarks`,
        MAX(pmo.pmo_title) as `office`,
        MAX(irc.title) as `type_of_request`
        '))
            ->join('users', 'users.id', '=', 'tbl_technicalassistance.request_by')
            ->join('tbl_ict_request_category as irc', 'irc.request_id', '=', 'tbl_technicalassistance.request_type_category_id')
            ->join('pmo', 'pmo.id', '=', 'tbl_technicalassistance.office_id')
            ->groupBy('tbl_technicalassistance.id');


        $ict_opts = $ict->paginate($itemsPerPage, ['*'], 'page', $page);


        return response()->json($ict_opts);
    }

    public function post_create_ict_request(Request $request)
    {
        $ict_opts = new RICTUModel([
            'control_no'            => $request->input('control_no'),
            'request_by'            => $request->input('requested_by'),
            'request_date'          => $request->input('requested_date'),
            'office_id'             => $request->input('pmo'),
            'unit_id'               => $request->input('email'),
            'equipment_type'        => $request->input('equipment_sn'),
            'brand'                 => $request->input('brand'),
            'property_no'           => $request->input('property_no'),
            'serial_no'             => $request->input('requipment_sn'),
            'request_type_category_id' => $request->input('type_of_request'),
            'request_type_id'       => $request->input('subRequest'),
            'status_id'             => 0,
            'remarks'               => $request->input('remarks'),
        ]);
        $ict_opts->save();
    }
}
