    <style>
        .sidebar{
            transform: translateX(-100%);
            transition: all 0.8s ease-in;
            }
        .show{
            transform: translateX(0);
            }
    </style>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color:transparent;">
<x-boot_css/>
<x-boot_icons/> 
    <div class="container-fluid">
        <a class="navbar-brand text-success fw-bolder" href="/admin/index"><img width="45px" height="30px" src="https://img.freepik.com/premium-vector/online-sale-shopping-vector-banner-design-online-shopping-text-with-phone-cart-paper-bag_572288-2005.jpg?size=626&ext=jpg&ga=GA1.1.505555653.1683209373&semt=sph" alt="Clothes_Shop" srcset=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
        <a class="nav-link text-success fw-bold" aria-current="page" href="/admin/index">Home</a>
            </li>
            @guest
                <li class="nav-item">
        <a class="nav-link fw-bolder" href="/login" style="color: #ff0000">LogIn</a>
                </li>
                <li class="nav-item">
        <a class="nav-link fw-bolder" href="/admin/register" style="color: #ff8080">SignUp</a>
                </li>
            @endguest
                @auth 
            <li class="nav-item">
        <a class="nav-link text-success fw-bolder" href="#">WelCome <span style="color: #808000;"> {{ auth()->user()->username }} </span> </a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-success fw-bolder" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img width="33px" height="26px" style="border-radius:6px;" src="{{ asset('storage/' . auth()->user()->image) }}" alt="profile"> Profile
            </a>
            @endauth 
            @auth
            <ul class="dropdown-menu">
                <li><a class="dropdown-item fw-bolder text-success" href="#">Action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item fw-bolder text-success" href="#">Another_action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item fw-bolder text-success" href="#">Update_Details</a></li>
                <li><hr class="dropdown-divider"></li>
                @endauth
                @auth
            <form action="/admin/logout" method="post">
                @csrf
            <button type="submit" value="Logout" 
            class="form-control bg-success text-light fs-4 fw-bolder">
            <i class="bi bi-power"> LOGOUT </i>     
            </button>               
                </form>                
            </ul>
            @endauth
            </li>
            <li class="nav-item">
            <a class="nav-link text-success fw-bolder" href="#">AppsData</a>
            </li>
        </ul>
        @auth
        <form class="d-flex" role="search">
            @csrf
            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        <a href="/view-cart"><i class="bi bi-cart fw-bolder fs-3 ms-1 text-success"></i></a>

            <i class="menu bi bi-list fw-bolder fs-3 ms-1 text-success" style="cursor: pointer;"></i>
        </form>
        @endauth
        </div>
    </div>
        <x-boot_js/>
    </nav>


    <script>
        let menu = document.querySelector('.menu');
        let sidebar = document.querySelector('.sidebar');
        menu.addEventListener('click',()=>{
        sidebar.classList.toggle('show')
        })
                
    </script>