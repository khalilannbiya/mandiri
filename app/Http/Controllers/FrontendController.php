<?php

namespace App\Http\Controllers;

use Exception;
use Midtrans\Snap;
use App\Models\Cart;
use Midtrans\Config;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionItem;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CheckoutRequest;

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
        $products = Product::with(['productGalleries'])->latest()->limit(10)->get();

        return view('pages.frontend.index', compact('products'));
    }

    public function details(Request $request, $slug)
    {
        /**
         * Pertama-tama, kita mendefinisikan variabel $product dan memanggil model Product.
         * Kemudian, kita menggunakan metode with() untuk memuat kaitan relasional productGallery.
         * Kemudian, kita menggunakan metode where() untuk memfilter data Product berdasarkan kolom slug yang sama dengan nilai variabel $slug.
         * Terakhir, kita menggunakan metode firstOrFail() untuk mengambil data pertama yang sesuai dengan kriteria pencarian, atau mengembalikan HTTP error 404 jika tidak ada data yang sesuai.
         */
        $product = Product::with(['productGallery'])->where('slug', $slug)->firstOrFail();

        /**
         * Pertama-tama, kita mendefinisikan variabel $recommendations dan memanggil model Product.
         * Kemudian, kita menggunakan metode with() untuk memuat kaitan relasional productGallery.
         * Kemudian, kita menggunakan metode whereNot() untuk memfilter data Product dengan menghilangkan data yang memiliki kolom slug yang sama dengan nilai variabel $slug.
         * Metode inRandomOrder() digunakan untuk mengurutkan data secara acak sebelum diambil, dan metode limit() digunakan untuk membatasi jumlah data yang diambil, dalam hal ini sebanyak 4 data saja. Terakhir, kita menggunakan metode get() untuk mengeksekusi query dan mengambil data.
         */
        $recommendations = Product::with(['productGallery'])->whereNot('slug', $slug)->inRandomOrder()->limit(4)->get();

        return view('pages.frontend.details', compact('product', 'recommendations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function catalog(Product $product)
    {
        $products = Product::with(['productGallery'])->latest()->get();
        return view('pages.frontend.catalog', compact('products'));
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
}
