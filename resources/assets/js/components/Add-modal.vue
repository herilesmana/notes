<template>
    <div class="row">
        <div class="modal add-modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal">
    		<div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    					<h4 class="modal-title" id="addModal">Tambah Catatan</h4>
    				</div>

                    <div class="modal-body">

                        <form class="form" action="#" method="post">

                            <div class="form-group">
                                <label for="title">Judul Catatan</label>
                                <input class="form-control" id="title" type="text" name="title">
                            </div>

                            <div class="form-group">
                                <label for="note-body">Isi Catatan</label>
                                <textarea class="form-control" name="body"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default" type="submit">Simpan</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>


</template>

<script>

</script>

<style>
#addModal .modal-dialog {
    position: fixed;
    margin: auto;
    width: 320px;
    height: 100%;
    -webkit-transform: translate3d(0%, 0, 0);
        -ms-transform: translate3d(0%, 0, 0);
         -o-transform: translate3d(0%, 0, 0);
            transform: translate3d(0%, 0, 0);
}
.modal.add-modal .modal-content {
    height: 100%;
}

.modal.add-modal .modal-body {
    padding: 15px 15px 80px;
}

.modal.add-modal.fade .modal-dialog{
    left: -320px;
    -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
       -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
         -o-transition: opacity 0.3s linear, left 0.3s ease-out;
            transition: opacity 0.3s linear, left 0.3s ease-out;
}

.modal.add-modal.fade.in .modal-dialog{
    left: 0;
}

.modal-content {
    border-radius: 0;
    border: none
}
</style>
