
@extends('layouts.app')

@section('content')
@if(count($messages)>0)
    <ul class="list-group">
        @foreach($messages as $message)
            <li class="list-group-item">
                
        <strong>To: {{$message->userTo->name}} , {{$message->userFrom->email}}</strong>| Subject: {{$message->subject}}
        @if($message->read)
            <span class="badge badge-success float-right">READ</span>
        @else
            <span class="badge badge-danger float-right">NOT READ</span>
        @endif
    </li>
                

            </li>
        @endforeach
    </ul>
@else
    No messages!

@endif
@endsection
