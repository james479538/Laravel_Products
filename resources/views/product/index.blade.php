@include('partials.header')
<x-nav/>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">description</th>
      <th scope="col">quantity</th>
      <th scope="col">price</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @if(Session::has('success'))
  <div class="alert alert-warning" role="alert">
  {{ Session::get('success') }}
  </div>

  @endif
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->prodID}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td><a href="editProduct/{{$product->prodID}}">Edit</a></td>
      <td><a href="deleteProd/{{$product->prodID}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>

@include('partials.footer')