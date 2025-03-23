<?php

namespace App\Repositories;

interface VehicleRepositoryInterface
{
    public function getAllVehicles();
    public function getVehicleById($id);
    public function createVehicle(array $data);
    public function updateVehicle($id, array $data);
    public function deleteVehicle($id);
}
