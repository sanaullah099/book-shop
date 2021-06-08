<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Publisher;

class bookController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('checkUserMiddleware');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$books = Book::all();
        $books=Book::withTrashed()->with('publishers')->get();
         return view('book', compact('books'));
        // return response()->json(['error'=>false, 'message'=>'Record Retrived Successfully', 'data' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publisher=Publisher::all();
        return view('bookAdd', compact('publisher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $savebook= new Book();

        if($files=$request->file('image')){
                // foreach($request->file('image') as $image)
                // {
                //     $name=$image->getClientOriginalName();
    
                //     $image->move('uploads', $name);
                //     $data[]=$name;
                // }
            $name=$files->getClientOriginalName();
            $files->move('uploads', $name);
        
        $savebook ->image = $name;
        }
        $savebook ->title = $request ->title;
        $savebook ->author = $request ->author;
        $savebook ->price = $request ->price;
        $savebook ->quantitiy = $request ->quantity;
        $savebook ->publisher_id = $request ->publisher;
        $savebook ->description = $request ->description;
        $savebook->save();

        return redirect()->route('books');
        // return Response()->json(['error' =>false, 'message' =>'Record Added Successfully', 'data' =>$savebook]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::find($id);
        $book->delete();
        return back()->with('status', 'Book Soft Deleted Successfully');
    }

    public function restore($id)
    {
        $book=Book::withTrashed()->where('id',$id)->first();
        $book->restore();
        return back()->with('status', 'Book restore  Successfully');
    }
}
