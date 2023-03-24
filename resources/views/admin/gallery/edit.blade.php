@extends('layouts.app')
@section('content')
<div class="p-4">
    <h2 class="text-4xl font-bold border-b-4 border-blue-400">Edit Picture</h2>

    <form action="{{route('gallery.update',$gallery->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf
        <input type="text" class="w-full rounded-lg mt-2" name="description" placeholder="Enter Description" value="{{$gallery->description}}">
        @error('description')
            <span class="text-red-600 -mt-4">* {{$message}}</span>
        @enderror
        <input type="text" class="w-full rounded-lg mt-2" name="priority" placeholder="Enter Priority" value="{{$gallery->priority}}">
        @error('priority')
            <span class="text-red-600 -mt-4">* {{$message}}</span>
        @enderror

        <input type="hidden" name="oldpath" value="{{$gallery->photopath}}">
        <p>Current Image</p>
        <div class="w-52">
        <img src="{{asset('images/gallery/'.$gallery->photopath)}}" alt="">
        </div>
        <input type="file" class="mt-2" name="photopath">
        @error('photopath')
            <span class="text-red-600 -mt-4">* {{$message}}</span>
        @enderror

        <div class="mt-5 flex">
            <input type="submit" value="Update Gallery" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer mx-2">
            <a href="{{route('gallery.index')}}" class="bg-red-600 text-white px-6 py-2 rounded-lg cursor-pointer mx-2">Exit</a>
        </div>
    </form>
</div>
@endsection