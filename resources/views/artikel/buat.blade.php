<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah Artikel</title>
</head>

<body>

    <div class="w-full h-screen grid grid-cols-3 gap-6 p-6">
        <div class="col-span-1 bg-[#3c37ff] flex flex-col justify-between rounded-2xl p-10 text-white">
            <h3 class="tracking-wider font-semibold uppercase">Artikel</h3>
            <div class="space-y-2">
                <h1 class="text-4xl tracking-wider font-semibold">Buat artikelmu sendiri!</h1>
                <p class="text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique necessitatibus porro officia alias esse harum?</p>
            </div>
            <div class="w-full bg-[#2520e3] rounded-xl p-6 space-y-4">
                <p class="text-slate-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam dolorum, assumenda repellat facilis libero tempora.</p>
                <div class="flex gap-4">
                    <img src="https://source.unsplash.com/random/?people" alt="profil" class="w-11 h-11 rounded object-cover">
                    <div class="">
                        <h5 class="font-medium">Wesley Zefanya</h5>
                        <p class="text-slate-300">Mahasiswa</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2 p-12">
            <h2 class="text-xl font-bold tracking-wide">Tulis Artikel</h2>
            <p class="text-slate-500 mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reprehenderit.</p>
            <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data" class="space-y-6">
                <div class="w-full flex gap-6">
                    <div class="flex flex-col space-y-1">
                        <label for="Gambar_Artikel" class="text-slate-600">Gambar</label>
                        <label for="Gambar_Artikel" class="cursor-pointer py-2.5 px-6 rounded-lg border-0 text-sm font-semibold bg-violet-50 text-indigo-700 hover:bg-violet-100">Pilih Gambar</label>
                        <input type="file" name="Gambar_Artikel" id="Gambar_Artikel" class="hidden">
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="Tanggal_Artikel" class="text-slate-600">Tanggal</label>
                        <input type="datetime-local" name="Tanggal_Artikel" id="Tanggal_Artikel" class="w-full px-3 py-1.5 rounded-lg border border-slate-300">
                    </div>
                </div>
                <div class="w-full space-y-4">
                    <label for="Tanggal_Artikel" class="text-slate-600">Kategori</label>
                    <div class="w-full">
                        <label for="PMB" class="w-full py-1.5 rounded-lg border border-slate-300">PMB</label>
                        <input type="radio" name="Kategor_Artikel" id="PMB" class="hidden">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('konten_artikel');
    </script>
</body>

</html>