<?php
//>
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function create(Request $request){
       $pet = new Pet();
       $pet->name = $request->name;
       $pet->owner = $request->owner;
       $pet->save();
    }

    public function select(){
       return Pet::all();
    }

    public function update(Request $request){
       $pet = Pet::findOrFail($request->id);
       $pet->name = $request->name;
       $pet->owner = $request->owner;
       $pet->save();
    }

    public function delete(Request $request){
        $pet = Pet::findOrFail($request->id);
        $pet->delete();
    }
}
