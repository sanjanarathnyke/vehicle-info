<?php

namespace App\Http\Controllers;

use App\Repositories\VehicleRepository;
use App\Repositories\VehicleRepositoryInterface;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    protected $vehicleRepository;

    public function __construct(VehicleRepositoryInterface $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }
    public function index()
    {
        $vehicles = $this->vehicleRepository->getAllVehicles();
        return view('vehicles.index',compact('vehicles'));
    }

    public function show($id)
    {
        $vehicle = $this->vehicleRepository->getVehicleById($id);
        return view('vehicles.show',compact('vehicle'));
    }
    public function create()
    {
        return view('vehicles.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'category' => 'required',
            'availability' => 'required|boolean',
        ]);
        $this->vehicleRepository->createVehicle($request->all());
        return redirect()->route('vehicles.index')->with('sucess','sucessfully values stored');
    }
    public function edit($id)
    {
        $vehicle = $this->vehicleRepository->getVehicleById($id);
        return view('vehicles.edit',compact('vehicle'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'category' => 'required',
            'availability' => 'required|boolean',
        ]);
        $this->vehicleRepository->updateVehicle($id,$request->all());
        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully.');
    }

    public function destroy($id)
    {
        $this->vehicleRepository->deleteVehicle($id);
        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
    }


}
