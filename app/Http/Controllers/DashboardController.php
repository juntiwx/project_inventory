<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Location;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        //for location muic building
        $location_muic_building = Location::query()
            ->whereRaw('building_name LIKE "building_1" OR
                        building_name LIKE "building_2" OR
                        building_name LIKE "building_3" OR
                        building_name LIKE "hld"')
            ->pluck('id');

        //for location aditayathorn building
        $location_aditayathorn_building = Location::query()
            ->whereRaw('building_name LIKE "aditayathorn"')
            ->pluck('id');

        $computer_with_location = [
            'pc_muic_building' => Item::query()->whereRaw('asset_type = 1 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location', $location_muic_building)->count(),
            'notebooks_muic_building' => Item::query()->whereRaw('asset_type = 2 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location', $location_muic_building)->count(),
            'monitors_muic_building' => Item::query()->whereRaw('asset_type = 4 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location', $location_muic_building)->count(),
            'all_in_one_muic_building' => Item::query()->whereRaw('asset_type = 6 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location', $location_muic_building)->count(),
            'workstations_muic_building' => Item::query()->whereRaw('asset_type = 21 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location', $location_muic_building)->count(),
            'pc_aditayathorn_building' => Item::query()->whereRaw('asset_type = 1 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location', $location_aditayathorn_building)->count(),
            'notebooks_aditayathorn_building' => Item::query()->whereRaw('asset_type = 2 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location', $location_aditayathorn_building)->count(),
            'monitors_aditayathorn_building' => Item::query()->whereRaw('asset_type = 4 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location', $location_aditayathorn_building)->count(),
            'all_in_one_aditayathorn_building' => Item::query()->whereRaw('asset_type = 6 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location', $location_aditayathorn_building)->count(),
            'workstations_aditayathorn_building' => Item::query()->whereRaw('asset_type = 21 AND asset_status LIKE "กำลังใช้งาน"')->whereIn('location', $location_aditayathorn_building)->count(),
        ];

        //for all
        $computers = [
            'all_inventory' => Item::query()->count(),
            'pc' => Item::query()->whereRaw('asset_type = 1 AND asset_status LIKE "กำลังใช้งาน"')->count(),
            'notebooks' => Item::query()->whereRaw('asset_type = 2 AND asset_status LIKE "กำลังใช้งาน"')->count(),
            'monitors' => Item::query()->whereRaw('asset_type = 4 AND asset_status LIKE "กำลังใช้งาน"')->count(),
            'all_in_one' => Item::query()->whereRaw('asset_type = 6 AND asset_status LIKE "กำลังใช้งาน"')->count(),
            'workstations' => Item::query()->whereRaw('asset_type = 21 AND asset_status LIKE "กำลังใช้งาน"')->count(),
        ];

        return view('index', [
            'computer_with_location' => $computer_with_location,
            'computers' => $computers,
        ]);
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
