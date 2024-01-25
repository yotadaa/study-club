<div id='confirmation-modal' class='fixed hidden w-screen h-screen items-center justify-center' style='background-color: rgba(0,0,0,0.2)'>
    <div class='bg-white p-10 flex flex-col justify-center items-center rounded-md'>
        <div id='confirmation-text'>Ini adalah konfirmasi modal</div>
        <div class="flex mt-6 justify-around w-full">
            <button onclick='closeConfirmatinModal()' class='bg-red-500 py-1 rounded-sm mr-2 px-5 font-semibold'>Batal</button>
            <button class='bg-blue-500 py-1 rounded-sm ml-2 px-5 font-semibold'>Konfir</button>
        </div>
    </div>
    <script>
        function openConfirmationModal(text) {
            document.querySelector('#confirmation-text').textContent = text;
            document.querySelector('#confirmation-modal').style.display = 'flex';
        }
        function closeConfirmationModal() {
            document.querySelector('#confirmation-modal').style.display = 'none';
        }
    </script>
</div>