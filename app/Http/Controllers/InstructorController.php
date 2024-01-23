<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function Instructor (){

        $instructores = Instructor::all();
        return view("instructor.index", compact("instructores"));
    }
    
    public function Create(){
        return view('instructor.create');
    }

    public function Store(Request $request){

        $instructor = new Instructor($request->validated());
        $instructor->save();

        return redirect('instructor')->with('success', 'Vacante creado exitosamente');
    }

    public function Edit (Instructor $instructor){
        return view('instructor.edit', compact('instructor'));
    }


    public function Update(Request $request, Instructor $instructor){
        
        $instructor->update($request->all()); 
        return redirect()->route('instructor');
    }

    public function Show(Instructor $instructor){
        return view ('instructor.show', compact('instructor'));
    }

    public function Destroy (Request $request, Instructor $instructor){ 
        $instructor->delete();
        return redirect()->route('instructor');
    }
}
