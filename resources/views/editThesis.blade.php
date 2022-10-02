<form action="{{ route('updateThesis',$item->info_ID) }}" method="post" enctype="multipart/form-data">
      <div class="modal fade" id="ModalEditThesis{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      {!! csrf_field() !!}
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">

            <div class="modal-header border-0 text-center">
              <h5 class="modal-title  text-center">Thesis Paper Details</h5>
              <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">

                
                    <div class="col-12">
                    <label for="formGroupExampleInput" class="form-label">Thesis Title</label>
                    <input type="text" class="form-control"  name="thesis_title" value="{{ $item->thesis_title}}">
                    </div>
                    
                
                    <div class="col-12">
                      <label for="formGroupExampleInput" class="form-label">Thesis Author/s</label>
                      <input type="text" class="form-control" name="thesis_author" value="{{ $item->thesis_author}}">
                    </div>
                  
              

                  <div class="col-12">
                    <label for="formGroupExampleInput2" class="form-label">Thesis Reference</label>
                    <input type="text" class="form-control" name="thesis_reference" value="{{ $item->thesis_reference}}">
                  </div>

                  <div class="col-12 col-lg-6">
                    <label for="formGroupExampleInput2" class="form-label">Thesis Type</label>
                    <input type="text" class="form-control"  name="thesis_type" value="{{ $item->thesis_type}}">
                  </div>

                  <div class="col-12 col-lg-6">
                    <label for="formGroupExampleInput2" class="form-label">Date Published</label><h2 class="detailsView"></h2 class="detailsView">
                    <input type="date" class="form-control"  name="date_published" value="{{ $item->date_published}}">
                  </div>

                  <div class="modal-footer border-0">
                      <button type="submit" class="btn btn-info text-white">Update</button>
                      <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</form>
