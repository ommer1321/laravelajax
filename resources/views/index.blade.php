@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <h3>Ajax
                    <a href="" class="btn btn-primary float-end">Back</a>
                </h3>


            </div>
            <div class="card-body">
               



    <!-- addBrand Modal -->
    <div   class="modal fade" id="addBrand" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addBrandLabel">Add Brand</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

      <div >
            <form wire:submit.prevent ='storeBrand' >
    
                        <div class="modal-body">
                        
                            <label class="mt-3" for=""> Name</label>
                            <input  class=" name form-control form-control-sm" type="text"  aria-label=".form-control-sm example">
    
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                                <br>
                            @enderror
    


 
                            <label class="mt-3" for=""> Email</label>
                            <input  class=" email form-control form-control-sm" type="text"  aria-label=".form-control-sm example">
    
                            @error('email')
                                <small class="text-danger">{{$message}}</small>
                                <br>
                            @enderror
    
                            <label class="mt-3" for=""> Phone</label>
                            <input  class=" phone form-control form-control-sm" type="text"  aria-label=".form-control-sm example">
    
                            @error('phone')
                                <small class="text-danger">{{$message}}</small>
                                <br>
                            @enderror
    

                            <label class="mt-3" for=""> Course</label>
                            <input  class=" course form-control form-control-sm" type="text"  aria-label=".form-control-sm example">
    
                            @error('course')
                                <small class="text-danger">{{$message}}</small>
                                <br>
                            @enderror
    



                          
                        </div>
    
                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button   data-bs-dismiss="modal"  type="button" class="    add_student btn btn-primary">Add</button>
                        </div>
    
                    </form>
                </div>             
          </div>
        </div>
      </div>
       <!-- addBrand  Modal -->
    
       <a href="#" data-bs-toggle="modal" data-bs-target="#addBrand" class="btn btn-primary float-end">Add Brand</a>









            </div>
        </div>


    </div>
</div>


@endsection




@section('scripts')
<script>

$(document).ready(function(){


    $(document).on('click','.add_student',function(e){
    e.preventDefault();

    var data = {

        'name' : $('.name').val(),
        'email' : $('.email').val(),
        'phone' : $('.phone').val(),
        'course' : $('.course').val(),
        

    }

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


  $.ajax({
    type:"POST",
    url:"/students",
    data: data,
    dataType:"json",
    success:function(response){

alert(response)

    }
});



    });



});


</script>



@endsection













{{-- 
<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function(){

$(document).on('click','.updateProductColorBtn',function(){


  var product_id = "{{$product->id}}";
  var prod_color_id = $(this).val();
  var qty = $(this).closest('.prod-color-tr').find('.productColorQuantity').val();


  if(qty <= 0){
alert('Quantity Required');
    return false;
  }
 
  var data = {
    'product_id' : product_id,
    'prod_color_id' : prod_color_id,
    'qty' : qty,
  };
alert(data)



//   $.ajax({
//     type:"POST",
//     url:"product/color/edit/"+prod_color_id,
//     data: data,

//     success:function(response){

// alert(response.message)

//     }
//   });



});

});

</script> --}}