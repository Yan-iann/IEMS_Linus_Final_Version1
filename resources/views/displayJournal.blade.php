<div class="modal fade" id="ModalJournal{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content bg-light">

      <div class="modal-header border-0 text-center">
        <h5 class="modal-title  text-center">Journal Article Details</h5>
        <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">

   

           
            <div class="col-12">
              <label for="formGroupExampleInput" class="form-label">Journal Title</label>
              <h2 class="detailsView">{{ $item->journal_title}}</h4 >
            </div>
            

              <div class="col-12">
                <label for="formGroupExampleInput" class="form-label">Author/s</label>
                <p>{{ $item->journal_author}}</p>
              </div>
           

            <div class="col-12">
              <label for="formGroupExampleInput2" class="form-label">Journal Reference</label>
              <p>{{ $item->journal_reference}}</p>
            </div>
            
            <div class="col-12">
              <!-- filler  -->
            </div>

            <div class="col-12">
              <p class="card-text text-muted fst-italic">{{ $item->date_published}}</p>
            </div>


          </div>
        </div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#ModalEditJournal{{$item->info_ID}}">Edit</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteJournal{{$item->info_ID}}">Delete</button>
      </div>
    </div>
    @include('editJournal') 
  </div>
</div>