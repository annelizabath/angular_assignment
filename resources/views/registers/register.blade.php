<form method="post" action="{{route('registers.store')}}">
    @csrf
    name<input type="text" name="name">
    college<input type="text" name="college">
    qualification<input type="text" name="qualification">
    place<input type="text" name="place">
    <button type="submit" name="submit">add</button>
</form>