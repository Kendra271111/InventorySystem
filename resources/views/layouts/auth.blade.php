<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap Icons (temporary) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="flex min-h-screen items-center justify-center bg-gray-50">
    <div class="w-full max-w-md">
        @yield('content')
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top fixed bottom-4 right-4 z-50 hidden"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!-- Vite JS -->
    @vite(['resources/js/app.js'])

    <!-- Dark Mode and Dropdown Script -->
    <script>
        // Dark mode functionality
        const htmlElement = document.documentElement;
        const darkModeToggle = document.querySelector('.dark-mode-icon');

        // Function to set theme
        function setTheme(theme) {
            if (theme === 'dark') {
                htmlElement.setAttribute('data-theme', 'dark');
                // Update icon to sun (for light mode toggle)
                if (darkModeToggle) {
                    darkModeToggle.innerHTML = '<i class="bi bi-sun-fill"></i>';
                }
            } else {
                htmlElement.removeAttribute('data-theme');
                // Update icon to moon
                if (darkModeToggle) {
                    darkModeToggle.innerHTML = '<i class="bi bi-moon-fill"></i>';
                }
            }
            // Save to localStorage
            localStorage.setItem('theme', theme);
        }

        // Function to toggle theme
        function toggleTheme() {
            const currentTheme = htmlElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
            setTheme(currentTheme === 'dark' ? 'light' : 'dark');
        }

        // Event listener for toggle
        if (darkModeToggle) {
            darkModeToggle.addEventListener('click', toggleTheme);
        }

        // On load, check for saved theme or system preference
        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                setTheme(savedTheme);
            } else {
                // Check system preference
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                setTheme(prefersDark ? 'dark' : 'light');
            }
        });
    </script>
</body>
</html>