@extends('admin.layout')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-[#EDEDEC]">Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white dark:bg-[#161615] rounded-lg shadow p-6">
            <h3 class="text-gray-600 dark:text-[#A1A09A] text-sm">Unread Messages</h3>
            <p class="text-3xl font-bold text-[#F53003]">{{ $unreadMessages ?? 0 }}</p>
        </div>
        
        <div class="bg-white dark:bg-[#161615] rounded-lg shadow p-6">
            <h3 class="text-gray-600 dark:text-[#A1A09A] text-sm">Total Projects</h3>
            <p class="text-3xl font-bold text-[#F53003]">0</p>
        </div>
        
        <div class="bg-white dark:bg-[#161615] rounded-lg shadow p-6">
            <h3 class="text-gray-600 dark:text-[#A1A09A] text-sm">Total Certificates</h3>
            <p class="text-3xl font-bold text-[#F53003]">0</p>
        </div>
    </div>
</div>
@endsection