<div class="modal fade" id="addInstructor" tabindex="-1" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Instructor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                <label for="name">Name:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="program" name="program" placeholder="BS in Information Systems" required>
                <label for="program">Program:</label>
            </div>
        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="addbtn">Save</button>
            </div>
        </form>
    </div>
  </div>
</div>