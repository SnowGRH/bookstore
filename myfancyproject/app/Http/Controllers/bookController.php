<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function index(){
        return book::all();
    }
    public function show($id){
        return book::find($id);
    }
    public function destroy($id){
        return book::find($id);
    }
    public function store(Request $request){
        $book = new book();
        $book->author = $request->author;
        $book->title = $request->title;
        $book->pieces = $request->pieces;
        $book->save();
    }
    public function update(Request $request,$id){
        $book = book::find($id);
        $book->author = $request->author;
        $book->title = $request->title;
        $book->pieces = $request->pieces;
        $book->save();
    }
    //view függvények
    public function listView(){
        $books = book::all();
        return view('book.list',['books'=>$books]);
    }
    public function editView($id){
        $book =book::find($id);
        return view('book.edit',['book'=>$book]);
    }
    public function newView(){
        return view('book.new');
    }

}
