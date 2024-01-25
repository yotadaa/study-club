<script>
    var mhs = @json($mhs)
</script>

<div id='detail-form'
    style="
        z-index:99999;
        display: none;
        position: fixed;
        background-color: rgba(0,0,0,0.2);
        justify-content: center;
        align-items:center;
        width:100%;
        height:100%;
        ">
    <div class="card shadow mb-4">
        <div class="card-header py-1">
            <h6 class="m-0 font-weight-bold text-primary mb-2 mt-2"><span><i
                        class="icon fas fa-info-circle mr-3"></i></span>Detail Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div id='' class="mb-4" style="">
                <form id='ubah-form' action="" method="post"
                    style='display: flex; flex-direction:column; width: 300px;'>
                    @csrf @method('put')
                    <input disabled='true' type='text' id='nim' name='nim' placeholder="NIM" value=''
                        class="mb-2">
                    <input disabled='true' type='text' id='nama' name='nama' placeholder="Nama"
                        value='' class="mb-2">
                    <input disabled='true' type='text' id='kelas' name='kelas' placeholder="Kelas"
                        value=''>
                    <label class="mt-2 font-weight-bold text-gray-800">Deskripsi</label>
                    <textarea disabled='true' placeholder="des" id='des' name='des'></textarea>
                </form>
            </div>
            <div style='display: flex; width: 100%; justify-content: right; gap: 10px;'>
                <a id='confirmChange' onclick="confirm()" onclick="" style='display: none'
                    class="btn btn-success font-weight-bold btn-icon-split">
                    <span class="text">Konfir</span>
                </a>
                <a onclick="" class="btn btn-primary btn-icon-split">
                    <span id='toggleEdit' onclick="allowEdit()" class="text">Ubah</span>
                </a>

                <a onclick="closeForm()" class="btn btn-danger btn-icon-split">
                    <span class="text">Batal</span>
                </a>
            </div>
        </div>
    </div>
    <div id='for-form'></div>
</div>

<script>
    let currentState = false;

    function confirm() {
        var nim = document.querySelector("#nim").value;
        let nimExists = mhs.some(mhs => mhs.nim === nim);
        console.log(nimExists)
        if (!nimExists) {
            document.querySelector('#ubah-form').submit();
        } else {
            openModal('Nim sudah terdaftar!')
        }
    }

    function openForm(api, nim, nama, kelas, des) {
        currentState = false;
        document.querySelector("#detail-form").style.display = 'flex';
        document.querySelector("#nim").value = nim;
        document.querySelector("#nama").value = nama;
        document.querySelector("#kelas").value = kelas;
        document.querySelector("#des").value = des;
        document.querySelector('#ubah-form').action = api;

    }

    function allowEdit() {
        currentState = !currentState
        console.log(currentState)
        document.querySelector("#nim").disabled = currentState
        document.querySelector("#nama").disabled = currentState
        document.querySelector("#kelas").disabled = currentState
        document.querySelector("#des").disabled = currentState
        if (currentState) {
            document.querySelector("#confirmChange").style.display = 'none';

        } else {
            document.querySelector("#confirmChange").style.display = 'block';
        }
    }

    function closeForm() {
        currentState = false;
        document.querySelector("#detail-form").style.display = 'none'
    }
</script>
