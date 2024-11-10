<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <title>All</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body style="background-image: url('bg.jpg'); background-size: cover; background-attachment: fixed;">

    <header>
        <nav style="text-align:center; margin-top: 120px;">
            <a href="{{route('adminhome')}}" style="text-decoration: none; font-size: 50px; font-family: Fantasy; color: black; -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: white;">BrainQuest Adventure</a>
        </nav>
    </header>

    <br>
    <br>

    @yield('contents')

    <!-- <script>
        $('.delete-me').click(function() {
            alert('Delete ok')
    let productID = $(this).parent().siblings()[0].textContent
    $.ajax({
      success: function() {
        console.log(this);

        window.location.href = `/manage/products/delete?id=${productID}`;
      }
    })
  })
    </script> -->

</body>
</html>