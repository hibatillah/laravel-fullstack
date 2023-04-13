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

    <div class="w-full min-h-screen grid grid-cols-3 gap-6 p-6">
        <div class="col-span-1 bg-[#3c37ff] flex flex-col justify-between rounded-2xl p-10 text-white">
            <h3 class="tracking-wider font-semibold uppercase">Artikel</h3>
            <div class="space-y-2">
                <h1 class="text-4xl tracking-wider font-bold">Sesuaikan artikelmu.</h1>
                <p class="text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique necessitatibus porro officia alias esse harum?</p>
            </div>
            <div class="w-full bg-[#2520e3] rounded-xl p-6 space-y-4">
                <p class="text-slate-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam dolorum, assumenda repellat facilis libero tempora.</p>
                <div class="flex gap-4">
                    <img src="https://source.unsplash.com/random/?people" alt="profil" class="w-11 h-11 rounded object-cover">
                    <div class="leading-snug">
                        <h5 class="font-medium">Wesley Zefanya</h5>
                        <p class="text-slate-300">Mahasiswa</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative col-span-2 p-12">
            <h2 class="text-2xl font-bold">Edit Artikel</h2>
            <p class="text-slate-500 mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reprehenderit.</p>
            <form action="{{ route('artikel.update', $data->ID_Artikel) }}" method="post" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')
                <div class="w-full flex gap-6">
                    <div class="flex flex-col space-y-1">
                        <label for="Tanggal_Artikel" class="text-slate-600">Tanggal</label>
                        <input type="datetime-local" name="Tanggal_Artikel" id="Tanggal_Artikel" class="w-full px-3 py-1.5 text-slate-700 rounded-lg border border-indigo-300 focus:outline-none active:border active:border-indigo-500 focus:ring-1 focus:ring-indigo-500 @error('Tanggal_Artikel') is-invalid @enderror" value="{{ $data->Tanggal_Artikel }}">
                        @error('Tanggal_Artikel')
                        <div class="text-red-600 text-xs mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="Gambar_Artikel" class="text-slate-600">Gambar</label>
                        <input type="file" name="Gambar_Artikel" id="Gambar_Artikel" accept="image/png, image/jpg, image/jpeg" class="block w-full text-sm text-slate-500 cursor-pointer file:cursor-pointer file:mr-4 file:py-2.5 file:px-5 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 @error('Gambar_Artikel') is-invalid @enderror"/>
                        @error('Gambar_Artikel')
                        <div class="text-red-600 text-xs mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="w-full space-y-1">
                    <label class="text-slate-600">Kategori</label>
                    <div class="flex gap-3">
                        <div>
                            <input type="radio" name="Kategori_Artikel" id="PMB" value="PMB" class="hidden peer @error('Kategori_Artikel') is-invalid @enderror"  {{ ($data->Kategori_Artikel=="PMB") ? "checked" : ""}}>
                            <label for="PMB" class="flex items-center gap-1 px-4 py-1.5 rounded-lg border border-indigo-300 peer-checked:bg-indigo-50 peer-checked:ring-1 peer-checked:ring-indigo-50 peer-checked:text-indigo-600 peer-checked:border-indigo-50 text-slate-700 cursor-pointer">PMB</label>
                        </div>
                        <div>
                            <input type="radio" name="Kategori_Artikel" id="Program Kerja PCR" value="Program Kerja PCR" class="hidden peer @error('Kategori_Artikel') is-invalid @enderror"  {{ ($data->Kategori_Artikel=="Program Kerja PCR") ? "checked" : ""}}>
                            <label for="Program Kerja PCR" class="flex items-center gap-1 px-4 py-1.5 rounded-lg border border-indigo-300 peer-checked:bg-indigo-50 peer-checked:ring-1 peer-checked:ring-indigo-50 peer-checked:text-indigo-600 peer-checked:border-indigo-50 text-slate-700 cursor-pointer">Program Kerja PCR</label>
                        </div>
                        <div>
                            <input type="radio" name="Kategori_Artikel" id="Penghargaan" value="Penghargaan" class="hidden peer @error('Kategori_Artikel') is-invalid @enderror"  {{ ($data->Kategori_Artikel=="Penghargaan") ? "checked" : ""}}>
                            <label for="Penghargaan" class="flex items-center gap-1 px-4 py-1.5 rounded-lg border border-indigo-300 peer-checked:bg-indigo-50 peer-checked:ring-1 peer-checked:ring-indigo-50 peer-checked:text-indigo-600 peer-checked:border-indigo-50 text-slate-700 cursor-pointer">Penghargaan</label>
                        </div>
                        <div>
                            <input type="radio" name="Kategori_Artikel" id="Lomba" value="Lomba" class="hidden peer @error('Kategori_Artikel') is-invalid @enderror"  {{ ($data->Kategori_Artikel=="Lomba") ? "checked" : ""}}>
                            <label for="Lomba" class="flex items-center gap-1 px-4 py-1.5 rounded-lg border border-indigo-300 peer-checked:bg-indigo-50 peer-checked:ring-1 peer-checked:ring-indigo-50 peer-checked:text-indigo-600 peer-checked:border-indigo-50 text-slate-700 cursor-pointer">Lomba</label>
                        </div>
                        <div>
                            <input type="radio" name="Kategori_Artikel" id="Umum" value="Umum" class="hidden peer @error('Kategori_Artikel') is-invalid @enderror"  {{ ($data->Kategori_Artikel=="Umum") ? "checked" : ""}}>
                            <label for="Umum" class="flex items-center gap-1 px-4 py-1.5 rounded-lg border border-indigo-300 peer-checked:bg-indigo-50 peer-checked:ring-1 peer-checked:ring-indigo-50 peer-checked:text-indigo-600 peer-checked:border-indigo-50 text-slate-700 cursor-pointer">Umum</label>
                        </div>
                    </div>
                    @error('Kategori_Artikel')
                    <div class="text-red-600 text-xs mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="w-full space-y-1">
                    <label class="text-slate-600">Status</label>
                    <div class="flex gap-3">
                        <div>
                            <input type="radio" name="Status_Artikel" id="Aktif" value="Aktif" class="hidden peer @error('Kategori_Artikel') is-invalid @enderror"  {{ ($data->Status_Artikel=="Aktif") ? "checked" : ""}}>
                            <label for="Aktif" class="flex items-center gap-1 px-4 py-1.5 rounded-lg border border-indigo-300 peer-checked:bg-indigo-50 peer-checked:ring-1 peer-checked:ring-indigo-50 peer-checked:text-indigo-600 peer-checked:border-indigo-50 text-slate-700 cursor-pointer">Aktif</label>
                        </div>
                        <div>
                            <input type="radio" name="Status_Artikel" id="Tidak Aktif" value="Tidak Aktif" class="hidden peer @error('Status_Artikel') is-invalid @enderror"  {{ ($data->Status_Artikel=="Tidak Aktif") ? "checked" : ""}}>
                            <label for="Tidak Aktif" class="flex items-center gap-1 px-4 py-1.5 rounded-lg border border-indigo-300 peer-checked:bg-indigo-50 peer-checked:ring-1 peer-checked:ring-indigo-50 peer-checked:text-indigo-600 peer-checked:border-indigo-50 text-slate-700 cursor-pointer">Tidak Aktif</label>
                        </div>
                    </div>
                    @error('Status_Artikel')
                    <div class="text-red-600 text-xs mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="w-full space-y-1">
                    <label class="text-slate-600">Konten Artikel</label>
                    <textarea name="Konten_Artikel" id="Konten_Artikel" rows="4" placeholder="Tulis artikel..." class="w-full px-3 py-2 rounded-lg border border-indigo-300 focus:outline-none focus:ring-1 focus:ring-indigo-500 text-slate-700 resize-y @error('Konten_Artikel') is-invalid @enderror">{{ $data->Konten_Artikel }}</textarea>
                    @error('Konten_Artikel')
                    <div class="text-red-600 text-xs -translate-y-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="flex gap-2">
                    <button type="reset" class="px-8 py-2 rounded-lg font-semibold text-indigo-700 bg-indigo-50 active:bg-indigo-100">Reset</button>
                    <button type="submit" class="px-8 py-2 rounded-lg font-semibold text-white bg-indigo-600 active:bg-indigo-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        // CKEDITOR.replace('Konten_Artikel');

        const radio = document.querySelectorAll('input[type="radio"]');
        radio.forEach(item => {
            item.checked ? item.parentNode.classList.replace('border-indigo-300','border-indigo-500') : item.parentNode.classList.replace('border-indigo-500','border-indigo-300');
        })
    </script>
</body>
</html>