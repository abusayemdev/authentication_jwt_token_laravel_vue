<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min') }}">
</head>
<body>
    <div id="app" style="margin-left:30px;">
<!--     style="display:none;" v-show="$route.path === '/' || $route.path === '/register' || $route.path === '/forget' || $route.path === '/newpassword' || $route.path === '/resetsuccess' ? false : true" -->
    <div id="dashboard" >
        <h1>Dashboard</h1>
    </div>
    
    <router-view></router-view>
        
    </div>
    

    <!-- App Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
   
    let token = localStorage.getItem('token')

    if (token) {
        $("#dashboard").css("display", "")
    }

</script>


</body>
</html>