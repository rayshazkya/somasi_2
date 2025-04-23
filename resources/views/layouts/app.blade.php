<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/app.css')

</head>
<body class="bg-[#F9F9F9] font-sans">

  <div class="flex min-h-screen">
    @include('component.sidebar')

    <main class="flex-1">
      @include('component.topbar')

      <div class="p-6">
        @yield('content')
      </div>
      
    </main>
  </div>

</body>
</html>
