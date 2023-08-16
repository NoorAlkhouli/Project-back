<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .background-page {

            /* Add this to allow absolute positioning */
            /* background-image: url('../images/login.svg'); */
            /* Adjust the path as needed */
            background-size: 30%;
            background-repeat: no-repeat;
        }

        .background-image {
            position: absolute;
            top: 0;
            right: 0;
        }

        .btn {
            border: none;
            padding: 12px 24px;
            border-radius: 24px;
            font-size: 12px;
            font-size: 0.8rem;
            letter-spacing: 2px;
            cursor: pointer;
        }

        .btn+.btn {
            margin-left: 10px;
        }

        .fill {
            background: rgba(0, 47, 255, 0.9);
            color: rgba(255, 255, 255, 0.95);
            filter: drop-shadow(0);
            font-weight: bold;
            transition: all .3s ease;
        }

        .fill:hover {
            transform: scale(1.125);
            border-color: rgba(255, 255, 255, 0.9);
            filter: drop-shadow(0 10px 5px rgba(0, 0, 0, 0.125));
            transition: all .3s ease;
        }
    </style>
</head>

<body class="bg-gray-100">


    {{-- <div style="background-image: url('{{ asset('images/login.jpg') }}'); background-postion: bottom-right;"> --}}

    {{-- <img src="{{ asset('images/login.jpg') }}"> --}}
    <div class="background-page">
        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-white p-8 shadow-md rounded-lg max-w-md w-full">
                <div class="text-center">
                    <h1 class="text-2xl
                font-bold mb-4">Login</h1>
                </div>
                @if (session('error'))
                    <div class="bg-red-100 text-red-800 py-2 px-4 rounded-md mb-4">{{ session('error') }}</div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold">Email:</label>
                        <input type="email" name="email" id="email"
                            class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-semibold">Password:</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500"
                            required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn fill">Login</button>
                    </div>
                    <div class="background-image"></div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
