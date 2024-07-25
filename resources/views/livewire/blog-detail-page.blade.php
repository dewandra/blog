<main>
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h2 class="mb-4" style="line-height:1.5">{{ $blog->title }}</h2>
                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }} <span class="mx-2">/</span></span>
                        <p class="list-inline-item">
                            Category : 
                            @if($blog->category_name)
                                <a wire:navigate href="{{ route('blogs').'?categorySlug='.$blog->category_name }}" class="ml-1">{{ $blog->category_name }}</a>
                            @else
                                <span class="ml-1">No Category</span>
                            @endif
                        </p>
                        <p class="list-inline-item">Author : <a href="#!" class="ml-1">{{ $blog->author }}</a></p>
                    </div>
                    <div class="mb-5 text-center">
                        <div class="post-slider rounded overflow-hidden">
                            <img loading="lazy" decoding="async" src="{{ asset('storage').'/'.$blog->image }}" alt="Post Thumbnail">
                        </div>
                    </div>
                    <div class="content">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
