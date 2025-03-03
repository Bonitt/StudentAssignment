<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Dealer;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $dealers = Dealer::pluck('name', 'id');
        $search = $request->input('search');
        $dealer_id = $request->input('dealer_id');

        
        $cars = Car::when($search, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('make', 'like', "%{$search}%")
                    ->orWhere('model', 'like', "%{$search}%")
                    ->orWhere('year', 'like', "%{$search}%")
                    ->orWhere('price', 'like', "%{$search}%");
            });
        })->when($dealer_id, function ($query, $dealer_id) {
            return $query->where('dealer_id', $dealer_id);
        })->get();

        return view('cars.index', compact('cars', 'dealers'));
    }


    
    public function create()
    {
        $car = new Car();
        $dealers = Dealer::orderBy('name')->pluck('name', 'id');
        return view('cars.create', compact('car','dealers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer|min:1900|max:2025',
            'colour' => 'required',
            'price' => 'required|numeric|min:0',
            'dealer_id' => 'required|exists:dealers,id'
        ]);

        Car::create($request->all());
        return redirect()->route('cars.index')->with('message', 'Car created successfully');
    }

    public function show($id) {
        $car = Car::find($id);
        return view('cars.show', compact('car')); 
    }

    public function edit($id){
        $car = Car::find($id);
        $dealers = Dealer::orderBy('name')->pluck('name', 'id');
        return view('cars.edit', compact('car', 'dealers'));
    }

    public function update($id, Request $request){
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer|min:1900|max:2025',
            'colour' => 'required',
            'price' => 'required|numeric|min:0',
            'dealer_id' => 'required|exists:dealers,id' 
        ]);
        
        $car = Car::find($id);
        $car->update($request->all());

        return redirect()->route('cars.index')->with('message', 'Car created successfully');

    }

    public function destroy($id){
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('cars.index')->with('message', 'Car deleted successfully');
    }

    // Add this to CarController
    public function createDealer()
    {
        return view('dealers.create');
    }

    public function storeDealer(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        Dealer::create($request->all());

        return redirect()->route('cars.index')->with('message', 'Dealer created successfully');
    }

    public function indexDealers()
    {
        $dealers = Dealer::all();

        return view('dealers.index', compact('dealers'));
    }

    
    public function destroyDealer($id)
    {
        $dealer = Dealer::findOrFail($id);
        $dealer->delete();

        return redirect()->route('dealers.index')->with('message', 'Dealer deleted successfully');
    }




}
