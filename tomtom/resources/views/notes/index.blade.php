<h1>Yo gang</h1>
<a href="/create">Create new</a>
<ul>
@foreach ($notes as $note)
    <li>Id: {{ $note->id }}
    <br><strong>{{ $note->title }}</strong>
    <br>{{ $note->content }}</li>
    <a href="/show/{id}">Show</a>
    <a href="/index">Delete</a>
    <br><br>
@endforeach
</ul>


