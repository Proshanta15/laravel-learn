<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <h1>User Form</h1>
    <form action="/user" method="post">
        <input type="hidden" name="_method" value="DELETE">
        @csrf
        <div>
            <input type="text" name="user" placeholder="Ente name">
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="Enter Password">
        </div>
        <br>
        <div>
            <button>Submit</button>
        </div>
    </form>

</div>
