<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><script src="https://cdn.tailwindcss.com"></script>
    <title>Scholl Project</title>
</head>

<body class="bg-[#030E21]">

    <main class="container mx-auto lg:p-8 h-screen grid place-items-center">
        <div class="w-full min-h-fit p-4 space-y-8 rounded-xl bg-slate-800/70">
            <div class="flex justify-between items-end">
                <h2 class="pl-1 text-2xl font-bold text-slate-200">Formulir</h2>
                <a href="{{ route('formulir.create') }}">
                    <div class="px-3 py-1 rounded-md bg-blue-500 text-sm text-white font-medium hover:bg-blue-500/80 active:bg-blue-600">Tambah Formulir</div>
                </a>
            </div>
            <table class="table-auto border-collapse w-full border border-slate-700/80 rounded-lg text-slate-300 overflow-hidden">
                <thead class="bg-slate-700/80 border border-slate-700/80">
                    <tr>
                        <th class="text-left py-2 pl-4">Gambar</th>
                        <th class="text-left py-2">Cost</th>
                        <th class="text-left py-2">Due Date</th>
                        <th class="text-left py-2">Description</th>
                        <th class="text-left py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-500/50">
                    @forelse ($data as $formulir)
                    <tr class="">
                        <td class="py-2 pl-4">
                            <div class="w-52 aspect-video rounded bg-slate-700/40 overflow-hidden">
                                <img src="{{Storage::url('public/formulir/') . $formulir->photo }}" class="w-full h-full object-cover">
                            </div>
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
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('formulir.destroy', $formulir->id) }}" method="post">
                                <div class="flex flex-col gap-2">
                                    <a href="{{route('formulir.edit', $formulir->id) }}" class="w-fit px-3 py-1 rounded-md bg-indigo-500 text-sm text-white font-medium hover:bg-indigo-500/80 active:bg-indigo-600">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-fit px-3 py-1 rounded-md bg-red-500 text-sm text-white font-medium hover:bg-red-500/80 active:bg-red-600">HAPUS</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">Data formulir belum Tersedia.</div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if (session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
</body>

</html>