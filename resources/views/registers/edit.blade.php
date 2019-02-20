<form method="post" action="{{route('registers.update',$registers->id)}}">
    @method('PATCH')
    @csrf
    Name<input type="text" name="name" value={{$registers->name}}><br>
    College<input type="text" name="college" value={{$registers->college}}><br>
    Qualification<input type="text" name="qualification" value={{$registers->qualification}}><br>
    Place<input type="text" name="place" value={{$registers->place}}><br>
    <button type="submit">Update</button>
</form>