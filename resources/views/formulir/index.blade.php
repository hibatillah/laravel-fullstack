<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp crossorigin=" anonymous"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Scholl Project</title>
</head>

<body class="bg-[#030E21]">

    <main class="container mx-auto p-8 h-screen grid place-items-center">
        <div class="w-full h-80 px-5 py-4 rounded-xl bg-slate-800/70">
            <h2 class="text-xl font-semibold text-slate-200">Formulir</h2>
        </div>
    </main>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        4 | Muhammad Mahrus Zain, S.S.T., M.T.I.

                        <a href="{{ route('formulir.create') }}" class="btn btn-md btn-success mb-3">TAMBAH FORMULIR</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">COST</th>
                                    <th scope="col">DUE DATE</th>
                                    <th scope="col">DESCRIPTION</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $formulir)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{Storage::url('public/formulir/') . $formulir->photo }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>
                                        {{ $formulir->cost}}
                                    </td>
                                    <td>
                                        {{ $formulir->due_date}}
                                    </td>
                                    <td>
                                        {!!$formulir->description !!}
                                    </td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('formulir.destroy', $formulir->id) }}" method="post">
                                            <a href="{{route('formulir.edit', $formulir->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')

                                            5 | Muhammad Mahrus Zain, S.S.T., M.T.I.
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">Data formulir belum Tersedia.</div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if (session() -> has('success'))
            toastr.success('{{ session('success ') }}', 'BERHASIL!');
        @elseif (session() -> has('error'))
            toastr.error('{{ session('error ') }}', 'GAGAL!');
        @endif
    </script>
</body>

</html>