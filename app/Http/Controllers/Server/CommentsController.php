<?php

namespace App\Http\Controllers\Server;

use App\Models\Users;
use App\Models\Comments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listComments = Comments::all()->where('is_deleted', 1);

        return view('server.comments.index', compact('listComments'));
    }

    public function trash()
    {
        $listComments = Comments::all()->where('is_deleted', 0);

        return view('server.comments.trash', compact('listComments'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        if (empty($keyword)) {
            $listComments = Comments::all();
        } else {
            $user_id = Users::where('fullname', 'like', "%$keyword%")->pluck('id')->toArray();

            if (!empty($user_id)) {
                $listComments = Comments::whereIn('users_id', $user_id)->get();
            } else {
                $listComments = [];
            }
        }

        return view('server.comments.search', compact('listComments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comments = Comments::find($id);

        $comments->is_deleted = 0;
        $comments->save();

        return redirect()->route('comments.index')->with('alert', 'Xóa đánh giá thành công');
    }
}
