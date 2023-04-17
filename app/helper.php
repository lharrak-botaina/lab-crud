<?php
if (!function_exists('is_male_localisation')) {
    function is_male_localisation($key) {
        $isMale = filter_var(trans('message.isMale'), FILTER_VALIDATE_BOOLEAN);
        if ($isMale) {
            return 'un';
        } else {
            return 'une';
        }
    }
}
        // if (! function_exists('is_male_localisation')) {
        //     function is_male_localisation($key) {
        //         dd(trans($key));
        //         if (trans($key)){

        //          return  'ungkjdfkgdhfk';
        //         }else{
        //            return 'une';
        //         }


        //     }
        // }
//         @if(app()->getLocale() == "fr")
//     @if ($message->isMale)
//         {{ trans('messages.project_male') }}
//     @endif
// @endif

?>
