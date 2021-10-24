@extends('layout.master')

@section('title', __('Rooms'))

@section('body')
    <vue-rooms
        :title="{
            rooms: {{json_encode($rooms)}},
            dir: '@if(auth('admin')->user()->language === 'ar') rtl @else ltr @endif',
            create: '{{__('Go Live')}}',
            close: '{{__('Close')}}',
            title: '{{__('Rooms')}}',
            new: '{{__('New Room')}}',
            action: '{{url('admin/rooms')}}',
            actionJoin: '{{url('admin/rooms/join')}}',
            actionEnd: '{{url('admin/rooms/end')}}',
            meetingID: '{{__('Meeting ID')}}',
            meetingName: '{{__('Meeting Name')}}',
            attendeePW: '{{__('Meeting User Password')}}',
            moderatorPW: '{{__('Meeting Admin Password')}}',
            join: '{{__('Join')}}',
            end: '{{__('End')}}',
            no_item: '{{__('No Rooms Right Now')}}',
            go_now: '{{__('You Can Go Live Now')}}',
            username: '{{__('Username')}}',
            password: '{{__('Password')}}',
            info: '{{__('Get Password')}}',
            userPassword: '{{__('User Password')}}',
            adminPassword: '{{__('Admin Password')}}',
        }"
    >
    </vue-rooms>
@endsection
