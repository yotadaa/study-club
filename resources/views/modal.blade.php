<div id="myModal" class="modal">
    <div class="h-screen w-screen fixed flex justify-center items-center" style='background-color: rgba(0,0,0,0.2)'>

        <div class='bg-white rounded-md shadow-xl relative w-72 h-20 flex flex-row items-center justify-center p-3'>
            <div class="mr-5 ml-3 cursor-pointer font-bold text-2xl" onclick="closeModal()">&times;</div>
            <span id='modalContent'>Isi semua field sebelum menekan submit</span>
        </div>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    function openModal(text) {
        document.getElementById('myModal').style.display = 'block';
        document.querySelector('#modalContent').textContent = text;
    }
</script>
