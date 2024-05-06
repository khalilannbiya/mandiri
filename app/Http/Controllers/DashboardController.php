<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $product = Product::count();
        $category = Category::count();
        $user = User::count();
        $products = Product::with('category')->limit(5)->latest()->get();
        $categories = Category::limit(5)->latest()->get();
        $users = User::limit(5)->latest()->get();
        return view('dashboard', compact('product', 'category', 'user', 'products', 'categories', 'users'));
    }

    public function editInfo()
    {
        $info = WebsiteInfo::first();
        return view('pages.dashboard.info.edit', compact('info'));
    }

    public function updateInfo(Request $request)
    {
        try {
            $info = WebsiteInfo::first();
            $request->validate([
                'logo' => 'image|max:2048',
                'favicon' => 'image|max:2048'
            ]);

            DB::beginTransaction();

            if ($request->hasFile('favicon')) {
                $favicon = $request->file('favicon');
                $path = $favicon->storePublicly("logo", "public");

                if ($info) {
                    // Deleting unused files
                    if ($info->favicon) {
                        Storage::disk('public')->delete($info->favicon);
                    }

                    $info->update([
                        'favicon' => $path
                    ]);
                } else {
                    WebsiteInfo::create([
                        'favicon' => $path
                    ]);
                }

                notify()->success('Sukses mengubah info!');
            }

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $path = $logo->storePublicly("logo", "public");

                if ($info) {
                    // Deleting unused files
                    if ($info->logo) {
                        Storage::disk('public')->delete($info->logo);
                    }

                    $info->update([
                        'logo' => $path
                    ]);
                } else {
                    WebsiteInfo::create([
                        'logo' => $path
                    ]);
                }

                notify()->success('Sukses mengubah info!');
            }

            DB::commit();
            return redirect()->route('dashboard.info.edit');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to update info: ' . $e->getMessage()]);
        }
    }
}
