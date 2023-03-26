@extends('layouts.app')
@section('content')
<div class="p-4">
    <h2 class="text-4xl font-bold border-b-4 border-blue-400">Add a New News</h2>

    <form action="{{route('news.store')}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf

        <select name="category_id" id="" class="w-full rounded-lg mt-2">
            <option disabled selected>Choose a Category</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <input type="date" class="w-full rounded-lg mt-2" name="news_date" value="{{old('news_date')}}">
        @error('news_date')
            <span class="text-red-600 -mt-4">* {{$message}}</span>
        @enderror

        <input type="text" class="w-full rounded-lg mt-2" name="title" placeholder="Enter title" value="{{old('title')}}">
        @error('title')
            <span class="text-red-600 -mt-4">* {{$message}}</span>
        @enderror

        <input type="text" class="w-full rounded-lg mt-2" name="description" placeholder="Enter Description" value="{{old('description')}}">
        @error('description')
            <span class="text-red-600 -mt-4">* {{$message}}</span>
        @enderror
       

        <input type="file" class="mt-2" name="photopath">
        @error('photopath')
            <span class="text-red-600 -mt-4">* {{$message}}</span>
        @enderror

        <div class="mt-5 flex">
            <input type="submit" value="Add Gallery" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer mx-2">
            <a href="{{route('gallery.index')}}" class="bg-red-600 text-white px-6 py-2 rounded-lg cursor-pointer mx-2">Exit</a>
        </div>
    </form>
</div>
@endsection