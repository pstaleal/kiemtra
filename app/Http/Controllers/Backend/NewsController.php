<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use DateTime,DB;
use App\Http\Requests\News\AddRequest;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontend(){
        $data = News::select()->get()->toArray();

        return view('frontend.index',['data' => $data]);
    }

    public function index()
    {
        $data = News::select()->get()->toArray();
        return view('backend.manage',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
       
        $news = new News();
        $news->name = $request->txtFullName;
        $news->name_video = $request->txtNameYoutube;
        $news->link_youtube = $request->txtLink;
        $news->email = $request->email;
        $news->content = $request->txtIntro;
        $news->created_at = new DateTime();
        $news->save();
        return redirect()->route('getList');
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

        $data = News::find($id)->toArray();;
       return view('backend.edit',['data' => $data]);
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
        $news =News::find($id);
        $news->name = $request->txtFullName;
        $news->name_video = $request->txtNameYoutube;
        $news->link_youtube = $request->txtLink;
        $news->email = $request->email;
        $news->content = $request->txtIntro;
        $news->updated_at = new DateTime();
        $news->save();
        return redirect()->route('getList');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news =News::find($id);
        $news->delete();
        return redirect()->route('getList');;
    }
}
