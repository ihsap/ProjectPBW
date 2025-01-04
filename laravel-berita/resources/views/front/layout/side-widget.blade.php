<div class="col-lg-4" data-aos="fade-left">
    <!-- Search widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Search</div>
        <div class="card-body">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Search articles..." aria-label="Search articles" />
                    <button class="btn btn-primary" id="button-search" type="submit" aria-label="Submit search">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Categories widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div class="list-unstyled mb-0">
                @foreach ($categories as $item)
                <span>
                    <a href="{{ url('category/' . $item->slug) }}" class="bg-primary badge text-white unstyle-categories">
                        {{ $item->name }} ({{ $item->articles_count }})
                    </a>
                </span>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Related Post-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Popular Posts</div>
        <div class="card-body">
            @foreach ($popular_posts as $item)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{ url('storage/back/' . $item->img) }}" alt="{{ $item->title }}" class="img-fluid rounded-start" />
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <p class="card-title">
                                <a href="{{ url('p/' . $item->slug) }}">{{ $item->title }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>