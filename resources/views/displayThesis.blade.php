<div class="modal fade" id="ModalThesis{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content bg-light">

      <div class="modal-header border-0 text-center">
        <h5 class="modal-title  text-center">Thesis Paper Details</h5>
        <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
           
            
            <div class="col-12">
              <label for="formGroupExampleInput" class="form-label">Thesis Title</label>
              <h2 class="detailsView">{{ $item->thesis_title}}</h2 >
            </div>
            
            <div class="col-12">
                <label for="formGroupExampleInput" class="form-label">Author/s</label>
                <p >{{ $item->thesis_author}}</p>
            </div>

            <div class="col-12">
              <label for="formGroupExampleInput2" class="form-label">Thesis Reference</label>
              <p>{{ $item->thesis_reference}}</p>
            </div>

            <div class="col-12">
              <!-- filler -->
            </div>

            <div class="col-12">
              <p class="card-text text-muted fst-italic">{{ $item->date_published}}</p>
            </div>



          </div>
        </div>
      </div>
      <div class="modal-footer border-0">
        
        <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#ModalEditThesis{{$item->info_ID}}">Edit</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteThesis{{$item->info_ID}}">Delete</button>
        
      </div>
    </div>
    @include('editThesis')  
  </div>
</div>