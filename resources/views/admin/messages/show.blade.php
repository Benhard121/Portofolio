@extends('admin.layout')

@section('content')
<div class="p-6">
    <div class="bg-white dark:bg-[#161615] rounded-lg shadow p-6 max-w-2xl">
        <h1 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-[#EDEDEC]">{{ $message->name }}</h1>
        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-4">{{ $message->email }}</p>
        <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] p-4 rounded-lg mb-4">
            <p class="text-[#1b1b18] dark:text-[#EDEDEC] whitespace-pre-wrap">{{ $message->message }}</p>
        </div>
        <a href="{{ route('admin.messages.index') }}" class="text-[#F53003] hover:underline">Back to messages</a>
    </div>
</div>
@endsection