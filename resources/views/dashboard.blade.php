@extends('layouts.app')
@section('content')
    <div class="p-4">
        <h2 class="text-4xl font-bold border-b-4 border-blue-400">Dashboard</h2>

        <div class="grid grid-cols-3 gap-5 mt-5">
            <div class="bg-green-600 text-white rounded-lg p-4 flex justify-between">
                <h2 class="text-lg font-bold">Total News</h2>
                <h2 class="text-5xl font-bold">254</h2>
            </div>

            <div class="bg-blue-600 text-white rounded-lg p-4 flex justify-between">
                <h2 class="text-lg font-bold">Total Categories</h2>
                <h2 class="text-5xl font-bold">11</h2>
            </div>

            <div class="bg-red-600 text-white rounded-lg p-4 flex justify-between">
                <h2 class="text-lg font-bold">Total Visits</h2>
                <h2 class="text-5xl font-bold">1554</h2>
            </div>

        </div>
    </div>
@endsection