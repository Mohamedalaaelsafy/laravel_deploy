<form action="{{route('upload')}}" enctype="multipart/form-data" method="POST">
    @csrf()
    <input type="file" name="image">
    <input type="submit">
</form>
