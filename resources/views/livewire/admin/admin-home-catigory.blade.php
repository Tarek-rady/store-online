<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                @if(Session::has('massage'))

                 <div class="alert alert-success">{{ Session::get('massage') }}</div>

                @endif


                <form class="form-horizontal" wire:submit.prevent="UpdateHomeCatigory">
                    <div class="form-group">


                        <div class="col" wire:ignore>
                            <label class="control-lable" >catigory</label>
                            <select class="sel_categories form-control" name="catigories[]" multiple="multiple"wire:model="selected_catigories">
                                @foreach($Catigories as $catigory)
                                    <option value="{{ $catigory->id }}">{{ $catigory->name }}</option>
                                @endforeach
                            </select><br>

                        </div>


                        <div class="col">
                            <label for="title">no of products</label>
                            <input type="number"  class="form-control" wire:model="numberofproducts">

                        </div>


                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">submit</button>

                    </div>
                </form>



            </div>
        </div>
    </div>
</div>

@push('scripts')

 <script>
     $(document).ready(function(){
            $('.sel_categories').select2();
            $('.sel_categories').on('change', function(e){
                var data = $('.sel_catigories').select2("val");
                @this.set('selected_catigories' , data);

            });

     });
 </script>

@endpush
