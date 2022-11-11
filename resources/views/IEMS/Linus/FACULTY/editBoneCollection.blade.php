<form action="{{ route('updateWildlife',$item->info_ID) }}" method="post" enctype="multipart/form-data">
      <div class="modal fade" id="ModalEditWl{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      {!! csrf_field() !!}
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content  bg-light">

      <div class="modal-header border-0 text-center">
        <h5 class="modal-title  text-center">Bone Details</h5>
        <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
            
            <div class="col-12 col-lg-4 ">
            <label for="wildlife_pic">Bone Picture:</label>
            <input type="file" id="wildlife_pic" class="form-control"  placeholder="{{ asset($item->wildlife_pic) }}" name="wildlife_pic">
            </div> 

            <div class="col-12 col-lg-8">
              <div class="row">
                <div class="col-12">
              <label for="formGroupExampleInput" class="form-label">Bone Name</label>
              <input type="text" class="form-control"  name="wildlife_name" value="{{ $item->wildlife_name}}">
              </div>
              </div>
            

            <div class="row">
              <div class="col-12"><br>
                <label for="formGroupExampleInput" class="form-label">Bone Scientific Name</label>
                <input type="text" class="form-control" name="wildlife_scientific_name" value="{{ $item->wildlife_scientific_name}}">
              </div>
            </div>
          </div>

            <div class="col-12 col-lg-4">
              <label for="formGroupExampleInput2" class="form-label">Bone Genus</label>  <h2 class="detailsView"></h2 class="detailsView">
              <input type="text" class="form-control" name="wildlife_genus" value="{{ $item->wildlife_genus}}">
            </div>

         
            <div class="col-12 col-lg-4">
              <!-- -->
            </div>
            
            <div class="col-12">
              <label for="exampleFormControlTextarea1" class="form-label">Description</label><h2 class="detailsView"></h2 class="detailsView">
              <textarea class="form-control" name="wildlife_desc" rows="3" >{{ $item->wildlife_desc}}</textarea>
            </div>

            <div class="modal-footer border-0">
                <button type="submit" class="btn btn-info" style="color:white">Update</button>
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

