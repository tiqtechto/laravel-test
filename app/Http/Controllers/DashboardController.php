<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puja;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $pujas = Puja::with('category:id,name')->get();
        $allCategories = Category::where('name', '!=', 'All')->get();
        return view('dashboard', compact('pujas', 'allCategories')); 
    }

    public function getData(Request $request){ 
        try{
            $categoryId = $_GET['categ'] != null && !empty($_GET['categ']) ? $_GET['categ'] : '';
            $search = $_GET['search'] != null && !empty($_GET['search']) ? $_GET['search'] : '';
    
            $pujas = Puja::with('category:id,name');
    
            // Filter by category_id if provided
            if (!empty($categoryId)) {
                $pujas->where('category_id', $categoryId);
            }
    
            // Filter by search string if provided
            if (!empty($search)) { 
                $pujas->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($search) . '%'])->get();
            }
            
            $puja = $pujas->get(); 
        } catch(\Exception $ex){
            $pujas = $ex->getLine().' = '.$ex->getMessage();
        }
        

        return response()->json($puja);
    }
}
