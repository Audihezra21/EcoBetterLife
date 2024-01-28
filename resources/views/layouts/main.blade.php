<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ad9856d319.js" crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Eco Better Life</title>
    <style>
          html,
  body {
      height: 100%;
      width: 100%;
  }

  body {
      display: flex;
      flex-direction: column;
  }

  footer {
      flex-shrink: 0;
  }

  .category li {
        width: 150px;
        height: 80px; 
    }

    </style>
</head>
<body>
    
    @php
        // Misalnya, $active diatur di controller atau sebelum template ini di-render
        $active = "login";
    @endphp

    @include('partials.navbar', ['active' => $active])
    
    <div class="container px-6 mt-20 mx-auto ">
        @yield('container')
    </div>

    @include('partials.footer')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/ad9856d319.js" crossorigin="anonymous"></script>
       
    @yield ('script')

</body>
</html>