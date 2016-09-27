@foreach ($articles as $article)
	<h1>{{$article->title}} </h1>
	<small>posted by:{{$article->getuser->name}}</small>
	<p>{{$article->body}}</p>
@endforeach