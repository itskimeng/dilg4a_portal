<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RFQModel;
use App\Models\PurchaseRequestModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

const SUBMITTED_TO_GSS = 4;
class RFQController extends Controller
{
    public function generateRFQNo($cur_year = 2024)
    {
        return response()->json(
            RFQModel::select(RFQModel::raw('COUNT(*)+1 as "rfq_count" '))
                ->whereYear('rfq_date', $cur_year)
                ->get()
        );
    }
    public function fetchSubmittedPurchaseRequest()
    {
        return response()->json(
            PurchaseRequestModel::select(PurchaseRequestModel::raw('id,pr_no'))
                ->where('stat', SUBMITTED_TO_GSS)
                ->get()
        );
    }
    public function post_create_rfq(Request $request)
    {
        $rfq = new RFQModel([
            'id'            => null,
            'rfq_no'         => $request->input('rfq_no'),
            'pr_id'          => $request->input('pr_id'),
            'mode_id' => $request->input('mode_id'),
            'rfq_date'  => $request->input('rfq_date'),
            'particulars'    =>  $request->input('particulars'),
            'updated_by'    =>  $request->input('updated_by'),

        ]);



    
    
        // Save the RFQ record
        $rfq->save();
        // dd($rfq);
    
        // Optionally, you can return a response indicating success along with the SQL query
        return response()->json(['message' => 'RFQ created successfully', 'sql_query' => $rfq], 201);
    }
    
}
