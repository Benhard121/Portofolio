<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <nav class="bg-white dark:bg-[#161615] border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="{{ route('admin.dashboard') }}" class="text-[#1b1b18] dark:text-[#EDEDEC] hover:text-[#F53003] font-semibold">
                        Admin Panel
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('admin.projects.index') }}" class="text-[#1b1b18] dark:text-[#EDEDEC] hover:text-[#F53003] text-sm">Projects</a>
                    <a href="{{ route('admin.certificates.index') }}" class="text-[#1b1b18] dark:text-[#EDEDEC] hover:text-[#F53003] text-sm">Certificates</a>
                    <a href="{{ route('admin.messages.index') }}" class="text-[#1b1b18] dark:text-[#EDEDEC] hover:text-[#F53003] text-sm">Messages</a>
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-[#1b1b18] dark:text-[#EDEDEC] hover:text-[#F53003] text-sm">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>