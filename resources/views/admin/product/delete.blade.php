
  <!-- delete -->
  <div class="modal" id="Deleted{{ $Product->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title"> Delete Catigory </h6><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('products.destroy',$Product->id) }}" method="post">
            @method('DELETE')
            @csrf
                <div class="modal-body">
                    <p>are sure of the deleting process ?</p><br>

                    <input class="form-control" name="name" id="name" value="{{ $Product->name }}" type="text">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
        </div>
        </form>
    </div>
</div>

{{-- End modal delete  --}}
