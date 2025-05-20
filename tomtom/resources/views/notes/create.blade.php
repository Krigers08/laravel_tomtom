<h2>Create sum new</h2>
<form action="/index" method="POST">
@csrf
<label for="title">Title</label>
<input type="text" id="title" name="title">
<br><br>
<label for="text">Text</label>
<input type="text" id="text" name="content">
<br><br>
<button>Submit</button>
</form>


