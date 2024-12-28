<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    function getData(){
        $data = Feedback::all();

        return view('feedbacks.feedback')->with('feedbacks', $data);
    }

    function detail(Request $request, $id){
        $data = Feedback::where('id', $id)->first();

        return view('')->with('feedbacks', $data);
    }

    function create(Request $request){
        $request->validate([
            'name' => 'required',
            'feedback' => 'required',
            'rating' => 'required'
        ]);

        $input = $request->only('name', 'feedback', 'rating');

        $create = Feedback::create($input);

        if (!$create) {
            return redirect()->route('feedback')->with('message' , 'Failed Upload Data');    
        }

        return redirect()->route('feedback')->with('message' , 'Success');
    }

    function delete(Request $request, $id){
        $data = Feedback::find($id);

        $delete = $data->delete();

        if (!$delete) {
            return redirect()->route('feedback')->with('message' , 'Failed Delete Data');    
        }

        return redirect()->route('feedback')->with('message' , 'Success');
    }

    function update(Request $request, $id){
        
        $request->validate([
            'feedback' => 'required',
            'name' => 'required'
        ]);
        
        $data = Feedback::find($id);

        $input = $request->only('name', 'feedback');

        if ($request->rating) {
            $input['rating'] = $request->rating;
        }

        $update = $data->update($input);

        if (!$update) {
            return redirect()->route('feedback')->with('message' , 'Failed Delete Data');    
        }

        return redirect()->route('feedback')->with('message' , 'Success');
    }
}
