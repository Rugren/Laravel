<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = Post::latest()->paginate(5);
    
        return view('posts.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);    
        
        if($request->hasFile("file")){
            $file=$request->file("file");
            
            $nombre = "pdf_".time().".".$file->guessExtension();

            $ruta = public_path("pdf/".$nombre);

            if($file->guessExtension()=="pdf"){
                copy($file, $ruta);
            }else{
                dd("NO ES UN PDF");
            }
            $data = $request->all();
            $data["file"]=$nombre;
        }

        //Post::create($data);
        Post::create($request->all());
     
        return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
    }

    public function show(Post $post){
        return view('posts.show',compact('post'));
    }

    public function edit(Post $post)    {
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, Post $post) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',            
        ]);
    
        $post->update($request->all());
    
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    public function destroy(Post $post) {
        $post->delete();
    
        return redirect()->route('posts.index')->with('success','Post deleted successfully');
    }
}