<link rel="stylesheet" href="{{ asset('assets/css/import.css') }}">


<div id="ModalImport" class="modal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" style="color: #000;">Import Excel</h5>
                  </div>
                  <div class="modal-body">
                  <form action="{{route('jadwal.import')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                        <input type="file" name="file" required>
                    </div>
                  <div class="modal-footer">
                  <a href="https://drive.google.com/file/d/1ItIZ0wIh_hkXYIpLBNAuiA2H3qh2AzbR/view?usp=share_link" class="panduan" >Panduan <i class='bx bx-download icon'> </i> </a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Import</button>
                  </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
