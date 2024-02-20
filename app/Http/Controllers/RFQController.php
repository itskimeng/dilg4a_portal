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
        // Validate incoming request data
        // $validatedData = $request->validate([
        //     'pr_id' => 'numeric',
        //     'rfq_no' => 'required|string',
        //     'rfq_date' => 'required|date',
        //     'particulars' => 'required|string',
        //     'mode' => 'required|string',
        //     'updated_by' => 'numeric'
        // ]);

        // Create a new RFQ record
        $rfq = new RFQModel();
        $rfq->rfq_no = $request['rfq_no'];
        $rfq->pr_id = $request['pr_id'];
        $rfq->mode_id = $request['mode'];
        $rfq->rfq_date = $request['rfq_date'];
        $rfq->particulars = $request['particulars'];
        $rfq->updated_by = $request['updated_by'];

        // Save the RFQ record
        $rfq->save();

        // Optionally, you can return a response indicating success
        return response()->json(['message' => 'RFQ created successfully'], 201);
    }
}
