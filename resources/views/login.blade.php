<div>
    <h1>Login Form</h1>
    <form action="login" method="post">
        @csrf
        <div>
            <input type="text" name="user" placeholder="Enter Your Name">
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="Enter Password">
        </div>
        <br>
        <div>
            <button>Login</button>
        </div>
    </form>
</div>
