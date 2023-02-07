<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brands, $brand;

    public function index()
    {
        return view('brand.index');
    }

    public function create(Request $request)
    {
        Brand::newBrand($request);
        return redirect('/brand/add')->with('message', 'Category add Successfully');
    }
    public function manage()
    {
        $this->brands = Brand::all();
        return view('/brand.manage', ['brands' => $this->brands]);
    }
    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('brand.edit', ['brand' => $this->brand]);
    }

    public function update(Request $request, $id)
    {
        Brand::updateCategory($request, $id);
        return redirect('/brand/manage')->with('message', 'Updated successfully');
    }

    public function delete($id)
    {
        Brand::deleteCategory($id);
        return redirect('/Brand/manage')->with('message', 'Deleted successfully');
    }
}
