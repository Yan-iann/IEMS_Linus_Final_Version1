
<div class="modal fade m-3" id="ModalWildlife{{$item->info_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content  bg-light">

      <div class="modal-header border-0 text-center">
        <h5 class="modal-title  text-center">Bone Details</h5>
        <button type="button" class="btn-close bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body ">
          <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l ">
            
            <div class="col-12 col-lg-4 d-flex justify-content-center">
            <img class="imageWildlife" src="{{ asset($item->wildlife_pic) }}" alt="Card image cap">
            </div>


            <div class="col-12 col-lg-8">
              <div class="row">
                <div class="col-12">
              <label for="formGroupExampleInput" class="form-label">Bone Name</label>
              <h3 class="detailsView">{{ $item->wildlife_name}}</h5 class="detailsView">
              </div>
              </div>
            

            <div class="row">
              <div class="col-12 col-lg-12"><br>
                <label for="formGroupExampleInput" class="form-label">Bone Scientific Name</label>
                <h3 class="detailsView" style="font-style: italic;">{{ $item->wildlife_scientific_name}}</h5 class="detailsView">
              </div>
            </div>
          </div>

            <div class="col-12 col-lg-4">
              <label for="formGroupExampleInput2" class="form-label">Bone Genus</label>
              <h5 class="detailsView">{{ $item->wildlife_genus}}</h5 class="detailsView">
            </div>

            <div class="col-12 col-lg-4">
              <label for="formGroupExampleInput2" class="form-label">Information ID</label>
              <h5 class="detailsView">{{ $item->info_ID}}</h5 class="detailsView">
            </div>
            
            <div class="col-12 col-lg-12">
              <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <p class="detailsView">{{ $item->wildlife_desc}}</p class="detailsView">
                
            </div>


          </div>
        
      </div>
      <div class="modal-footer border-0">
       
        <button type="button" class="btn btn-info" style="color:white"data-bs-toggle="modal" data-bs-target="#ModalEditWl{{$item->info_ID}}">Edit</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteWl{{$item->info_ID}}">Delete</button>

      </div>
    </div>
    
  </div>
</div>