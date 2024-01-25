<script>
    
    var kategori = @json($kategori);
</script>

<div id='detail' class="fixed h-full w-full hidden justify-center items-center" style=''>
    <div class="bg-white px-20 p-16 shadow-xl rounded-md flex flex-col justify-start">
        <h1 align='center' class="text-xl font-semibold mb-10">Detail Kategori</h1>
        <div class="flex">
            <div>
                Nama Kategori <br>
                Deskripsi <br><br>
            </div>
            <div class="ml-4">
                : <span id='detail_nama'>: </span><br>
                : <span id='detail_deskripsi'>: </span><br><br>
            </div>
            
        </div>
        <div class="justify-around flex w-full">
            <button onclick="closeDetail()" class="bg-red-400 w-24 mr-2 py-2 rounded-md">Kembali</button>
            {{-- <form action="{{ route('kategori.edit', $data->id) }}" method='get'> --}}
            <form method='post'>
                <input class="bg-yellow-400 w-24 ml-2 py-2 rounded-md cursor-pointer" type='submit' value='Ubah' />
            </form>
        </div>
        
        <script>
            function closeDetail() {
                document.querySelector('#detail').style.display = 'none';
            }

            function openDetail(id) {
                console.log(id);
                document.querySelector('#detail').style.display = 'flex';
                let value = kategori.find(o => o.id === id);
                document.querySelector('#detail_nama').innerHTML = value.nama_kategori;
                document.querySelector('#detail_deskripsi').innerHTML = value.deskripsi;
            }
        </script>
    </div>
</div>