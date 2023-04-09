<form action="" method="post" enctype="multipart/form-data">
<div id="ModalImport" class="modal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" style="color: #000;">Import Excel</h5>
                  </div>
                  <div class="modal-body">
                  <form action="" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <input type="file" name="file" required>
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Import</button>
                  </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>

</form>
