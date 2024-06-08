<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('categories.kategori-entry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'region' => 'required',
        ]);

        Category::create([
            'category' => $request->category,
            'price' => $request->price,
            'description' => $request->description,
            'region' => $request->region,
        ]);

        return redirect('/category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.kategori-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'region' => 'required',
        ]);

        $category = Category::find($id);

        $category->update([
            'category' => $request->category,
            'price' => $request->price,
            'description' => $request->description,
            'region' => $request->region,
        ]);

        return redirect('/category');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        return view('categories.kategori-hapus', compact('category'));
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category');
    }
    public function cetak()
    {
        $categories = Category::all();
        $pdf = Pdf::loadView('categories.kategori-cetak', compact('categories'));
        return $pdf->download('laporan-kategori.pdf');
    }
}
