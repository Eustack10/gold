
  
  <!-- The Modal -->
  <div class="modal" id="delete">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header d-flex justify-content-center align-items-center">
          <h4 class="modal-title">Are You Sure To Delete?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-center align-items-center">
          <button type="button" class="btn" data-dismiss="modal">Close</button>

          <form id="delForm" method="POST">
            @csrf {{ method_field('delete') }}
            <button class="btn btn-dark rounded-lg" type="submit">Delete</button>
          </form>
        </div>
  
      </div>
    </div>
  </div>