<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One To Many</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h5 class="text-center my-4">One To Many Relationship</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul Article</th>
                            <th>Tag</th>
                            <th width='15%' class="text-center">Jumlah Tag</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($article as $artikel)
                            <tr>
                                <td>{{ $artikel->judul }}</td>
                                <td>
                                    @foreach ($artikel->tags as $at)
                                        {{ $at->tag }},
                                    @endforeach
                                </td>
                                <td class="text-center">{{ $artikel->tags->count() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>