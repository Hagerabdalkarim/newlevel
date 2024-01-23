<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;

class CarController extends Controller
{
    private $columns = ['title','description','published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $cars= Car::get();
        return view('cars', compact('cars'));
    //  return view('cars');
    //table
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories= Category::get();
        return view('addCar',compact('categories'));
    }
    //form
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return dd($request->request);
    //  $cars = new Car();
    //  $cars->title = $request->title;
    //  $cars->description = $request->description;
    //  if(isset($request->published)){
    //     $cars->published = 1;
    //  }else{
    //     $cars->published = 0;
    //  }
    //  $cars->save();
    //  return 'Data added successfully';
    //  return $request;
    //
    // $data = $request->only($this->columns);
    // $data['published'] = isset($request->published);
    // Car::create($data);
    // return redirect('cars');
    $messages = $this->messages();
       $data = $request->validate([
             'title'=>'required|string|max:50',
             'description'=> 'required|string',
            'image'=>'required||mimes:png,jpg,jpeg|max:2048',
            'category_id'=>'required',
            ], $messages);
        $file_namecar = $this->uploadFile($request->image, 'assets/images');    
        $data['image'] = $file_namecar;  
        $data['published'] = isset($request->published);
        Car::create($data);
        return redirect('cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
        $car = Car::findOrFail($id);
      return view('showCar',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        $categories = Category::get();
        return view('updateCar', compact('car','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //  $data = $request->only($this->columns);
    // $data['published'] = isset($request->published);
    // Car::where('id',$id)->update($data);
    // return redirect('cars');
     $messages = $this->messages();
      $data = $request->validate([
             'posttitle'=>'required|string|max:50',
             'author'=>'required|string|max:50',
             'description'=> 'required|string',
             'image'=>'sometimes||mimes:png,jpg,jpeg|max:2048',
             'category_id'=>'required',
            ], $messages);

            if($request->hasFile('image')){
             $file_namecar = $this->uploadFile($request->image, 'assets/images');  
             $data['image'] = $file_namecar; 
             unlink("assets/images/". $request->oldImage);
            }
        $data['published'] = isset($request->published);
        Car::where('id', $id)->update($data);
        
        return redirect('cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    // softdelete -> deleting from blade file or view but find data in database
    public function destroy(string $id)
    {
     Car::where('id',$id)->delete();
     return redirect('cars');
    }
    // view list delete
    public function trashed()
    {
        $cars = Car::onlyTrashed()->get();
     return view('trashedCar',compact('cars'));
    }
    // focedelete-> deleting from Database
     public function forceDelete(string $id)
    {
     Car::where('id',$id)->forceDelete();
     return redirect('cars');
    }
    public function messages(){
        return [
            'title.required'=>'Enter The Title',
            'title.string'=>'Should be string',
             'description.string'=> 'Should be text',
             'image.required'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
        ];
    }
}
