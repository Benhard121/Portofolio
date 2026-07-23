@extends('admin.layout')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-[#EDEDEC]">Create Certificate</h1>
    
    <form action="{{ route('admin.certificates.store') }}" method="POST" class="max-w-2xl">
        @csrf
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-2">Title</label>
                <input type="text" name="title" required class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Organization</label>
                <input type="text" name="organization" required class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Issued At</label>
                <input type="date" name="issued_at" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Expires At</label>
                <input type="date" name="expires_at" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Credential URL</label>
                <input type="url" name="credential_url" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
            </div>
            
            <button type="submit" class="px-6 py-2 bg-[#F53003] text-white rounded-lg hover:opacity-90 transition">
                Save Certificate
            </button>
        </div>
    </form>
</div>
@endsection