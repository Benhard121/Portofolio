@extends('admin.layout')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">Certificates</h1>
        <a href="{{ route('admin.certificates.create') }}" class="px-4 py-2 bg-[#F53003] text-white rounded-lg hover:opacity-90 transition">
            + Add Certificate
        </a>
    </div>
    
    @if(session('success'))
        <div class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 p-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($certificates->count())
        <div class="space-y-4">
            @foreach($certificates as $certificate)
            <div class="bg-white dark:bg-[#161615] rounded-lg shadow p-6 flex justify-between items-center">
                <div>
                    <h3 class="font-semibold">{{ $certificate->title }}</h3>
                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">{{ $certificate->organization }}</p>
                    @if($certificate->issued_at)
                        <p class="text-xs text-[#706f6c] dark:text-[#A1A09A]">Issued: {{ $certificate->issued_at->format('M d, Y') }}</p>
                    @endif
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('admin.certificates.edit', $certificate) }}" class="text-[#F53003] hover:underline text-sm">Edit</a>
                    <form action="{{ route('admin.certificates.destroy', $certificate) }}" method="POST" onsubmit="return confirm('Delete this certificate?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline text-sm">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $certificates->links() }}
        </div>
    @else
        <p class="text-[#706f6c] dark:text-[#A1A09A]">No certificates found.</p>
    @endif
</div>
@endsection