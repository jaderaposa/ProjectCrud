<!-- Modal -->

<div class="modal fade" id="deleteModal<?php echo $row['id']?>" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button> -->
			</div>

			<!-- <form action="/delete.php" method="GET"> -->

			<div class="modal-body">
				<input type="hidden" name="id"> 
				<h1> 
					Do you want to delete this Student Data?
				</h1>                                                           
			</div>
			<div class="modal-footer">
				<a href='delete.php?id=<?php echo $id; ?>'>
					<button type="button" class="btn btn-secondary">Yes</button>
				</a>
				<button type="button" class="btn btn-secondary" data-dismiss="modal"> No </button>
			</div>
			<!-- </form> -->
		</div>
	</div>
</div>

<!-- <div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close-modal">No</button>
                <button type="button" class="btn btn-danger">Yes</button>
            </div>
        </div>
    </div>
</div> -->

<!-- <div id="myModal" class="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title">Delete User</h4>
				<button type="button" class="close" data-dismiss="modal">Ã</button>
			</div>

			<div class="modal-body">
				<p>Are you sure you want to delete this user ?</p>
				<form method="POST" action="delete-user.php" id="form-delete-user">
					<input type="hidden" name="id">
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" form="form-delete-user" class="btn btn-danger">Delete</button>
			</div>

		</div>
	</div>
</div> -->