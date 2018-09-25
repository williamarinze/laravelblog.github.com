<?php

namespace App\Http\Middleware;

use Closure;
use App\Post;
use Auth;

class IsPostAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->id) {
            throw new \Exception('Post id is required');
        }
        $postCount = Post::where('id', $request->id)
            ->where('author', Auth::id())
            ->count();
        if (!$postCount) {
            return back()->with('error_message', 'Post not found');
        }
        
        return $next($request);
    }
}
