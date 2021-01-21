@extends('layout.master_layout')
@section('content')
    <div class="test">

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 ml-5 mt-5 font-size-h1-lg">
                News
            </div>
            <div class="col-sm-12 ml-4 mt-5">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">
                    Add NEWS
                </button>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="portlet box green">
                    <div class="portlet-body flip-scroll " id="table_content">
                     @include('admin/pagination_data')
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid">
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add news</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" class="row" id="upload_form" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="col-sm-12 text-center">

                            <div class="image-input image-input-outline" id="kt_image_1">
                                <div class="image-input-wrapper"  style="background-image: url(&quot;/assets/media/users/blank.png&quot;);"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="profile_avatar_remove" value="0">
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
                            </div>

                        </div>

                        <label for="" class="col-sm-12 mt-5 row">
                          <span class="mb-2 font-size-h3">
                            Title
                          </span>
                            <input type="text" name="title" class="form-control col-sm-12">
                        </label>
                        <label for="" class="col-sm-12 row">
                          <span class="mb-2 font-size-h3">
                            Content
                          </span>
                            <textarea type="text" name="content" rows="5" class="form-control col-sm-12"></textarea>
                        </label>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="save-news">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add news</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" class="row" id="edit_form" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="col-sm-12 text-center">

                            <div class="image-input image-input-outline" id="kt_image_1">
                                <div class="image-input-wrapper" id="image-input-wrapper" style="background-image: url(&quot;/assets/media/users/blank.png&quot;);"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" id="image_update" name="update_image" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="profile_avatar_remove" value="0">
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
                            </div>
                            <input type="hidden" id="id">
                        </div>
                        <label for="" class="col-sm-12 mt-5 row">
                          <span class="mb-2 font-size-h3">
                            Title
                          </span>
                            <input type="text" id="title" name="title" class="form-control col-sm-12">
                        </label>
                        <label for="" class="col-sm-12 row">
                          <span class="mb-2 font-size-h3">
                            Content
                          </span>
                            <textarea id="content" type="text" name="content" rows="5" class="form-control col-sm-12"></textarea>
                        </label>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="update-news">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('js')

    <script>
    $(document).on('click',"#save-news",function (){
        let myForm = document.getElementById('upload_form');
        $.ajax({
            url:"{{ route('news.add') }}",
            method:"POST",
            data:new FormData(myForm),
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(data)
            {
                $(myForm).closest('form').find("input[type=text],input[type=file], textarea").val("");
                $(".image-input-wrapper").css("background", "url('http://localhost/assets/media/users/blank.png')")
                $("#image").val("")
                Swal.fire(
                    'Good job!',
                    'News has been added',
                    'success'
                )
                fetch_data(1)
                $('#myModal').modal('hide')
            }
        })
    })

        $(document).on('click','.pagination a',function(event){
            event.preventDefault()
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page)
        })
        function fetch_data(page){
            $.ajax({
                url:"admin/news?page="+page,
                method:'GET',
                success:function (data){
                    $("#table_content").html("")
                    $("#table_content").append(data)
                }
            })
        }
    </script>
    <script>
        $(document).on('click','.edit-news',function (){
            let id = $(this).attr('data-route')
            $.ajax({
                url:'/admin/news/edit/'+id,
                method:'POST',
                data:{
                  "_token":'{{csrf_token()}}'
                },
                success:function(response){
                    // console.log(response)
                    $("#title").val(response.title)
                    $('#content').val(response.content)
                    $('#id').val(response.id)
                    var div = document.getElementById("image-input-wrapper");
                    div.style.backgroundImage = `url(${response.image})`;
                }
            })
        })
        $(document).on('click',"#update-news",function (){
            let myForm = document.getElementById('edit_form');
            let id_row = $("#id").val();
            $.ajax({
                url:"/admin/news/update/"+id_row,
                method:"POST",
                data:new FormData(myForm),
                dataType:'html',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                {
                    Swal.fire(
                        'Good job!',
                        'News has been added',
                        'success'
                    )
                    $('#editModal').modal('hide')
                    $("#row"+id_row).html(data)
                }
            })
        })
        $("#21").html('')
    </script>
    <script>
        $(document).on('click','.delete-item',function (){
            var delete_id = $(this).attr('data-item');
            let item = $(this)
            Swal.fire({
                title: "Are you sure?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {

                    $.ajax({
                        url:'/admin/news/'+delete_id+'/delete',
                        method:'post',
                        data:{
                          '_token':"{{csrf_token()}}"
                        },
                        dataType:'JSON',
                        success:function (){
                            item.closest('tr').remove()
                        }
                    })

                    Swal.fire(
                        "Deleted!",
                        "Your file has been deleted.",
                        "success"
                    )
                    // result.dismiss can be "cancel", "overlay",
                    // "close", and "timer"
                } else if (result.dismiss === "cancel") {
                    Swal.fire(
                        "Cancelled",
                        "Your imaginary file is safe :)",
                        "error"
                    )
                }
            });




        })



    </script>
@endsection
