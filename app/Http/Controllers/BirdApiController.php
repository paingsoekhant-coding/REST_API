<?php

namespace App\Http\Controllers;

use App\Models\Birds;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class BirdApiController extends Controller
{
    private function connectJson()
    {
        $json = File::json(base_path('storage/app/public/birds.json'));
        $result = $json["Tbl_Bird"];
        return $result;
    }

    private function saveJson()
    {
        $jsonData = $this->connectJson();
        foreach ($jsonData as $data) {
            $birdsData = new Birds;
            $birdsData->BirdMyanmarName = $data['BirdMyanmarName'];
            $birdsData->BirdEnglishName = $data['BirdEnglishName'];
            $birdsData->Description = $data['Description'];
            $birdsData->ImagePath = $data['ImagePath'];
            $birdsData->save();
        }
        return response()->json(['success' => true], 200);
    }

    public function read()
    {
        $birds = Birds::all();
        return response()->json($birds, 200);
    }

    public function editBird($id)
    {
        $Id = Birds::where('id', $id)->exists();
        if (!$Id) {
            return response()->json(['error' => 'Bird not found'], 404);
        }
        $bird = Birds::find($id);
        return response()->json($bird, 200);
    }

    public function birdsName()
    {
        $birdsName = Birds::select('BirdMyanmarName', 'BirdEnglishName')->get();
        return response()->json($birdsName, 200);
    }
}

