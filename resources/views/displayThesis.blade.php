<div class="modal fade" id="ModalThesis{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">

      <div class="modal-header border-0 text-center">
        <h5 class="modal-title  text-center">Thesis Paper Details</h5>
        <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
            
          <div class="col-4">
              <label for="formGroupExampleInput2" class="form-label">Information ID</label>
              <h5 class="detailsView">{{ $item->info_ID}}</h5 class="detailsView">
            </div>

            <div class="col-8">
              <div class="row">
                <div class="col-12">
              <label for="formGroupExampleInput" class="form-label">Thesis Title</label>
              <h4 class="detailsView">{{ $item->thesis_title}}</h4 class="detailsView">
              </div>
              </div>
            

            <div class="row">
              <div class="col-12"><br>
                <label for="formGroupExampleInput" class="form-label">Thesis Author</label>
                <h4 class="detailsView">{{ $item->thesis_author}}</h4 class="detailsView">
              </div>
            </div>
          </div>

            <div class="col-4">
              <label for="formGroupExampleInput2" class="form-label">Thesis Reference</label>
              <h4 class="detailsView">{{ $item->thesis_reference}}</h4 class="detailsView">
            </div>

            <div class="col-4">
              <label for="formGroupExampleInput2" class="form-label">Thesis Type</label>
              <h4 class="detailsView">{{ $item->thesis_type}}</h4 class="detailsView">
            </div>

            <div class="col-4">
              <label for="formGroupExampleInput2" class="form-label">Date Published</label>
              <h4 class="detailsView">{{ $item->date_published}}</h4 class="detailsView">
            </div>

            <div class="col-4">
              <label for="formGroupExampleInput2" class="form-label">Thesis Status</label>
              <h4 class="detailsView">{{ $item->thesis_status}}</h4 class="detailsView">
            </div>

          </div>
        </div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalEditThesis{{$item->info_ID}}">Edit</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteThesis{{$item->info_ID}}">Delete</button>
        <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
    @include('editThesis')  
  </div>
</div>