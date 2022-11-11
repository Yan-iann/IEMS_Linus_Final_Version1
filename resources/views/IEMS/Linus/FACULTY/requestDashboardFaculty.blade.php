@extends('layouts.F_Layout')
@section('content')
<body>
<div class="home-section">
  <div class="home-content">
    <span class="text">Requests</span>
  </div>
  
</div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <form style="text-align: center;"class="form-inline my-2 my-lg=0" type="get" action="">
            <td></td>
            <td></td>
            <td><input type="search" name="searchUser" class="form-control mr-sm2" placeholder="Search Request"></td>
            <td><button class="btn btn-primary btn-sm" type="submit">Search</button></td>
          </form>
        </tr>
      </thead>
    </table>
</div><!--end of search bar-->


<hr class="mg-y-3">
<br>
<div class="table-responsive">
    <table class="table table-hover mg-b-0 text-center" id="maintables">
        <thead>
        <tr>
            <th>Request ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date Published</th>
            <th>Status</th>
         
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
                @foreach ($announcement as $item)
              
                <tr>
                    <td class="align-middle">{{ $item->anno_ID }}</td>
                    <td class="align-middle">{{ $item->anno_title }}</td>
                    <td class="align-middle">{{ $item->anno_author }}</td>
                    <td class="align-middle">{{ $item->anno_date }}</td>
                    <td class="align-middle">{{ $item->anno_status }}</td>
                  
                    <td class="align-middle">
                            <button type="button" class="btn btn-info" style="color:white"data-bs-toggle="modal" data-bs-target="#ModalEditReq{{ $item->anno_ID }}"><i class='bx bxs-edit' ></i></button>
                            <button type="button" class="btn btn-info" style="color:white"data-bs-toggle="modal" data-bs-target="#ModalDeleteReq{{ $item->anno_ID }}"> <i class='bx bx-trash' ></i></button>  
                    </td>
                </tr>
                <!-- Edit Announcement Modal-->
                <form action="{{ route('updateAnnoF',$item->anno_ID) }}" method="post" enctype="multipart/form-data">
                  @csrf
                      <div class="modal fade" id="ModalEditReq{{ $item->anno_ID }}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-0 text-center">
                                <h5 class="modal-title  text-center">Request Details</h5>
                                <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="container-fluid">
                                <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">

                                      <div class="col-12">
                                        <label for="formGroupExampleInput" class="form-label">Announcement Title</label>
                                        <input type="input" class="form-control"  name="anno_title" value="{{ $item->anno_title}}">
                                      </div>

                                      <div class="col-12">
                                        <label for="formGroupExampleInput" class="form-label">Announcement Author</label>
                                        <input type="input" class="form-control"  name="anno_author" value="{{ $item->anno_author}}" >
                                      </div>

                                      <div class="col-12 col-md-4">
                                        <label for="formGroupExampleInput" class="form-label">Announcement Date</label>
                                        <input type="date" class="form-control"  name="anno_date" value="{{ $item->anno_date}}">
                                      </div>

                                      <div class="col-12 col-md-4">
                                        <label for="formGroupExampleInput" class="form-label">Content</label>
                                        <input type="input" name="anno_content" class="form-control" value="{{ $item->anno_content}}" >
                                      </div>

                                      <div class="col-12 col-md-4">
                                        <label for="formGroupExampleInput" class="form-label">Status</label>
                                        <input type="input" name="anno_status" class="form-control" value="{{ $item->anno_status}}" >
                                        <select name="anno_status" id="anno_status">
                                            <option value="approve">approve</option>
                                            <option value="unapprove">unapprove</option>
                                        </select>
                                      </div>

                                     
                                      <input type="hidden" class="form-control"  name="user_ID" value="{{ Auth::user()->id }}">

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

                <!-- Delete Announcement Modal-->
                <form action="{{ route('deleteAnno',$item->anno_ID) }}" method="get" enctype="multipart/form-data">
                      <div class="modal fade" id="ModalDeleteReq{{$item->anno_ID}}" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                            {!! csrf_field() !!}
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                          <div class="modal-content  bg-light">
                            <div class="modal-header border-0 text-center">
                              <h5 class="modal-title  text-center">Confirmation</h5>
                              <button type="button" class="btn-close bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body border-0">
                              <p>Are you sure you want to delete this information card?</p>
                            </div>
                            <div class="modal-footer border-0">
                              <button type="submit" class="btn btn-danger">Delete</button>
                              <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </form>
              @endforeach
            
        </tbody>
    </table>
</div>

    <div class="container-fluid">
    </div><!--end of container-->


<!-- Add User Modal-->
<form action="{{ route('storeAnno') }}" method="post" enctype="multipart/form-data">
@csrf
  <div class="modal fade" id="ModalAddRequest" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header border-0 text-center">
            <h5 class="modal-title  text-center">Add request</h5>
            <button type="button" class="btn-close btn-info bg-info" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
            <div class="row g-4 m-4 p-0 d-flex align-items-stretch g-l">

                  <div class="col-12">
                    <label for="formGroupExampleInput" class="form-label">Announcement Title</label>
                    <input type="input" class="form-control"  placeholder="Enter Title" name="anno_title">
                  </div>

                  <div class="col-12">
                    <label for="formGroupExampleInput" class="form-label">Announcement Author</label>
                    <input type="input" class="form-control" placeholder="Enter Author" name="anno_author" >
                  </div>

                  <div class="col-12 col-md-4">
                    <label for="formGroupExampleInput" class="form-label">Announcement Date</label>
                    <input type="date" class="form-control"  placeholder="Enter Date " name="anno_date" >
                  </div>

                  <div class="col-12 col-md-4">
                    <label for="formGroupExampleInput" class="form-label">Content</label>
                    <input type="input" name="anno_content" class="form-control" placeholder="Enter content " >
                  </div>

                  <input type="hidden" class="form-control"  name="anno_status" value="unapproved">
                  <input type="hidden" class="form-control"  name="user_ID" value="{{ Auth::user()->id }}">

                  <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-info text-white">Submit</button>
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
        </div>
      </div>
  </div>
</div>
</div>
</form>
</body>
@endsection





  
