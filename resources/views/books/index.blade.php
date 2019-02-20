<table border="1">
    <thead>
        <tr>
            <td>ID</td>
            <td>TITLE</td>
            <td>BODY</td>
        </tr>
    </thead>
    <tbody>
        @foreach($booksdetails as $books)
        <tr>            
            <td>{{$books->id}}</td>
            <td>{{$books->title}}</td>
            <td>{{$books->body}}</td>
            <td>
                <a href="{{route('books.edit',$books->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('books.destroy',$books->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>