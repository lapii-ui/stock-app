<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WarehouseRequest;
use Illuminate\Support\Facades\Session;
use App\Warehouses;

class PageController extends Controller
{
    public function dashboard(){
        return view('dashboard.index');
    }
    public function warehouse(){
        $warehouse = Warehouses::all();
        return view('warehouse.index', ['warehouse' => $warehouse]);
    }
    public function proceed(Request $request){
        $request->validate([
            'warehouse_name'        =>  'required|string|max:190',
            'address'               =>  'required|string'
        ]);
        
        Warehouses::create($request->all());
        toastr()->success('Create warehouse successful!');
        return redirect('/warehouse');
    }
    public function updateWarehouse(Request $request, $id){
        $warehouse = Warehouses::FindOrFail($id)->update($request->all());
        // toastr()->success('Update warehouse successful!');
        $message = $warehouse ? 'Update warehouse successful!' : 'Oh, you have something wrong!';
        return response()->json(['success' => $warehouse, 'message' => $message]);
    }

    // public function updateUser(Request $request, $id) {
    //     $user = User::findOrFail($id);
    //     return $user;
    // }
}
