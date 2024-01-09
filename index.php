<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="src/style.css" rel="stylesheet">
    <title>Academia Upload</title>
</head>
<body class="w-full min-h-screen flex bg-[#faf9f6] text-sm">
    <div class="w-1/2 flex justify-center items-center">
        <p class="text-2xl">Welcome to <span class="font-semibold text-[#52b2bf]">Academia Upload!</span></p>
    </div>
    <div class="w-1/2 flex items-center justify-center p-4">
        <div class="w-4/5 rounded-2xl bg-white shadow-xl p-8">
            <div class="w-full flex items-center justify-end gap-2 mb-4">
                <p>Don't have an account?</p>
                <button onclick="window.location.href='Views/Users/register.php'" class="py-1 rounded-md text-[#52b2bf] underline">Register</button>
            </div>
            <p class="font-medium mb-4">Login to your account</p>
            <form action="Controller/UserController.php" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" required autocomplete="off" class="w-full px-2 py-1 outline-none rounded-md border border-[#52b2bf] mt-1 mb-3">
                <label for="username">Password</label>
                <input type="password" name="password" required class="w-full px-2 py-1 outline-none rounded-md border border-[#52b2bf] mt-1 mb-3">
                <button class="w-1/4 rounded-md bg-[#52b2bf] py-1 text-white">Login</button>
            </form>
        </div>
    </div>
</body>
</html>