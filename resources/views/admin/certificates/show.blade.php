@extends('admin.layout')

@section('content')
<div class="p-6">
    <div class="bg-white dark:bg-[#161615] rounded-lg shadow p-6 max-w-2xl">
        <h1 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-[#EDEDEC]">{{ $certificate->title }}</h1>
        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-4">{{ $certificate->organization }}</p>
        
        @if($certificate->issued_at)
            <p class="text-sm mb-2"><strong>Issued:</strong> {{ $certificate->issued_at->format('M d, Y') }}</p>
        @endif
        
        @if($certificate->expires_at)
            <p class="text-sm mb-2"><strong>Expires:</strong> {{ $certificate->expires_at->format('M d, Y') }}</p>
        @endif
        
        @if($certificate->credential_url)
            <p class="mt-4">
                <a href="{{ $certificate->credential_url }}" target="_blank" class="text-[#F53003] hover:underline">Verify Credential</a>
            </p>
        @endif
        
        <div class="mt-6">
            <a href="{{ route('admin.certificates.index') }}" class="text-[#F53003] hover:underline">Back to certificates</a>
        </div>
    </div>
</div>
@endsection