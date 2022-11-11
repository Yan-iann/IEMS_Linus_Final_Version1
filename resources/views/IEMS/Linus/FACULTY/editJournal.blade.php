<form action="{{ route('updateJournal',$item->info_ID) }}" method="post" enctype="multipart/form-data">
      <div class="modal fade" id="ModalEditJournal{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      {!! csrf_field() !!}
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">

      <div class="modal-header border-0 text-center">
        <h5 class="modal-title  text-center">Journal Details</h5>
        <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">

             
            <div class="col-12">
              <label for="formGroupExampleInput" class="form-label">Journal Title</label>
              <input type="text" class="form-control"  name="journal_title" value="{{ $item->journal_title}}">
            </div>
            
            

            
              <div class="col-12">
                <label for="formGroupExampleInput" class="form-label">Journal Author</label>
                <input type="text" class="form-control" name="journal_author" value="{{ $item->journal_author}}">
              </div>
            
       

            <div class="col-12">
              <label for="formGroupExampleInput2" class="form-label">Journal Reference</label>
              <input type="text" class="form-control" name="journal_reference" value="{{ $item->journal_reference}}">
            </div>

            <div class="col-4">
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
