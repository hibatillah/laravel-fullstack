<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Data Artikel</title>
</head>
<body>

  <div class="w-full min-h-screen grid place-items-center">
    <div class="min-w-[90%] max-w-[90%]">
      <div class="flex justify-between items-end">
        <h1 class="font-bold text-2xl/none text-slate-900 ml-1">Data Artikel</h1>
        <a href="{{ route('artikel.create') }}">
          <div class="px-6 py-2 rounded-lg font-semibold text-white bg-[#3c37ff] text-sm shadow-md active:bg-indigo-700">Tambah Artikel</div>
        </a>
      </div>
      <div class="min-h-[50dvh] p-4 mt-4 rounded-lg border border-indigo-300">
        <table class="table-fixed w-full">
          <thead class="bg-indigo-100 rounded-lg overflow-hidden">
            <tr class="text-indigo-600 text-xs uppercase text-left">
              <th class="p-2 w-[17%]">Gambar</th>
              <th class="p-2 w-[15%]">Tanggal</th>
              <th class="p-2 w-[31%]">Konten</th>
              <th class="p-2 w-[15%]">Kategori</th>
              <th class="p-2 w-[12%]">Status</th>
              <th class="p-2 w-[10%]">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-indigo-300">
            @forelse ($data as $artikel)
            <tr class="text-slate-700">
              <td class="px-2 py-3">
                <img src="{{Storage::url('public/artikel/') . $artikel->Gambar_Artikel }}" alt="Gambar_Artikel" class="w-44 aspect-video rounded object-cover border border-indigo-300 overflow-hidden pointer-events-none">
              </td>
              <td class="px-2 py-3">
                {{ $artikel->Tanggal_Artikel }}
              </td>
              <td class="px-2 py-3">
                {!!$artikel->Konten_Artikel !!}
              </td>
              <td class="px-2 py-3">
                <div class="w-fit px-4 py-1.5 rounded-md text-xs font-semibold tracking-wide bg-slate-100 text-slate-600">
                  {{ $artikel->Kategori_Artikel }}
                </div>
              </td>
              <td class="px-2 py-3">
                <div class="w-fit px-4 py-1.5 rounded-md text-xs font-semibold tracking-wide {{ ($artikel->Status_Artikel=='Aktif') ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}  ">
                  {{ $artikel->Status_Artikel }}
                </div>
              </td>
              <td class="px-2 py-3">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('artikel.destroy', $artikel->ID_Artikel) }}" method="post">
                  <div class="w-fit flex flex-col gap-1.5 text-center">
                      <a href="{{route('artikel.edit', $artikel->ID_Artikel) }}" class="flex-1 px-4 py-1.5 rounded-md bg-indigo-500 text-xs text-white font-medium hover:bg-indigo-600 active:bg-indigo-500 tracking-wider">EDIT</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="w-fit px-4 py-1.5 rounded-md bg-red-500 text-xs text-white font-medium hover:bg-red-600 active:bg-red-500 tracking-wider">HAPUS</button>
                  </div>
                </form>
              </td>
              @empty
              <div class="">Data artikel belum tersedia.</div>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

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