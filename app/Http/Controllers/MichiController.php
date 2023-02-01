<?php

namespace App\Http\Controllers;

use App\Models\Michi_Base;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class MichiController extends Controller
{
    public function show($id){

        $tots=Michi_Base::findOrFail($id);
        $new_tots=$tots;
        ;
        $tots->update((array)$tots->nom='Soler');
        return $tots->toJson(JSON_PRETTY_PRINT);
    }
}
