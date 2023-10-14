<?php

namespace App\Http\Controllers;
use App\Models\ComputerModel2;

use Illuminate\Http\Request;

class Computer extends Controller
{
  private static function getData(){
    return[
      ["ID"=> "1", "Name" => "LG","Origin" => "Koria"],
      ["ID" => "2", "Name" => "Sony Vaio" , "Origin" => "USA"],
      ["ID" => "3" , "Name" => "Mohamad","Origin" => "MSI"]
    ];
  }
  public function index()
  {
    return view("computers.index",[
      "copmuters" => ComputerModel2::all()
    ]);
  }
  public function create()
  {
    return view("computers.create");
  }
  public function store(Request $request){
    $request->validate([
      'name' => 'required',
      'origin' => 'required',
      'price' => ['required','integer']
    ]);
    $computer = new ComputerModel2();
    $computer->name =strip_tags($request->input("name"));
    $computer->origin = strip_tags($request->input("origin"));
    $computer->price = strip_tags($request->input("price"));
    $computer->save();
    return redirect()->route("computers.index");
  }
  public function show($computera){
    $index = ComputerModel2::find($computera);
    if($index === false){
      abort(404);
    }
    return view("computers.show",[
      "computer" => $index
    ]);
  }
  public function edit($id)
  {
    $computer = ComputerModel2::find($id);
    if($computer === false){
      return abort(404);
    }
    return view("computers.edit",["computer" => $computer]);
  }
  public function update(Request $request, $computer){
    $request->validate([
      'name' => 'required',
      'origin' => 'required',
      'price' => ['required','integer']
    ]);
    $toupdate = ComputerModel2::find($computer);
    $toupdate->name = $request->name;
    $toupdate->origin = $request->origin;
    $toupdate->price = $request->price;
    $toupdate->save();
    return redirect()->route("computers.index");
  }
  public function destroy($id)
  {
    $computer = ComputerModel2::find($id);
    if($computer === false){
      return abort(404);
    }
    $computer->delete();
    return redirect()->route("computers.index");
  }
}
