<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md px-6">
        <div class="bg-white dark:bg-[#161615] rounded-lg shadow-lg p-8">
            <h1 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-[#EDEDEC]">Admin Login</h1>
            
            @if($errors->any())
                <div class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 p-3 rounded-lg mb-4">
                    {{ $errors->first('email') }}
                </div>
            @endif

            <form action="{{ route('admin.login') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium mb-2 text-[#1b1b18] dark:text-[#EDEDEC]">Email</label>
                    <input type="email" name="email" id="email" required autofocus class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium mb-2 text-[#1b1b18] dark:text-[#EDEDEC]">Password</label>
                    <input type="password" name="password" id="password" required class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
                </div>
                
                <button type="submit" class="w-full px-6 py-2 bg-[#F53003] text-white rounded-lg hover:opacity-90 transition">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>