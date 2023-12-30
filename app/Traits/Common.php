<?php

namespace App\Traits;

Trait Common {
    public function uploadFile($file_car, $path_car){
        $file_extension = $file_car->getClientOriginalExtension();
        $file_namecar = time() . '.' . $file_extension;
        $file_car->move($path_post, $file_namecar);
        return $file_namecar;
    }
}
//
// Trait Common {
//     public function uploadFile($file_post, $path_post){
//         $file_extension = $file_post->getClientOriginalExtension();
//         $file_namepost = time() . '.' . $file_extension;
//         $file_post->move($path_post, $file_namepost);
//         return $file_namepost;
//     }
// }

