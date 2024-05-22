<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\BlogPostPublished;
use Illuminate\Http\Request;

class BlogPostPublishedController extends Controller
{
    public function BlogPostPublished(Request $request)
    {
        $staticPostData = [
            'title' => 'Streamlining Laravel: 10 Game-Changing Practices You Need to Know',
            'blog-link' => "https://dolphinwebsolution.com/blog/laravel-10-game-changing-practices/",
            'email' => "bhadresh@gmail.com",
            'author' => 'Bhadresh Kotadiya',
            'published_at' => 'May 15, 2024',
        ];

        $subject = "Your Blog Post is Live! Check it Out Now";
        $template = new BlogPostPublished($staticPostData, $subject);
        SendEmailJob::dispatch($staticPostData['email'], $template);
        dd("We have emailed subscribers about your new blog post!");
    }

}
