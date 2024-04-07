<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="container mx-auto grid place-items-center min-h-screen">
        <div class="w-1/2">
            <p class="text-center text-2xl font-bold">Register</p>
            <form action="" method="post" class="flex flex-col gap-4">
                @csrf
                @method("POST")
                <label for="">
                    <p>Name</p>
                    <input type="text" class="w-full border border-slate-500 h-10" name="name">
                </label>
                <label for="">
                    <p>Email</p>
                    <input type="email" class="w-full border border-slate-500 h-10" name="email">
                </label>
                <label for="">
                    <p>Password</p>
                    <input type="password" class="w-full border border-slate-500 h-10" name="password">
                </label>
                <button type="submit" class="w-full h-10 bg-cyan-500">Tambah</button>
            </form>
        </div>
    </div>

</body>
</html>
