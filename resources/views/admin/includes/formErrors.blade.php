@if(!$errors->isEmpty())
    <div>
        <div>
            <strong>Oops! Something went wrong!</strong>
        </div>

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    </div>
@endif