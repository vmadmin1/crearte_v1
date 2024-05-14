<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostsIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public function render()
    {
       
        /* $posts = Post::where('user_id', auth()->user()->id)->latest('id');

        /* $posts = Post::all(); */

        /* return view('livewire.admin.posts-index', compact('posts'));  */

        if (auth()->check()) {
            $posts = Post::where('user_id', auth()->user()->id)->latest('id')->get();
            return view('livewire.admin.posts-index', compact('posts'));
        } else {
            return redirect()->route('login'); // O cualquier otra acción si el usuario no está autenticado
        }
    }
}
