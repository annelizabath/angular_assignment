<form method="post" action="{{route('books.store')}}">
    @csrf
    Title:<input type="text" name="title"><br>
    body:<input type="text" name="body"><br>
    <button type="submit" name="submit">Add</button>
</form>