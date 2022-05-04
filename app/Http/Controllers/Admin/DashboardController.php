<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $total = User::select(DB::raw("CAST(COUNT(id) as int) as total "))
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('total');
        $jumlah = Category::select(DB::raw("CAST(COUNT(id) as int) as jumlah "))
            ->GroupBy(DB::raw("slug"))
            ->pluck('jumlah');
        $bulan = User::select(DB::raw("MONTHNAME(created_at) as bulan"))
            ->GroupBy(DB::raw("MONTHNAME(created_at)"))
            ->pluck('bulan');
        $category = Category::select(DB::raw("name as category"))
            ->GroupBy(DB::raw("slug"))
            ->pluck('category');
        // echo json_encode($result);

        // dd($total);
        // $data = User::count(); untuk menghitung jumlah user
        return view('cms.pages.dashboard', compact('total', 'bulan', 'jumlah', 'category'));
    }

    public function grafik_users()
    {
        $result = User::selectRaw('year(created_at) year, monthname(created_at) month, count(*) jumlah')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->get()
            ->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
