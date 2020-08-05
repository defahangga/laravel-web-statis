<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Belajar HTML</title>
</head>

<body>
    <h2>Buat Account Baru!</h2>
    <p><b>Sign Up Form</b></p>
    
    <form action="/welcome" method="POST">
        @csrf
        <label for="first_name">First name:</label><br><br>
        <input type="text" id="first_name" name="first_name">
        <br><br>

        <label for="last_name">Last name:</label>  <br><br>
        <input type="text" id="last_name" name="last_name">
        <br><br>

        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="0">Male      <br>
        <input type="radio" name="gender" value="1">Female    <br>
        <input type="radio" name="gender" value="2">Other
        <br><br>

        <label>Nationality:</label><br><br>
        <select name="" id="">
            <option value="">Indonesian</option>
            <option value="">Japan</option>
            <option value="">China</option>
            <option value="">USA</option>
            <option value="">Rusia</option>
        </select>
        <br><br>

        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="bahasa" value="0">Bahasa Indonesia  <br>
        <input type="checkbox" name="bahasa" value="1">English           <br>
        <input type="checkbox" name="bahasa" value="2">Other             <br>
        <br>

        <label for="bio">Bio:</label><br><br>
        <textarea id="bio" cols="30" rows="10"></textarea>
        <br>

        <input type="submit" value="Sign Up">
    </form>

    <!-- <form action="/welcome">
        <button type="submit">Sign Up</button>
    </form>  -->
</body>