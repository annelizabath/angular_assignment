<form method="post" action="{{route('books.update',$books->id)}}">
    @method('PATCH')
    @csrf
    Title<input type="text" name="title" value={{$books->title}}><br>
    Body<input type="text" name="body" value={{$books->body}}><br>
    <button type="submit">Update</button>
</form>