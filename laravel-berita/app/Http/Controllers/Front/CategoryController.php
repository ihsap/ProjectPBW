<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class CategoryController extends Controller
{
    public function index($slugCategory)
    {
        return view('front.category.index', [
            'articles' => Article::with('category')->whereHas('category', function ($q) use ($slugCategory) {
                $q->where('slug', $slugCategory);
            })->where('status', 1)->latest()->paginate(6),
            'category' => $slugCategory
        ]);
    }

    public function allCategory()
    {
        $category = Category::withCount(['Articles' => function (Builder $query) {
            $query->whereStatus(1);
        }])->latest()->get();
        
        return view('front.category.all-category', [
            'category' => $category
        ]);        
    }
}
