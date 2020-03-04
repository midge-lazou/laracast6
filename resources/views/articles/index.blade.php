@extends ('layout')

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <ul class="style1">
                    @forelse($articles as $article)
                        <li class="first">
                            <div class="title">
                                <h2>
                                    <a href="{{ route('articles.show', $article) }}">
                                        {{ $article->title }}
                                    </a>
                                </h2>
                            </div>
                            <p><img src="images/banner.jpg" alt="" class="image image-full"/></p>
                            <p>{{ $article->excerpt }}</p>
                        </li>
                    @empty
                        <p>No relevant articles yet.</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
