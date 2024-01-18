<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Session;

class BlogsController extends Controller
{
    public function postBlog(Request $request)
    {
        $blog = new Blog;
        $blog->author_id = Session::get('author_id');
        $blog->content = $request->input('content');
        $blog->save();

        return redirect("/blogs")->with('success', 'Blog posted!');
    }

    public function showBlog(string $id)
    {
        $blog = Blog::query()
            ->select('blog_id', 'name', 'content', 'time_posted')
            ->join('authors', 'blogs.author_id', '=', 'authors.author_id')
            ->where('blogs.blog_id', '=', $id)
            ->get()
            ->first();
        $comment = Comment::query()
            ->select('content', 'time_posted')
            ->join('authors', 'comments.author_id', '=', 'authors.author_id')
            ->where('comments.blog_id', '=', $id)
            ->get();

        return view('show_blog', compact('blog', 'comment'));
    }

    public function showBlogs()
    {
        $blogs = Blog::query()
            ->select('blog_id', 'name', 'content', 'time_posted')
            ->join('authors', 'blogs.author_id', '=', 'authors.author_id')
            ->limit(10)
            ->orderBy('time_posted', 'DESC')
            ->get();

        return view('all_blogs', compact('blogs'));
    }
}
