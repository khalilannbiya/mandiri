<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        /**
         *  kumpulan data Product yang memiliki relasi productGallery,
         * diurutkan berdasarkan tanggal pembuatan dari yang terbaru ke yang paling lama,
         * dan dibatasi hanya 10 data saja.
         */
        $products = Product::with(['productGalleries'])->latest()->limit(3)->get();

        return view('pages.frontend.home', compact('products'));
    }

    public function details(Request $request, string $slug)
    {
        $categories = Category::all();
        $product = Product::with(['category', 'productGalleries'])->where('slug', $slug)->firstOrFail();
        $category = $product->category;
        return view('pages.frontend.product-detail', compact('product', 'categories', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function products(Request $request)
    {
        $products = Product::with(['productGalleries']);
        $categories = Category::all();
        if ($request->has('keyword')) {
            $products = $products->where('name', 'like', '%' . $request->keyword . '%');
        }

        $products = $products->paginate(6);
        return view('pages.frontend.ourproducts', compact('products', 'categories'));
    }

    public function showByCategory(string $slug)
    {
        $categories = Category::all();

        // menampilkan product by category
        $category = Category::with('products')->where('slug', $slug)->firstOrFail();
        $products = $category->products()->with('productGalleries')->paginate(6);
        return view('pages.frontend.products-by-category', compact('products', 'category', 'categories'));
    }

    public function portfolios()
    {
        $portfolios = Portfolio::paginate(8);
        return view('pages.frontend.portfolio', compact('portfolios'));
    }
}
