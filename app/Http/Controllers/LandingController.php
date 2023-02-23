<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LandingService;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    protected $landingService;

    public function __construct(LandingService $landingService)
    {
        $this->landingService = $landingService;
    }
    public function index()
    {
        $stock_datas = $this->landingService->getStockData();
        $schedule_datas = $this->landingService->getScheduleData();
        // dd($schedule_datas);
        return view('landing', [
            'stocks' => (object)$stock_datas,
            'schedules' => (object)$schedule_datas
        ]);
    }

    public function indexudd()
    {
        $stock_datas = $this->landingService->getStockData();
        $schedule_datas = $this->landingService->getScheduleData();
        // dd($schedule_datas);
        return view('unitdonordarah', [
            'stocks' => (object)$stock_datas,
            'schedules' => (object)$schedule_datas
        ]);
    }

    public function test()
    {
        $products = DB::table('master_kantong')->get();
        dd($products);
    }
}
