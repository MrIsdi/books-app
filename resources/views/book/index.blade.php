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
            <a href="{{ route("create-book") }}">Tambah buku</a>
            <table class="border border-black w-full">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Kategori</td>
                        <td>Tahun</td>
                        <td>Harga</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->nama }}</td>
                        <td>{{ $book->kategori }}</td>
                        <td>{{ $book->tahun }}</td>
                        <td>{{ $book->harga }}</td>
                        <td class="flex">
                            <a href="{{ route("edit-book", $book->id) }}" class="h-10 bg-green-500 w-1/2 flex justify-center items-center">Edit</a>
                            <form action="{{ route("delete-book", $book->id) }}" method="post" class="w-1/2">
                                @csrf
                                @method("DELETE")
                                <button class="h-10 bg-red-500 w-full" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
