<table id="myTable">
    <tr class="header">
      <th style="width:25%;">Code</th>
      <th style="width:25%;">Model Name</th>
      <th style="width:25%;">Size</th>
      <th style="width:25%;">Color</th>
    </tr>  
@foreach($data as $r)
<tr>
    <td>{{$r->id}}</td>
    <td>{{$r->model->name}}</td>
    <td>{{$r->size}}</td>
    <td>{{$r->color}}</td>
</tr>
@endforeach
</table> 