<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;

class ViewController extends Controller
{
    public function view(Request $request){
        $request->validate([
            'table' => 'required'
        ]);

        switch($request->table){
            case 'settings':
                return response()->json([
                   ["label" => __('Key'), "field" => "key", "type"=>"text", "validation"=>"required", "icon"=>"icon-key"],
                   ["label" => __('Group'), "field" => "group", "type"=>"text", "validation"=>"required", "icon"=>"icon-grid"],
                   ["label" => __('Value'), "field" => "value", "type"=>"textarea", "validation"=>"required", "icon"=>"icon-info"],
                ]);
            break;
            case 'admin-users':
                return response()->json([
                    ["label" => trans('admin.admin-user.columns.first_name'), "field" => "first_name", "type"=>"text", "validation"=>"required", "icon"=>"icon-user"],
                    ["label" => trans('admin.admin-user.columns.last_name'), "field" => "last_name", "type"=>"text", "validation"=>"required", "icon"=>"icon-people"],
                    ["label" => trans('admin.admin-user.columns.email'), "field" => "email", "type"=>"email", "validation"=>"required|email", "icon"=>"icon-envelope"],
                    ["label" => trans('admin.admin-user.columns.password'), "field" => "password", "type"=>"password", "validation"=>"min:7", "icon"=>"icon-lock"],
                    ["label" => trans('admin.admin-user.columns.password_repeat'), "field" => "password_confirmation", "type"=>"password", "validation"=>"min:7", "icon"=>"icon-lock"],
                    ["label" => trans('admin.admin-user.columns.activated'), "field" => "activated", "type"=>"switch", "validation"=>"", "icon"=>"icon-check"],
                    ["label" => trans('admin.admin-user.columns.forbidden'), "field" => "forbidden", "type"=>"switch", "validation"=>"", "icon"=>"icon-close"],
                    ["label" => trans('admin.admin-user.columns.language'), "field" => "language", "type"=>"select", "validation"=>"required", "icon"=>"icon-close", "options"=> [
                        ["name"=> __('Arabic'), "id"=>"ar"],
                        ["name"=> __('English'), "id"=>"en"],
                    ], "m"=> false, "o"=>true],
                    ["label" => trans('admin.admin-user.columns.roles'), "field" => "roles", "type"=>"select", "validation"=>"", "icon"=>"icon-close", "options"=> Role::where('guard_name', 'admin')->get(), "m"=> true, "o"=>true],
                ]);
            break;
            case 'generator':
                $getTables = DB::connection()->getDoctrineSchemaManager()->listTableNames();
                return response()->json([
                    ["label" => __('Table Name'), "field" => "table", "type"=>"select", "validation"=>"required", "icon"=>"icon-doc", "options"=>$getTables, "m"=>false, "o"=>false],
                ]);
                break;
            case 'forms':
                return response()->json([
                    ["label" => trans('admin.form.columns.title') , "field" => "title", "type"=>"text", "validation"=>"required", "icon"=>"icon-info"],
                    ["label" => trans('admin.form.columns.is_table') , "field" => "is_table", "type"=>"switch", "validation"=>"required", "icon"=>"icon-check"],
                    ["label" => trans('admin.form.columns.table') , "field" => "table", "type"=>"text", "validation"=>"required", "icon"=>"icon-layers"],
                    ["label" => trans('admin.form.columns.inputs') , "field" => "inputs", "type"=>"max", "validation"=>"required", "icon"=>"icon-list", "options" => [
                        ["label" => __('Label') , "field" => "label", "type"=>"text", "validation"=>"required", "icon"=>"icon-info"],
                        ["label" => __('Field') , "field" => "field", "type"=>"text", "validation"=>"required", "icon"=>"icon-info"],
                        ["label" => __('Type') , "field" => "type", "type"=>"select", "validation"=>"required", "icon"=>"icon-info", "options" => [
                            'text',
                            'number',
                            'select',
                            'switch',
                            'rang',
                            'email',
                            'password',
                            'tel',
                            'textarea',
                            'max'
                        ], "m" => false, "o" => false],
                        ["label" => __('Valid') , "field" => "val", "type"=>"text", "validation"=>"required", "icon"=>"icon-info"],
                        ["label" => __('Icon') , "field" => "icon", "type"=>"text", "validation"=>"required", "icon"=>"icon-info"],
                        ["label" => __('Options') , "field" => "options", "type"=>"text", "validation"=>"required", "icon"=>"icon-info"],
                        ["label" => __('Object') , "field" => "obj", "type"=>"text", "validation"=>"required", "icon"=>"icon-info"],
                        ["label" => __('Multi?') , "field" => "m", "type"=>"switch", "validation"=>"required", "icon"=>"icon-info"],
                        ["label" => __('Object?') , "field" => "o", "type"=>"switch", "validation"=>"required", "icon"=>"icon-info"],
                    ], "obj" => [
                        "label" => "",
                        "field" => "",
                        "type" => "",
                        "val" => "",
                        "icon" => "",
                        "options" => "",
                        "list" => "",
                        "m" => false,
                        "o" => false,
                    ]],
                ]);
            break;
        }
    }
}
