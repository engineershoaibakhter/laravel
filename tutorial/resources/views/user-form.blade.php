<div>
    <form action="addUser" method="POST" style="text-align: center; margin-top: 100px;">
        @csrf
        <input type="text" name="username" placeholder="username" value="{{old('username')}}"> <br> <br>
        <span style="color: red">@error('username') {{$message}} @enderror</span><br> <br>
        <input type="email" name="email" placeholder="email" value="{{old('email')}}"> <br><br>
        <span style="color: red">@error('email') {{$message}} @enderror</span><br> <br>
        <input type="password" name="password" placeholder="password" value="{{old('password')}}"> <br><br>
        <span style="color: red">@error('password') {{$message}} @enderror</span><br> <br>
        <button type="submit">Submit</button>
    </form>
</div>
