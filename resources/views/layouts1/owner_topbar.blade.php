<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Owner side bar</title>
        <!--<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">-->
        <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
        <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <style>
                body {
                    margin: 0;
                    font-family: Arial, sans-serif;
                    display: flex;
                }
                nav {
                    width:1px
                    background-color: #333;
                    color: white;
                    padding: 20px;
                }
                main {
                flex: 1;
                padding: 20px;
                }
            </style>
         </header>

         <div class="top_navbar">
            <div class="logo">Salon <span>Yaraa</span></div>
            <div class="menu">
                <div class="humberger">
                  
               </div>
               <div class="profile_wrap">
                  <div class="profile">
                     <img class="rounded-circle" src="css/Owner/owner_profile_image.jpeg" alt="profile_pic">
                     <span class="name">Yaara</span>
                     <span class="icon"><i class="fas fa-caret-down"></i></span>
                  </div>
               </div>
            </div>
         </div>

        <main>
            @yield('cont')
        </main>
        
    </body>
</html>