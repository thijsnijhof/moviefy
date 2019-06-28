<div class="container">
    <form class="posts_search" method="POST" action="/admin/posts/filter">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for reviews..." name="name">
            <span class="input-group-btn">
                <button class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
            </span>
        </div>
    </form>
</div>
