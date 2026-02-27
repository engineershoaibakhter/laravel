<h1>Welcome to the Welcome Page</h1>

<h3>
    <a href="{{URL::to('about')}}">About</a>
    <a href="{{URL::to('home')}}">Home</a>
    <a href="{{URL::to('user')}}">User</a>

    <a href={{URL::to('about',['shoaib'])}}>About Shoaib</a>
</h3>
