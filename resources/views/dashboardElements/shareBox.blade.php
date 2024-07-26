@auth
<h4> Share yours ideas </h4>
<div class="row">
    <form action=" {{ route('submitIdea') }} " method="post">
    @csrf
        <div class="mb-3">
            <textarea class="form-control" name="content" id="idea" rows="3"></textarea>
        </div>
        @error('idea')
            <span class="text-danger"> {{ $message }} </span>
        @enderror
        <div class="">
            <button class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
@endauth
@guest
    <span class="text text-dark">Log in to submit ideas</span>
@endguest