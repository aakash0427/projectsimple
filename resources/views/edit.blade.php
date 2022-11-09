<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post edit Form') }}
        </h2>
    </x-slot>
    <div class="row">
    <div class="col-md-12">
      <form action="{{route('post_update', ['id' => $post->id])}}" method="post">
        @csrf
        @method('PUT')
        <h1> Sign Up </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your Basic Info</legend>
        
          <label for="name">Title:</label>
          <input type="text" id="name" name="title" value="{{ isset($post->title)? $post->title : old('title')}}">
          @error('title')
          <div class="text-red-500">{{ $message}}</div>
          @enderror
          
         <label for="desc">Description:</label>
          <textarea id="desc" name="desc">{{ isset($post->body)? $post->body : old('body')}}"</textarea>
          @error('desc')
          <div class="text-red-500">{{ $message}}</div>
          @enderror
          
  
         </fieldset>
       
        <button type="submit">Submit</button>
        
       </form>
        </div>
</table>
</x-app-layout>


