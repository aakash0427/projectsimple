<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-5 pl-10 pr-12">
      <a href="{{route('post-add')}}">Add Post</a>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> -->
    <table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Title</th>
      <th>Description </th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th>{{ $post->user->name}}</th>
      <th>{{ $post->title}}</th>
      <th>{{ $post->body}}</th>
      <th><a href="{{route('post_edit',['id'=> $post->id])}}">Edit</a><br>
      <a href="{{route('post_destroy',['id'=> $post->id])}}">Delete</a></th>
    </tr>
    @endforeach
  </tbody>
</table>
</x-app-layout>


