<?php

namespace App\Http\Controllers\Server;

use App\Models\SlideShows;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listSlides = SlideShows::all()->where('is_deleted', 1);

        return view('server.slide_shows.index', compact('listSlides'));
    }

    public function trash()
    {
        $listSlides = SlideShows::all()->where('is_deleted', 0);

        return view('server.slide_shows.trash', compact('listSlides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $slideshows = SlideShows::all();

        return view('server.slide_shows.create', compact('slideshows'));
    }

    /**
     * Store a newly created resource in storage.
     */

    // public function store(Request $req)
    // {
    //     if ($req->hasFile('images')) {

    //         $images = $req->file('images');

    //         $slideshows = new Slideshows();

    //         $imageName = $images->getClientOriginalName();
    //         $path = $images->storeAs('images/products/', $imageName);

    //         $slideshows->url = $path;
    //         $slideshows->is_deleted = 1;

    //         $slideshows->save();
    //     }

    //     return view('server.slide_shows.search', compact('slideshows'));
    // }

    public function store(Request $req)
    {
        $slideshows = new SlideShows();

        if ($req->hasFile('images')) {

            $images = $req->file('images');
            $imageName = $images->getClientOriginalName();

            $path = $images->storeAs('images/products', $imageName);
            $slideshows->url = $path;
        }

        $slideshows->is_deleted = 1;
        $slideshows->save();

        return redirect()->route('slideshows.index')->with('alert', 'Thêm slideshow thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(SlideShows $slideShows)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slideshows = SlideShows::find($id);

        $is_deleted = [
            (object) ['id' => 0, 'name' => 'Đã xóa'],
            (object) ['id' => 1, 'name' => 'Đang sử dụng']
        ];

        return view('server.slide_shows.update', compact('slideshows', 'is_deleted'));
    }

    /**
     * Update the specified resource in storage.
     */

    // public function update(Request $req, $id)
    // {
    //     $slideshows = SlideShows::find($id);

    //     if (empty($slideshows)) {
    //         return redirect()->route('slide_shows.index')->with('alert', 'Slideshow không tồn tại!!');
    //     }

    //     if ($req->hasFile('images')) {

    //         $old_image = 'images/products/' . $slideshows->images;
    //         // $old_image = 'images/admins/' . $admins->image;
    //         // $old_image = public_path('images/admins/' . $admins->image);

    //         if (File::exists($old_image)) {
    //             File::exists($old_image);
    //         }

    //         $file = $req->file('images');
    //         $extention = $file->getClientOriginalExtension();

    //         $filename = time() . '.' . $extention;
    //         $file->move('images/products/', $filename);
    //         // $path = $file->store('admin_images', 'public');

    //         $slideshows->imaes = $filename;
    //     }

    //     return redirect()->route('slideshows.index')->with('alert', 'Cập nhật slideshow thành công');
    // }
    public function update(Request $req, $id)
    {
        $slideshows = SlideShows::find($id);

        if (empty($slideshows)) {
            return redirect()->route('slideshows.index')->with('alert', 'Slideshow không tồn tại!!');
        }

        if ($req->hasFile('images')) {

            $file = $req->file('images');
            $imageName = $file->getClientOriginalName();

            $path = $file->storeAs('images/products', $imageName);
            $slideshows->url = $path;
        }

        $slideshows->is_deleted = $req->is_deleted;
        $slideshows->save();

        return redirect()->route('slideshows.index')->with('alert', 'Cập nhật slideshow thành công');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slide = SlideShows::find($id);

        if (!empty($slide)) {

            $slide->is_deleted = 0;
            $slide->save();

            return redirect()->route('slideshows.index')->with('alert', 'Xóa thành công slideshow');
        } else {
            return redirect()->route('slideshows.index')->with('alert', 'Không có slideshow có id {$id}');
        }
    }
}
