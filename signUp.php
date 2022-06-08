<?php
    include "signup-add.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-600 bg-gray-300 flex h-screen">
    <div class="w-full max-w-xs m-auto text-black bg-white rounded-lg p-5">
        <h1 class="font-bold text-2xl">SignUp</h1>
        <form method="POST" action="signUp.php">
            <label class="block font-semibold mb-1 mt-8">Full Name</label>
            <input type="text" name="first" class="border-b border-black hover:border-gray-500 outline-none mb-6 px-3 py-4 w-full h-5 ">
            <div class="text-red-500 text-sm mb-2"></div>


            <label class="block font-semibold mb-1">Age</label>
            <input type="text" name="last" class="border-b border-black hover:border-gray-500 outline-none mb-6 px-3 py-4 w-full h-5 ">
            <div class="text-red-500 text-sm mb-2"></div>


            <label class="block font-semibold mb-1">Gender</label>
            <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
    
            </select>

            <label class="block font-semibold mb-1">Course Of Interest</label>
            <select name="courses" id="courses">
            <option value="DIT">DIT</option>
            <option value="Web-Dev">Web Dev</option>
            <option value="Hiit">HIIT</option>
            </select>


            <div>
                <button class="rounded cursor-pointer w-full bg-red-700 text-white px-4 py-2 mb-6 hover:bg-red-600" name="signup">SignUp</button>
            </div>

           

        </form>
    </div>
</body>
</html>