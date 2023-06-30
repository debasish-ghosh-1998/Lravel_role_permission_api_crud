<?php 
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Util {

    function findValidationErrors($request,$validate_array)
    {
        $validator = Validator::make($request->all(),$validate_array);
        
        if($validator->fails())
        {
            return response()->json( ['status'=>'error','error_type'=>'validation_error','error_content'=>$validator->errors()]);
        }
    }

}

?>