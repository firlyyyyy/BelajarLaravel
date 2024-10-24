<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Belajar CRUD</title>
</head>

<body class="bg-gray-100">
    <div class="text-center mt-8">
        <h1 class="text-4xl font-bold text-gray-800">Data Pegawai</h1>
        <h3 class="font-medium text-gray-600">CRUD</h3>
    </div>

    <div class="relative">
        <div class="absolute top-28 left-36 pl-10">
            <a href="/pegawai/tambah"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full shadow-lg transition duration-300">
                Tambah Data
            </a>
        </div>
    </div>

    <div class="mt-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 p-32">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="px-5 py-3 text-left font-semibold">No</th>
                    <th class="px-5 py-3 text-left font-semibold">Nama</th>
                    <th class="px-6 py-3 text-center font-semibold">Alamat</th>
                    <th class="px-6 py-3 text-center font-semibold">Opsi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($pegawai as $p)
                    <tr class="hover:bg-blue-50 transition duration-150"
                        onclick="window.location.href='/pegawai/edit/{{ $p->id }}';">
                        <td class="px-6 py-4 font-medium text-gray-700">
                            {{ ($pegawai->currentPage() - 1) * $pegawai->perPage() + $loop->iteration }}.</td>
                        <!-- Nomor urut dinamis sesuai pagination -->
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $p->nama }}</td>
                        <td class="px-6 py-4 text-center text-gray-700">{{ $p->alamat }}</td>
                        <td class="px-6 py-4 text-center">
                            {{-- <a href="/pegawai/edit/{{ $p->id }}"
                                class="text-white hover:bg-blue-600 font-medium bg-blue-500 p-2 rounded-full">Edit</a> --}}
                            <a href="javascript:void(0)"
                                onclick="event.stopPropagation(); if (confirm('Apakah anda yakin ingin menghapus data?')) {window.location.href='/pegawai/hapus/{{ $p->id }}';}"
                                class="ml-2 text-red-500 hover:underline font-bold">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $pegawai->links() }}
        </div>
    </div>
</body>

</html>
