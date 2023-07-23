<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Blog::all();
        return response()->json($news);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new Blog();
        $news->title = $request->title; 
        $news->body= $request->body;
        $news->save();

        return response()->json($news);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = Blog::find($id);
        
        $data = [
            'title' => $new->title,
            'body' => $new->body,
            'id' => $new->id,
            'fecha' => $new->created_at->format('d-m-Y H:i')
        ];

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = Blog::find($id);
        $news->title = $request->title;
        $news->body = $request->body;
        $news->save();

        return response()->json($news->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->_deleteNews($id)){
            return response()->json(['msg'=>'Blog con ID '.$id.' eliminado.']);
        }
        else{
            return response()->json(['msg'=>'Ocurrio un error al eliminar.'],500);
        }
    }

    public function destroyMultiple(Request $request)
    {
        foreach ($request->ids as $key => $value) {
            $status=$this->_deleteNews($value);
            if(!$status)
                break;
        }

        if ($status) {
            return response()->json(['msg'=>'Blogs eliminadas.']);
        }
        else{
            return response()->json(['msg'=>'Ocurrio un error al eliminar.'],500);
        }
    }

    private function _deleteNews($id)
    {
        $news = Blog::find($id);
        if ($news->delete()) {
            return true;
        }
        else{
            return false;
        }
    }
}
