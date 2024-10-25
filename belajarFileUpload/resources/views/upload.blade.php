<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>File Upload</title>
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center my-5">Belajar File Upload</h2>

        <div class="col-lg-8 mx-auto">
            <!-- Tampilkan pesan error jika ada -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach
                </div>
            @endif

            <!-- Card untuk form upload -->
            <div class="card shadow-sm mb-5">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Upload File</h5>
                </div>
                <div class="card-body">
                    <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="file" class="form-label"><b>File Gambar</b></label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="keterangan" class="form-label"><b>Keterangan</b></label>
                            <textarea name="keterangan" id="keterangan" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Card untuk menampilkan data gambar -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Data Gambar</h5>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover table-striped m-0">
                        <thead class="table-primary">
                            <tr>
                                <th width='10%'>File</th>
                                <th>Keterangan</th>
                                <th width='10%' class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gambar as $g)
                                <tr>
                                    <td><img width="100px" src="{{ url('/data_file/' . $g->file) }}"
                                            class="img-thumbnail"></td>
                                    <td>{{ $g->keterangan }}</td>
                                    <td class="text-center">
                                        <a href="/upload/hapus/{{ $g->id }}"
                                            class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYkQmIlhBO0NRF34FQv8Ew5JxE2z9IOPzU5Ih9Muii/+I8XWv1pYrTtP8" crossorigin="anonymous">
    </script>
</body>

</html>
