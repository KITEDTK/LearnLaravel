<table>
  <h2>Clothes</h2>
    <thead>
      <tr>
        <th>Code</th>
        <th>Model Name</th>
        <th>Size</th>
        <th>Color</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $p)
      <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->name}}</td>
        <td>{{$p->size}}</td>
        <td>{{$p->color}}</td>
        <td>{{$p->quanity}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>