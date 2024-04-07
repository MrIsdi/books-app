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
            <p class="text-center text-2xl text-bold">Edit Buku</p>
            <form action="{{ route("update-book", $book->id) }}" method="post" class="flex flex-col gap-4">
                @csrf
                @method("PUT")
                <label for="">
                    <p>Nama</p>
                    <input type="text" class="w-full border border-slate-500 h-10" value="{{ $book->nama }}" name="nama">
                </label>
                <label for="">
                    <p>Kategori</p>
                    <input type="text" class="w-full border border-slate-500 h-10" value="{{ $book->kategori }}" name="kategori">
                </label>
                <label for="">
                    <p>Tahun</p>
                    <input type="text" class="w-full border border-slate-500 h-10" value="{{ $book->tahun }}" name="tahun">
                </label>
                <label for="">
                    <p>Harga</p>
                    <input type="text" class="w-full border border-slate-500 h-10" value="{{ $book->harga }}" name="harga">
                </label>
                <button type="submit" class="w-full h-10 bg-cyan-500">Edit</button>
            </form>
        </div>
    </div>

</body>
</html>
