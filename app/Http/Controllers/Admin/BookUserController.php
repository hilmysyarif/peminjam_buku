<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\BookUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class BookUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book_users = BookUser::where('status', 2)->orderBy('created_at', 'DESC')->get();
        $books = Book::all();
        $users = User::all();

        return view('admin.book-borrowers.index', compact('book_users', 'books', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Check periode date with book_id and status
         */
        $borrowed_book = Book::where('id', $request->book_id)->where('status', 1)->get();

        if(count($borrowed_book) > 0)
        {
            return response()->json(['data' => ['message' => 'Maaf, Buku ini tidak dapat dipinjam.']], 400);
        }else{
            $book_user = new BookUser();
            $book_user->user_id = $request->user_id;
            $book_user->book_id = $request->book_id;
            $book_user->date_start = $request->date_start;
            $book_user->date_end = $request->date_end;
            $book_user->notes = $request->notes;
            $book_user->status = 2;
            $book_user->save();

            $borrowed_book = Book::where('id', $request->book_id)->first();
            $borrowed_book->status = 1;
            $borrowed_book->save();
    
            return response()->json(['data' => $book_user]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book_user = BookUser::find($id);

        return view('admin.book-borrowers.show', compact('book_user'));
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
        //
    }
}
