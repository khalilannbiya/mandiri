<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PortfolioRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\PortfolioUpdateRequest;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Portfolio::all();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="flex">
                        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 ml-3 rounded shadow-lg" href="' . route('dashboard.portfolio.edit', $item->id) . '">
                            Edit
                        </a>
                        <form action="' . route('dashboard.portfolio.destroy', $item->id) . '" method="post" class="inline-block">
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold ml-3 py-1 px-3 rounded shadow-lg">Delete</button>
                        ' . method_field('delete') . csrf_field() . '
                        </form>
                    </div>
                    ';
                })
                ->editColumn('img', function ($item) {
                    return '
                        <img style="max-width : 150px" src="' . Storage::url($item->img) . '" alt="Image">
                    ';
                })
                ->rawColumns(['action', 'img'])
                ->make();
        }
        return view('pages.dashboard.portfolio.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortfolioRequest $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $data['slug'] = Str::slug($request->name . '-' . $request->client);

            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $path = $img->storePublicly("gallery", "public");

                $data['img'] = $path;
            }

            Portfolio::create($data);

            DB::commit();

            Alert::toast('Sukses menambah portfolio!', 'success');
            return redirect()->route('dashboard.portfolio.index');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to create portfolio: ' . $e->getMessage()]);
        }
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
    public function edit(Portfolio $portfolio)
    {
        return view('pages.dashboard.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PortfolioUpdateRequest $request, Portfolio $portfolio)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();
            $data['slug'] = Str::slug($request->name . '-' . $request->client);

            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $path = $img->storePublicly("gallery", "public");

                $data['img'] = $path;
            }

            $portfolio->update($data);

            DB::commit();

            Alert::toast('Sukses mengubah portfolio!', 'success');
            return redirect()->route('dashboard.portfolio.index');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to update portfolio: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        Alert::toast('Sukses menghapus portfolio!', 'success');
        return redirect()->route('dashboard.portfolio.index');
    }
}
