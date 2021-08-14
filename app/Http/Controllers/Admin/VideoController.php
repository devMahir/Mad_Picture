<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Carbon\carbon;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('admin.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_name' => 'required',
            'content' => 'required'
        ]);

        $picture = $request->file('picture');
        $slug = str::of($request->title_name)->slug('_');

        if (isset($picture)) {
            $currentDate = Carbon::now()->toDateString();
            $picture_name = $slug.'_'.$currentDate.'_'.uniqid().'.'.$picture->getClientOriginalExtension();
            if (!file_exists('uploads/videoCatelog')) {
                mkdir('uploads/videoCatelog',007,true);
            }
            $picture->move('uploads/videoCatelog',$picture_name);
        }else {
            $picture_name = 'default.png';
        }

        $video = new Video();
        $video -> title_name = $request -> title_name;
        $video -> content = $request -> content;
        $video -> picture = $picture_name;
        $video -> status = true;
        $video -> save();
        return redirect()->route('video.index')->with('successMsg', 'Video Catelog Successfully Saved');
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
        $video = Video::find($id);
        if ($video->status == true) {
            $video -> status = false;
            $video -> save();
            return redirect()->route('video.index')->with('successMsg', 'Video Catelog Hide Successfully');
        }else {
            $video->status = true;
            $video -> save();
            return redirect()->route('video.index')->with('successMsg', 'Video Catelog Showing Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        if (file_exists('uploads/videoCatelog/'.$video->picture)) {
            unlink('uploads/videoCatelog/'.$video->picture);
        }
        $video -> delete();
        return redirect()->route('video.index')->with('successMsg', 'Video Catelog Successfully Deleted');
    }
}
