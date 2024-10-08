<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-8">
    <div class="grid grid-cols-[repeat(auto-fill,minmax(350px,1fr))] gap-16">
        @foreach ($siswas->slice(0, 6) as $siswa)
            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-10">
                <div class="flex flex-col items-center">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $siswa->nama }}</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $siswa->kelas }}
                        {{ $siswa->jurusan }}</span>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
