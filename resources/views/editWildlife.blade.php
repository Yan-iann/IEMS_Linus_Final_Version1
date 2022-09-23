

<body>
  <div class="modal fade" id="editModal{{ route('showWildlife',$item->info_ID)}}" tabindex="-1" aria-labelledby="WildlifeModal" aria-hidden="true"> <!-- id basically gi target sa pag open ug card modal-->
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
  
        <div class="modal-header border-0 text-center">
          <h5 class="modal-title  text-center" >Edit Wildlife</h5>
          <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

       <div class="modal-body">
        <div class="container-fluid">
          <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">
      
    
            <form method="post" action="{{ route('updateWildlife',$wildlifes->info_ID) }}" enctype="multipart/form-data">
              {!! csrf_field() !!}
              

                <div class="col-4">
                  <div class="images">
                    <img src="{{ asset($wildlifes->wildlife_pic) }}"/>
                  </div>
                </div>

                      <div class="col-8">

                        <div class="row">
                          <div class="form group">
                            <label class="form-label">Name:</label>
                            <input type="input" class="form-control"  name="wildlife_name" value="{{$wildlifes->wildlife_name}}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group">
                            <label for="wildlife_scientific_name">Scientific Name:</label>
                            <input type="input" class="form-control"  name="wildlife_scientific_name" value="{{$wildlifes->wildlife_scientific_name}}">
                          </div>
                        </div>

                      </div>

                <div class="col-4">
                  <div class="form-group">
                    <label for="wildlife_class">Class:</label>
                    <input type="input" class="form-control"  name="wildlife_class" value="{{$wildlifes->wildlife_class}}">
                  </div>
                </div>

                <div class="col-4">
                  <div class="form-group">
                    <label for="wildlife_order">Order:</label>
                    <input type="input" class="form-control"  name="wildlife_order" value="{{$wildlifes->wildlife_order}}">
                  </div>
                </div>

                <div class="col-4">
                  <div class="form-group">
                    <label for="wildlife_family">Family:</label>
                    <input type="input" class="form-control"  name="wildlife_family" value="{{$wildlifes->wildlife_family}}">
                  </div>
                </div>

                <div class="col-4">
                  <div class="form-group">
                    <label for="wildlife_genus">Wildlife Genus:</label>
                    <input class="form-control" type="input" name="wildlife_genus" value="{{$wildlifes->wildlife_genus}}">
                  </div>
                </div>

                <div class="col-4">
                  <div class="form-group">
                    <label for="wildlife_species">Wildlife Species:</label>
                    <input type="input" class="form-control"  name="wildlife_species" value="{{$wildlifes->wildlife_species}}">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="wildlife_location">Wildlife Location:</label>
                    <input type="input" class="form-control"  name="wildlife_location" value="{{$wildlifes->wildlife_location}}">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="wildlife_desc">Wildlife Desc:</label>
                    <input type="input" class="form-control"  name="wildlife_desc" value="{{$wildlifes->wildlife_desc}}">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                  <label for="wildlife_desc">Wildlife Status:</label>
                    <input type="input" class="form-control"  name="wildlife_status" value="{{$wildlifes->wildlife_status}}">
                  </div>
                </div>

                  <br>
                  <button type="submit"  class="btn btn-info">Update </button>
                </form>
                <br>
                <a href="{{ route('wildlife') }}"><button type="submit"  class="btn btn-outline-info">Exit</button>
                                </a>
             
            
          </div>
        </div>
       </div> <!-- end of modal body -->

</div><!--end of modal content-->   
</div><!-- end of modal dialogue -->
</div><!-- end of modal -->

</div>


</body>
@stop 