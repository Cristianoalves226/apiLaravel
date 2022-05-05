<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandsController extends Controller
{

    public function getAll()
    {
        $bands = $this->getBand();
        return response()->json($bands);
    }

    public  function  getById($id){
        $band = null;
        foreach ( $this->getBand() as $_band){
            if ($_band['id']==$id){
                $band = $_band;
            }
        }
        return $band ? response()->json($band):abort("404");
    }

    public function genderByGender($gender){
        $band = [];

        foreach ( $this->getBand() as $_band){
            if ($_band['gender']==$gender){
                $band [] = $_band;
            }
        }
        return $band ? response()->json($band):abort("404");

    }


    public function store(Request $request){
        $validate = $request->validate([
            'id'=>'numeric',
            'name'=>'required |min:3',

        ]);
        return response()->json($request->all());
    }

    protected function getBand()
    {
        return [
            [
                "id" => 1, "name" => "dream teather", "gender" => "progressive"
            ],
            [
                "id" => 2, "name" => "megadeth", "gender" => "trash metal"
            ],
            [
                "id" => 3, "name" => "dio", "gender" => "heavy metal"
            ],
            [
                "id" => 4, "name" => "metallica ", "gender" => "heav metal"
            ],
            [
                "id" => 5, "name" => "baroes da pisadinha", "gender" => "tecno forro"
            ]


        ];
    }
}
