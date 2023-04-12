<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tambah Artikel</title>
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control @error('Gambar_Artikel') is-invalid @enderror" name="Gambar_Artikel">
                                <!-- error message untuk title -->
                                @error('Gambar_Artikel')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal</label>
                                <input type="datetime-local" 8 | Muhammad Mahrus Zain, S.S.T., M.T.I class="form-control @error('Tanggal_Artikel') is-invalid @enderror" name="Tanggal_Artikel" ">
                                <!-- error message untuk Tanggal_Artikel -->
                                @error('Tanggal_Artikel')
                                <div class=" alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Kategori</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('Kategori_Artikel') is-invalid @enderror" type="radio" value="PMB" name="Kategori_Artikel" id="PMB">
                                    <label class="form-check-label" for="PMB">PMB</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('Kategori_Artikel') is-invalid @enderror" type="radio" value="Program Kerja PCR" name="Kategori_Artikel" id="Program Kerja PCR">
                                    <label class="form-check-label" for="Program Kerja PCR">Program Kerja PCR</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('Kategori_Artikel') is-invalid @enderror" type="radio" value="Penghargaan" name="Kategori_Artikel" id="Penghargaan">
                                    <label class="form-check-label" for="Penghargaan">Penghargaan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('Kategori_Artikel') is-invalid @enderror" type="radio" value="Lomba" name="Kategori_Artikel" id="Lomba">
                                    <label class="form-check-label" for="Lomba">Lomba</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('Kategori_Artikel') is-invalid @enderror" type="radio" value="Umum" name="Kategori_Artikel" id="Umum">
                                    <label class="form-check-label" for="Umum">Umum</label>
                                </div>
                                <!-- error message untuk Kategori_Artikel -->
                                @error('Kategori_Artikel')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                    @enderror
                                </div>
                                <label class="font-weight-bold">Status</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('Status_Artikel') is-invalid @enderror" type="radio" value="Aktif" name="Status_Artikel" id="Aktif">
                                    <label class="form-check-label" for="Aktif">Aktif</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('Status_Artikel') is-invalid @enderror" type="radio" value="Tidak Aktif" name="Status_Artikel" id="Tidak aktif">
                                    <label class="form-check-label" for="Tidak aktif">Tidak aktif</label>
                                </div>
                                <!-- error message untuk Status_Artikel -->
                                @error('Status_Artikel')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                    @enderror
                                </div>
                            <div class="form-group px-3">
                                <label class="font-weight-bold mt-2">Konten Artikel</label>
                                <div class="form-floating">
                                    <textarea class="form-control @error('Konten_Artikel') is-invalid @enderror" name="Konten_Artikel" rows="5" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                </div>
                                <!-- error message untuk Konten_Artikel -->
                                @error('Konten_Artikel')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="px-3 pb-3">
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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