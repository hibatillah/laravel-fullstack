<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tambah Data Formulir - Penerimaan Mahasiswa Baru</title>
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('formulir.store') }}" method="post" enctype="multipart/form-data">
                            7 | Muhammad Mahrus Zain, S.S.T., M.T.I.
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">PHOTO</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="photo">
                                <!-- error message untuk title -->
                                @error('photo')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">COST</label>
                                <input type="number" class="form-control @error('cost') is-invalid @enderror" name="cost" placeholder="Biaya Formulir">
                                <!-- error message untuk cost -->
                                @error('cost')
                            </div>
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">DUE DATE</label>
                                <input type="datetime-local" 8 | Muhammad Mahrus Zain, S.S.T., M.T.I class="form-control @error('due_date') is-invalid @enderror" name="due_date" ">
                            <!-- error message untuk due_date -->
                            @error('due_date')
                            <div class=" alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">DESCRIPTION</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Konten Formulir">
                            {{('description') }}
                        </textarea>
                        <!-- error message untuk description -->
                        @error('description')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    9 | Muhammad Mahrus Zain, S.S.T., M.T.I.
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</body>

</html>