<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;
use App\Models\files;
use Illuminate\Console\Scheduling\Schedule;

class FileController extends Controller
{
        /**

     *

     * @return \Illuminate\Http\Response

     */

    public function moveImage()
    {
        // if(Storage::allFiles('exist/')->get()){
        //     dd('File exist');
        // }
        // else{
        //     dd('no files found');
        // }

        // dd('Copy File dont.');
        foreach (Storage::allFiles('exist/') as $filename) {
            $files=Storage::allFiles('exist/');
            // $movedFile=explode('_',$filename);
            Storage::move($filename, 'move/'.basename($filename));
            $file=new Files;
            $file->name=basename($filename);
            $file->save();

        }
    }
}
