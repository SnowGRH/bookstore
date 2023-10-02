<form action="/api/books/{{$books->book_id}}" method="get">
    @csrf
    {{method_field('PATCH')}}
   <div class="form-group">
    <input type="submit" value="{{$book->title}}">
   </div>
</form>
