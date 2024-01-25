<div id='edit-form' class="h-screen w-screen fixed flex justify-center items-center">
<script>
    var kategori = @json($kategori);
</script>
    <div class='bg-white p-10 flex flex-col shadow-2xl rounded-md'>
        <h2 class='text-2xl font-semibold text-center'>Edit Kategori</h2>
        <form action="{{ route('kategori.update', $kategori->id)}}" method='post'>
        {{-- <form class="w-full" action="{{ route('kategori.update', ) }}" method='post'> --}}
        @csrf @method('put')

            <div>
                <input class='p-2 w-full bg-gray-200 rounded-sm outline-none focus:outline-none placeholder:font-semibold placeholder:text-black' type="text" placeholder="Nama Kategori" value="{{$kategori->nama_kategori}}" id='edit_nama_kategori' name='edit_nama_kategori'>
            </div>
            <div>
                <label for='edit_deskripsi'>Deskripsi</label><br>
                <textarea cols='30' rows='10' class="bg-gray-200 focus:outline-none p-2" type="text" id='edit_deskripsi' name='edit_deskripsi'>{{$kategori->deskripsi}}</textarea>
            </div>
            <input class="w-full p-2 font-semibold text-center bg-emerald-500 text-white rounded-md hover:opacity-80 cursor-pointer" value='Ubah' type='submit'>
            <button onclick='closeEdit()' class="mt-1 w-full p-2 font-semibold text-center bg-red-500 text-white rounded-md hover:opacity-80 cursor-pointer" >Batal</button>

        </form>
        <script>
            function closeEdit(){
                event.preventDefault();
                window.location.href = '/kategori'
            }

            // function openEdit(id) {
            //     document.querySelector('#edit-form').style.display = 'flex'
            //     let value = kategori.find(o => o.id === id);
            //     console.log(value);
            //     document.querySelector('#edit_nama_kategori').value = value.nama_kategori
            //     document.querySelector('#edit_deskripsi').value = value.deskripsi
            // }
        </script>
    </div>

</div>