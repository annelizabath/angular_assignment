<table border="1">
    <thead>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>COLLEGE</td>
            <td>QUALIFICATION</td>
            <td>PLACE</td>
        </tr>
    </thead>
    <tbody>
        @foreach($registersdetails as $registers)
        <tr>            
            <td>{{$registers->id}}</td>
            <td>{{$registers->name}}</td>
            <td>{{$registers->college}}</td>
            <td>{{$registers->qualification}}</td>
            <td>{{$registers->place}}</td>
            <td>
                <a href="{{route('registers.edit',$registers->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('registers.destroy',$registers->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>