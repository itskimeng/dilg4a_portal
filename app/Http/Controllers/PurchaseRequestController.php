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
            PurchaseRequestModel::select(PurchaseRequestModel::raw('COUNT(*)+1 as "pr_count" '))
                ->whereYear('date_added', $cur_year)
                ->get()
        );
    }
    public function post_insert_purchaseNo(Request $request)
    {
        $pr_opts = new PurchaseRequestModel([
            'id'    => null,
            'pr_no' => $request->input('pr_no'),
            'updated_at' => null,
            'created_at' => null

        ]);
        $pr_opts->save();
    }

    public function post_update_purchaseRequestDetails(Request $request)
    {
        // Assuming your model is named PurchaseRequestModel
        $purchaseRequest = PurchaseRequestModel::where('pr_no', $request->input('pr_no'))->first();

        // Check if the record with the specified pr_no exists
        if ($purchaseRequest) {
            // Update the fields
            $purchaseRequest->pmo = $request->input('pmo');
            $purchaseRequest->type = $request->input('type');
            $purchaseRequest->pr_date = $request->input('pr_date');
            $purchaseRequest->target_date = $request->input('target_date');
            $purchaseRequest->purpose = $request->input('purpose');

            // Save the changes
            $purchaseRequest->save();

            // You can return a response, if needed
            return response()->json(['message' => 'Purchase request details updated successfully']);
        } else {
            // Handle the case where the record with the specified pr_no doesn't exist
            return response()->json(['error' => 'Purchase request not found'], 404);
        }
    }
    public function getPurchaseRequestDetails(Request $request)
    {
        $pr_no = $request->input('pr_no');

        // Fetch purchase request details based on pr_no
        $purchaseRequest = PurchaseRequestModel::where('pr_no', $pr_no)->first();

        // Check if the purchase request was found
        if ($purchaseRequest) {
            // Return the details as JSON response
            return response()->json([
                'pmo'         => $purchaseRequest->pmo,
                'type'     => $purchaseRequest->type,
                'pr_date'     => $purchaseRequest->pr_date,
                'target_date' => $purchaseRequest->target_date,
                'purpose'     => $purchaseRequest->purpose,
            ]);
        } else {
            // Return an error response if the purchase request was not found
            return response()->json(['error' => 'Purchase request not found'], 404);
        }
    }
}
