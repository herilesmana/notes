<template>
    <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Edit Catatan</h4>
          </div>
          <div class="modal-body">
            <form class="edit" action="#" method="post">

                <div class="form-group">
                    <label for="title">Judul Catatan</label>
                    <input class="form-control" type="text" name="title" value="">
                </div>

                <div class="form-group">
                    <label for="body">Isi Catatan</label>
                    <textarea class="form-control" name="body">Isi catatan</textarea>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Simpan Perubahan</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</template>

<script>

</script>

<style>

</style>
