<form method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Name" />
    <input type="text" name="login" placeholder="Login" />
    <input type="password" name="password" placeholder="Password" />
    <input type="file" name="image" placeholder="Picture" />
    <input type="submit" value="Send">
</form>