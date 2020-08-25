<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Navbar</title>
</head>
<body>
    <div class="pb-5">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href='/'>Todolist</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
         <span class="navbar-toggler-icon"></span>
        </button>

         <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                <li class="nav-item dropdown">
                    <a href="#" class="nav link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name }}</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item">{{ link_to_route('content/create', '投稿する' , ['class'=> 'nav-link']) }}</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">{{ link_to_route('content/{content}/edit' , '編集する' , [$content->id] , ['class'=> 'nav-link']) }}</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><input type="hidden" name="id" value="{{Auth::id()}}">{!! link_to_route('users.index' , 'ユーザー' ) !!}<i class="fas fa-user-friends ml-sm-2"></i></li>
                        <li class="dropdown-divider"></li>
                    </ul>
                </li>
                @else
               <li class="nav-item dropdown">
                    <a href="#" class="nav link dropdown-toggle" data-toggle="dropdown">一覧</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item">{{ link_to_route('register' , '登録' , ['class'=> 'nav-link']) }}</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">{{ link_to_route('login' , 'ログイン'  , ['class'=> 'nav-link']) }}</li>
                        <li class="dropdown-divider"></li>
                    </ul>
               </li>
                @endif
            </ul>
         </div>
        </nav>
    </div>
</body>
</html>
