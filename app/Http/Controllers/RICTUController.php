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
}
