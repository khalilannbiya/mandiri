<?php

namespace App\Http\Controllers;

use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
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
                'logo' => 'required|image|max:2048',
            ]);

            DB::beginTransaction();

            $logo = $request->file('logo');
            if ($request->hasFile('logo')) {
                $path = $logo->storePublicly("logo", "public");

                if ($info) {
                    // Deleting unused files
                    Storage::disk('public')->delete($info->logo);

                    $info->update([
                        'logo' => $path
                    ]);
                } else {
                    WebsiteInfo::create([
                        'logo' => $path
                    ]);
                }
            }

            DB::commit();
            return redirect()->route('dashboard.info.edit');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed to update info: ' . $e->getMessage()]);
        }
    }
}
