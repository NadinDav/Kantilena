<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\PostTag;
use App\Models\Category;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['userCount'] = User::all()->count();
        $data['postsCount'] = Post::all()->count();
        $data['categoriesCount'] = Category::all()->count();
        $data['imagesCount'] = Image::all()->count();
        return view('admin.main.index', compact('data'));
    }

}
