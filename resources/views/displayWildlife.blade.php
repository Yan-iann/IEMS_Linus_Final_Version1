

<body>
  <div class="modal fade" id="myModal{{ route('showWildlife',$item->info_ID)}}" tabindex="-1" aria-labelledby="WildlifeModal" aria-hidden="true"> <!-- id basically gi target sa pag open ug card modal-->
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">

       <div class="modal-header border-0 text-center">
        <h5 class="modal-title  text-center" >Wildlife Details</h5>
        <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>

          <div class="modal-body">
            <div class="container-fluid">
              <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
                
                <div class="col-4">
                  <div class="images">
                    <img src="{{ asset($wildlifes->wildlife_pic) }}"/>
                  </div>
                </div>

                      <div class="col-8">
                        <div class="row">
                          <div class="col-12">
                            <label class="form-label">Name</label>
                            <h2>{{ $wildlifes->wildlife_name}}</h2>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12">
                            <label class="form-label">Scientific Name</label>
                            <h2 class="fst-italic">{{ $wildlifes->wildlife_scientific_name }}</h2>
                          </div>
                        </div>
                      </div>
                
                <div class="col-4">
                  <label class="form-label">Class</label>
                  <h2>{{ $wildlifes->wildlife_class }}</h2>
                </div>

                <div class="col-4">
                  <label class="form-label">Order</label>
                  <h2>{{ $wildlifes->wildlife_order }}</h2>
                </div>

                <div class="col-4">
                  <label class="form-label">Family</label>
                  <h2>{{ $wildlifes->wildlife_family }}</h2>
                </div>

                <div class="col-4">
                  <label class="form-label">Genus</label>
                  <h2>{{ $wildlifes->wildlife_genus }}</h2>
                </div>

                <div class="col-4">
                  <label class="form-label">Specie</label>
                  <h2>{{ $wildlifes->wildlife_species }}</h2>
                </div>

                <div class="col-4">
                  <!--Blank Space-->
                </div>

                <div class="col-12">
                  <label class="form-label">Location</label>
                  <h4>{{ $wildlifes->wildlife_location }}</h4>
                </div>

                <div class="col-12">
                  <label class="form-label">Description</label>
                  <p>{{ $wildlifes->wildlife_desc }}</p>
                </div>                    

              </div><!-- modal Body Row --> 
            </div><!--Container Fluid -->
          </div> <!-- modal Body -->

        <div class="modal-footer border-0">
          
            <button type="submit"  class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editModal{{ route('editWildlife',$wildlifes->info_ID) }}">Edit</button> <!--data bs target mu open sa modal para edit -->
          
            <button type="button"  class="btn btn-outline-info" data-bs-target="#deleteConfirm" data-bs-toggle="modal" data-bs-dismiss="modal">Delete</button> <!-- same here but murag are you sure  WORKING-->
        </div>

        </div><!--end of modal content-->   
      </div><!-- end of modal dialogue -->
    </div><!-- end of modal -->


    <!-- Confirm Delete Modal -->
    <div class="modal fade" id="deleteConfirm" tabindex="-1" aria-labelledby="DeleteModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">

          <div class="modal-header border-0 text-center">
            <h5 class="modal-title  text-center" >Confirmation</h5>
            <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>

           <div class="modal-body">
            Are you sure you want to delete this information card?
           </div>

           <div class="modal-footer border-0">
              <button type="button"  class="btn btn-info" data-bs-dismiss="modal" aria-label="Close">Cancel</button> <!-- Cancel -->

            <a  href="{{ route('deleteWildlife',$wildlifes->info_ID) }}">
              <button type="submit"  class="btn btn-outline-info" data-bs-target="#deleteConfirm" data-bs-toggle="modal" data-bs-dismiss="modal">Delete</button> <!-- same here but murag are you sure -->
            </a>
          </div>

        </div>
      </div>
    </div>

@include("layouts.FACULTY.editWildlife")

</body><!--end of body-->
@endsection