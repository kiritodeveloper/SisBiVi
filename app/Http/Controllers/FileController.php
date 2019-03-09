<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;



class FileController extends Controller

{

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

       return view('main.vendor.file.create');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
        $path = public_path().'/uploads/';
        $files = $request->file('file');
        foreach($files as $file){
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
        }

    }

}