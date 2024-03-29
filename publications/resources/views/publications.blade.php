@extends('layouts.main')

@section('content')
    @foreach ($publications as $p)
    <div class='mb-16'>
        <x-publication author='{{ $p->author->name }}' content="{{$p->excerpt}}" title='{{$p["title"]}}' time='{{$p["time"]}}' isdeleted="{{$p['isdeleted']}}"></x-publication>
        <a href="{{route('publication.show', ['publication' => $loop->iteration])}}" class="font-bold">Read more</a>
    </div>
    @endforeach
@endsection