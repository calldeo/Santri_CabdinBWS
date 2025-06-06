<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('dashboards/dist/images/logo.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login - Santri</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('dashboards/dist/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone - HTML Admin Template" class="w-6" src="{{asset('dashboards/dist/images/logo.svg')}}">
                        <span class="text-white text-lg ml-3"> Santri</span> 
                    </a>
                    <div class="my-auto">
                        <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{asset('dashboards/dist/images/illustration.svg')}}">
                        <div class="-intro-x text-white font-medium text-1xl leading-tight mt-10">
                            Nothing is impossible. Anything can happen as long as we believe
                            <br>
                            sign in to your account.
                        </div>
                    </div>
                </div>
                <!-- END: Login Info -->
                
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign In
                        </h2>
                        <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">
                            A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place
                        </div>
                        
                        <form class="user" method="post" action="/postlogin">
                            {{csrf_field()}}
                            <div class="intro-x mt-8">
                                <input type="email" name="email" value="{{ Session::get('email') }}" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email">
                                <input type="password" name="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                            </div>
                            
                            <div class="intro-x mt-6 text-center xl:text-left flex justify-between gap-4">
                                <!-- Tombol Login dan Cancel Sejajar -->
                                <button class="btn btn-primary py-3 px-4 w-full xl:w-auto" id="btn">Login</button>
                                <a href="/" class="btn btn-secondary py-3 px-4 w-full xl:w-auto">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>

        <!-- BEGIN: Dark Mode Switcher-->
        {{-- <div data-url="login-dark-login.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div> --}}
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="{{asset('dashboards/dist/js/app.js')}}"></script>
        @include('sweetalert::alert')
        <!-- END: JS Assets-->
    </body>
</html>
