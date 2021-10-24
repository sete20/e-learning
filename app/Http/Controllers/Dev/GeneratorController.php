<?php

namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Nwidart\Modules\Facades\Module;

class GeneratorController extends Controller
{
    public function index(Request $request){
        $vendors = Module::all();
        $setPackages = [];
        $en = Module::allEnabled();
        foreach ($vendors as $item){
            $active = 0;
            $packageInfo= File::get($item->getPath() . '\\' . 'module.json');
            foreach ($en as $enabel){
                if($item->getName() === $enabel->getName()){
                    $active = 1;
                }
            }
            $setPack = [
                "path" => $item->getPath(),
                "name" => $item->getName(),
                "vendor" => "O2 Microsys",
                "info" => json_decode($packageInfo),
                "active" => $active
            ];
            array_push($setPackages, $setPack);
        }
        $data = $this->paginate($setPackages);

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('dev.generator', ['data' => $data]);
    }
    public function active(Request $request){
        $request->validate([
            'active' => 'required',
            'package' => 'required'
        ]);
        $package = Module::find($request->package);
        if(!$request->active){
            $package->disable();
            return response()->json(['message' => __('Your Package Is Disabled')]);
        }
        else {
            $package->enable();
            return response()->json(['message' => __('Your Package Is Enabled')]);
        }
    }
    public function paginate($items, $perPage = 9, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
