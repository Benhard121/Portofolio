@extends('admin.layout')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-[#EDEDEC]">Messages</h1>
    
    @if(session('success'))
        <div class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 p-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($messages->count())
        <div class="space-y-4">
            @foreach($messages as $message)
            <div class="bg-white dark:bg-[#161615] rounded-lg shadow p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">{{ $message->name }}</h3>
                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">{{ $message->email }}</p>
                        <p class="mt-2 text-[#1b1b18] dark:text-[#EDEDEC]">{{ $message->message }}</p>
                        @if(!$message->is_read)
                            <span class="inline-block mt-2 px-2 py-1 text-xs bg-[#F53003] text-white rounded">New</span>
                        @endif
                    </div>
                    <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Delete this message?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline text-sm">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $messages->links() }}
        </div>
    @else
        <p class="text-[#706f6c] dark:text-[#A1A09A]">No messages found.</p>
    @endif
</div>
@endsection