<td> {{$news->title}} </td>
<td>{{$news->content}} </td>
<td class="numeric"><img src="{{asset($news->image)}}" width="120px" height="120px" alt="news image"> </td>
<td class="numeric"> {{$news->created_at}} </td>
<td><button data-route="{{$news->id}}" class="btn btn-light-primary d-flex flex-row edit-news" data-toggle="modal" data-target="#editModal">Edit <span class="ml-2 mt-1 fa fa-pen"></span></button></td>
<td><button class="btn btn-danger delete-item"><span class="fa fa-trash"></span></button></td>
