<div>
    <h1>Image Lists</h1>
    <a href="upload">Upload</a>
    <br>
    <br>
    @foreach ($imgData as $img)
        <img style="width: 200px;" src="{{ url('storage/uploads/' . $img->path) }}" alt="">
    @endforeach
</div>
