<?php

// Sidebar Fun

use Illuminate\Support\Facades\File;

function active_class($path, $active = 'active') {
  return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

function is_active_route($path) {
  return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

function show_class($path) {
  return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

// Settings fun

function setting($key){
    $setting = \App\Models\Setting::where('key', $key)->first();
    if($setting){
        return $setting->value;
    }
    else {
        return false;
    }
}

function setting_show($key, $label, $type, $option=[]){
    $setting = \App\Models\Setting::where('key', $key)->first();
    if($setting){
        switch($type){
            case "text":
            case "number":
            case "password":
            case "email":
            case "rang":
                return '<div class="form-group"><label for="'.$key.'">'.$label.'</label><input class="form-control" type="'.$type.'" name="'.$key.'" id="'.$key.'" value="'.$setting->value.'"  placeholder="'.$label.'" required></div>';
                break;
            case "textarea":
                return '<div class="form-group"><label for="'.$key.'">'.$label.'</label><textarea class="form-control" name="'.$key.'" id="'.$key.'"  placeholder="'.$label.'" required>'.$setting->value.'</textarea></div>';
                break;
            case "file":
                return '<div class="custom-file"><input class="custom-file-input" type="'.$type.'" name="'.$key.'" id="'.$key.'"  required><label class="custom-file-label"  for="'.$key.'">'.$label.'</label></div>';
                break;
            case "image":
                return '<img class="m-2" style="border: 1px solid #b9c8de" src="'.url($setting->value).'" width="10%" alt="'.$label.'"><div class="custom-file mb-3"><input class="custom-file-input" type="file" name="'.$key.'" id="'.$key.'" ><label class="custom-file-label"  for="'.$key.'">'.$label.'</label></div>';
                break;
            case "select":
                $setOptions = '';
                foreach ($option as $item){
                    if($item->id == $setting->value){
                        $setOptions .= '<option value="'.$item->id.'" selected>'.$item->name.'</option>';
                    }
                    else {
                        $setOptions .= '<option value="'.$item->id.'">'.$item->name.'</option>';
                    }

                }
                return '<div class="form-group"><label for="'.$key.'">'.$label.'</label><select class="form-control" name="'.$key.'" id="'.$key.'" required>'.$setOptions.'</select></div>';
                break;

        }
    }
    else {
        return false;
    }

}

function setting_update($key, $value){
    $setting = Setting::where('key', $key)->first();
    if($setting){
        $setting->value = $value;
        $setting->save();
        return true;
    }
    else {
        return false;
    }
}

//JSON Fun

function json_get($path){
    $file = \Illuminate\Support\Facades\File::get($path);
    $array = json_decode($file);
    return $array;
}

function json_set($path, $array){
    $toJson = json_encode($array);
    \Illuminate\Support\Facades\File::put($path, $toJson);
    return true;
}

// Menu & Content Fun

function menu($name){
    $menu = \App\Models\Menu::where('area', $name)->first();
    if($menu){
        $menu->items = json_decode($menu->items, true);

        $startMenu = '';

        foreach ($menu->items as $item){
            if(true) {
                if ($item['child']) {
                    $startMenu .= '<li class="nav-item nav-dropdown">';
                    $startMenu .= '<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon ' . $item['icon'] . '"></i> ' . __($item['title']) . '</a>';
                    if ($item['child']) {

                        $item['child'] = collect($item['child'])->sortBy('order')->toArray();
                        $startMenu .= '<ul class="nav-dropdown-items">';
                        foreach ($item['child'] as $parent) {
                            if(auth('admin')->user()->can($parent['permission'])) {
                                $startMenu .= '<li class="nav-item"><a class="nav-link" href="' . $parent['url'] . '"><i class="nav-icon ' . $parent['icon'] . '"></i> ' . __($parent['title']) . '</a></li>';
                            }
                        }
                        $startMenu .= '</ul></li>';

                    }
                } else {
                    if(true) {
                        $startMenu .= '<li class="nav-item"><a class="nav-link" href="' . $item['url'] . '"><i class="nav-icon ' . $item['icon'] . '"></i>' . __($item['title']) . '</a></li>';
                    }
                }
            }

        }
        return $startMenu;
    }
    else {
        return false;
    }
}

function social(){
    $social = \App\Models\Social::all();
    return $social;
}

function dollar(){
    return "<small>".setting('admin.$')."</small>";
}

function image($item){
    if(!empty($item)){
        return [
            "file" => [
                "size" => File::size(public_path($item)),
                "name" => File::name(public_path($item)),
                "type" => File::type(public_path($item)),
            ],
            "url" => url($item)
        ];
    }
    else {
        return null;
    }
}

function imageUrl($image){
    if(!$image){
        return 'images/placeholder.webp';
    }
    else {
        return $image;
    }
}

function isTeacher(){
    if(auth('teacher')->user()){
        return  true;
    }
    else {
        return  false;
    }
}

function isStudent(){
    if(auth('users')->user()){
        return  true;
    }
    else {
        return  false;
    }
}
