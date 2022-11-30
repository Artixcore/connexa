
<!-- Modal -->
<div class="modal fade" id="overview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Overview</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ url('overview') }}">
            @csrf
        <div class="modal-body">
        <div class="container py-4">
          <textarea name="overview" class="form-control"></textarea>
        </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>
    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="avatar_up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="{{ url('update_ava') }}" method="post" enctype="multipart/form-data">
	@csrf
    <div class="container">
    <input type="file" class="form-control-file" name="avatar">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div> --}}



<!-- Modal -->
<div class="modal fade" id="cover_avatar_up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Cover Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="{{ url('cover_avatar') }}" method="post" enctype="multipart/form-data">
	@csrf
    <div class="container">
    <input type="file" class="form-control-file" name="cover_avatar">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>




 <!-- Modal -->
<div class="modal fade" id="website" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Website</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form method="post" action="{{ url('user-website') }}">
	  @csrf
      <div class="modal-body">
<div class="container py-4">
		<input type="text" name="user_website_name" placeholder="Website Name" class="form-control"><br/>
		<p></p>
		<input type="text" name="user_website_link" placeholder="Website Link" class="form-control">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="social" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add your Social</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="{{url('social')}}" method="post">
	  @csrf
      <div class="modal-body">

		<input type="text" name="user_social_name" placeholder="Website Name" class="form-control">
		<input type="text" name="user_social_link" placeholder="Website Link" class="form-control">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="coverletter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Cover Letter</h5>

      </div>
	  <form>
      <div class="modal-body">
       <form action="{{ url('cover') }}" method="post">
	   @csrf
	   <div class="container py-3">

    <div class="form-group">
    <input type="text" name="cover_header" class="form-control" placeholder="Cover Title">
  </div>
  <div class="form-group">
     <textarea placeholder="Cover Body" name="cover_body" class="form-control"></textarea>
  </div>


    </div>
<button type="submit" class="btn btn-primary">Save</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>

      </div>
	 </form>
    </div>
  </div>
</div>
