@include('partials.header')
<h3> Add Product</h3>
<form action="/saveProduct" method="Post">
@CSRF
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="description" class="form-control" name="description">
   
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">Quantity</label>
    <input type="quantity" class="form-control" name="quantity">
 
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="price" class="form-control" name="price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('partials.footer')