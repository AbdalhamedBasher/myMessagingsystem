@extends('layouts.app')

@section('content')

                    @if($messages->count()>0)
                    <ul class="list-group">
                    @foreach($messages as $message)
                    <a href="{{route('read',$message->id)}}"><li class="list-group-item"><strong>From: {{$message->userFrom->name}} , {{$message->userFrom->email}}</strong>| Subject: {{$message->subject}}</li></a>
                    @endforeach
                    </ul>
                    @else
                    No messages!
                    @endif

@endsection
