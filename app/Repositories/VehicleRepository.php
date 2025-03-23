<?php

namespace App\Repositories;

use App\Models\Vehicle;

class VehicleRepository implements VehicleRepositoryInterface
{
    public function getAllVehicles()
    {
        return Vehicle::all();
    }

    public function getVehicleById($id)
    {
        return Vehicle::findOrFail($id);
    }

    public function createVehicle(array $data)
    {
        return Vehicle::create($data);
    }

    public function updateVehicle($id, array $data)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($data);
        return $vehicle;
    }

    public function deleteVehicle($id)
    {
        return Vehicle::destroy($id);
    }
}
