<?php

namespace App\Http\Controllers\Admin;

use App\Models\Statistical;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class HighchartController extends Controller
{
    public function income(Request $request)
    {
        $userData = Statistical::select(\DB::raw("CAST(sum(total) as int) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->where('type', 0)
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
        return view('admin.statis.income', [
            'title' => 'Thống kê tiền vốn',
            'userData' => $userData
        ]);
    }

    public function stock()
    {
        $userData = User::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');
          
        return view('admin.statis.income', [
            'title' => 'Thống kê hàng tồn kho',
            'userData' => $userData
        ]);
    }


    public function bestSell($month)
    {
        $userData = User::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');
          
        return view('admin.statis.income', [
            'title' => 'Thống kê hàng bán chạy theo tháng',
            'userData' => $userData
        ]);
    }
}
