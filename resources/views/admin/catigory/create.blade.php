
<!-- add_modal_Grade -->
<div class="modal fade" id="AddCatigory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    add catigory
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('catigories.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2" onkeyup="getslug"> Catigory Name </label>
                            <input id="Name" type="text" name="name" class="form-control">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2"> Catigory Slug </label>
                            <input id="Name" type="text" name="slug" class="form-control">
                            @error('slug')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>



                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">close</button>
                <button type="submit" class="btn btn-success">add</button>
            </div>
            </form>

        </div>
    </div>
</div>

