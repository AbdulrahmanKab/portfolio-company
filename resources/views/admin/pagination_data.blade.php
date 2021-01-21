<table class="table table-bordered table-striped table-condensed flip-content">
    <thead class="flip-content">
    <tr>
        <th> title </th>
        <th class="numeric">Content </th>
        <th class="numeric" width="20%"> Image </th>
        <th class="numeric"> Published_at </th>
        <th width="5%">Edit</th>
        <th width="5%">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($news as $row)
    <tr id="row{{$row->id}}">
        <td> {{$row->title}} </td>
        <td>{{$row->content}} </td>
        <td class="numeric"><img src="{{asset($row->image)}}" width="120px" height="120px" alt="news image"> </td>
        <td class="numeric"> {{$row->created_at}} </td>
        <td><button data-route="{{$row->id}}" class="btn btn-light-primary d-flex flex-row edit-news" data-toggle="modal" data-target="#editModal">Edit <span class="ml-2 mt-1 fa fa-pen"></span></button></td>
        <td><button class="btn btn-danger delete-item" data-item="{{$row->id}}" ><span class="fa fa-trash"></span></button></td>
    </tr>
    @endforeach
    </tbody>
</table>
{!! $news->links() !!}
