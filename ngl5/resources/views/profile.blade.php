9<h1>{{$users}}'s Profile</h1>
<strong>Country:</strong>{{$users->addresses->country}}
<strong>Roles:</strong>
<ul>
	@foreach($users->roles as $role)
		<li>{{$role->name}}</li>
	@endforeach
</ul>
<hr>
@foreach ($users->articles as $article)
	<h1>{{$article->title}}</h1>
	<p>
		{{$article->body}}
	</p>
@endforeach