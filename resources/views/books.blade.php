<h3>Lista książek</h3>
@foreach($books as $books)
  Tytuł: {{$books->title}},
  Rok: {{$books->year}}
  <br>
@endforeach
