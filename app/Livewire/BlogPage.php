<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;

class BlogPage extends Component
{

    #[Url]
    public $categorySlug = null;
    public function render()
    {
        $categories = Category::all();
        $paginate = 10;

        if(!empty($this->categorySlug)){
            $cat = Category::where('slug', $this->categorySlug)->first();

            if(empty($cat)){
                abort(404);
            }

            $articles = Article::orderBy('created_at', 'DESC')
                        ->where('category_id',$cat->id)
                        ->where('status',1)
                        ->paginate(4);
            
        }else{
            $articles = Article::orderBy('created_at', 'DESC')
                        ->where('status',1)
                        ->paginate(4);
        }

        $lastestArticles = Article::orderBy('created_at', 'DESC')
                            ->where('status',1)
                            ->get()
                            ->take(3);


        return view('livewire.blog-page',[
            'articles' => $articles,
            'categories' => $categories,
            'lastestArticles' => $lastestArticles
        ]);
    }
}
