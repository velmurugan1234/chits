<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Theme;
use App\Models\Site;
use View;
use Session;
use DB;




class CustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    { 
           
            $theme_model = new Theme;
            /*assigning models to variables*/
            $themes = array();

           

            if($theme_model) {
                  view()->share('theme_model', $theme_model);

                  $theme_arr = $theme_model->where('status', 1)->get();

                  if(count($theme_arr)>0) {

                        foreach ($theme_arr as $theme_key => $theme_value) {            
                                    $themes[$theme_key]['theme_name'] = $theme_value->theme_name.'.'.$theme_value->file_extension;
                                    $themes[$theme_key]['theme_id'] = $theme_value->theme_id;         
                                    $themes[$theme_key]['file_type'] = $theme_value->file_type;  
                                    $themes[$theme_key]['additional_theme_name'] = $theme_value->additional_theme_name;          

                        }      
                  }

                  
            }  
            
          
           
      return view()->share('theme_json_arr', json_encode($themes));
      
    }

    /**
     //require_once __DIR__ . '/../Library/CustomFunctions.php';    
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
           
    }
}
