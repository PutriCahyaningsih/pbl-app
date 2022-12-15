<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="{{ URL::asset('/assets/css/homestyle.css') }}" rel="stylesheet" type="text/css" />
  <title>Document</title>
</head>
<body>
  <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">CodingLab</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="{{ route('home') }}">
                    <i class='bx bxs-home' ></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip"> Dashboard</span>
            </li>
            <li>
                <a href="{{ route('logbooks.index') }}">
                    <i class='bx bxs-message-alt-add' ></i>
                    <span class="links_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            @can('lihat-data-user')
            <li>
                <a href="{{ route('users.index') }}">
                    <i class='bx bxs-user' ></i>
                    <span class="links_name">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            @endcan
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <div class="namejob">
                        <div class="name">Putri Cahyaningsih</div>
                        <div class="job">Mahasiswa</div>
                    </div>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    
                    <button type="submit"><i class='bx bx-log-out text-light' id="log_out"></i></button>
                    <!-- <i class='bx bx-log-out' id="log_out"></i> -->
                </form>
            </div>
        </div>
    </div>

    <div class="home_content">
      @yield('kontenku')
    </div>

<!-- <form action="{{ route('logout') }}" method="POST">
    @csrf
    
    <button type="submit">Logout</button>
</form> -->


<img src="{{ asset('gambar/ascii.png') }}" width="50px" alt="">
<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function() {
        sidebar.classList.toggle("active")
    }
</script>
</body>
</html>
