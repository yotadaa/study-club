<div id='confirmation-modal'
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
            <h6 class="m-0 font-weight-bold text-primary mb-2 mt-2">Konfirmasi</h6>
        </div>
        <div class="card-body">
            <div id='confirmation-text' class="mb-4"></div>
            <div style='display: flex; width: 100%; justify-content: space-around; gap: 30px;'>
                <a onclick="" class="btn btn-primary btn-icon-split">
                    <span id='confirmDelete' class="text">Konfir</span>
                </a>

                <a onclick="closeConfirmationModal()" class="btn btn-danger btn-icon-split">
                    <span class="text">Batal</span>
                </a>
            </div>
        </div>
    </div>
    <div id='for-form'></div>
</div>

<script>
    function openConfirmationModal(text, id) {
        document.querySelector('#confirmation-text').textContent = text;
        document.querySelector('#confirmation-modal').style.display = 'flex';

        document.querySelector('#confirmDelete').addEventListener('click', function() {
            console.log(id);
            document.querySelector('#for-form').innerHTML = `
            <form id="myForm" action="${id}" method="post">
                @csrf @method('delete')
                <!-- Your form fields go here -->
                <input type="hidden" name="id" value="${id}">
            </form>
            `;
            document.querySelector('#myForm').submit();
        });
    }


    function closeConfirmationModal() {
        document.querySelector('#confirmation-modal').style.display = 'none';
    }
</script>
</div>
