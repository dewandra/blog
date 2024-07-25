<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class BlogDetailPage extends Component
{

    public $categorySlug = null;
    public $blog;
    public function mount($id)
    {
        $this->blog = Article::select('articles.*','categories.name as category_name')
        ->leftJoin('categories', 'categories.id', 'articles.category_id')->findOrFail($id);
        // dd($this->blog);
    }
    public function render()
    {
        $categories = Category::all();

        if(!empty($this->categorySlug)){
            $cat = Category::where('slug', $this->categorySlug)->first();

            if(empty($cat)){
                abort(404);
            }
        }

        return view('livewire.blog-detail-page',[
            'blog' => $this->blog,
            'categories' => $categories
        ]);
    }
}
