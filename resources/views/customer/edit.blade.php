@include('partials.header')
<h3> Edit User</h3>
<form action="/updateCustomer" method="Post">
@CSRF
<input type="hidden" id="id" name="id" value="{{$customer->id}}">
<div class="mb-3">
    <label for="lastName" class="form-label">lastName</label>
    <input type="lastName" class="form-control" name="lastName" value="{{$customer->lastName}}">
    @error('name')
      <p>Invalid.</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="firstName" class="form-label">firstName</label>
    <input type="firstName" class="form-control" name="firstName" value="{{$customer->firstName}}">
    @error('name')
      <p>Invalid.</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{$customer->email}}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    @error('email')
      <p>Email is already used.</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="contactNumber" class="form-label">contactNumber</label>
    <input type="contactNumber" class="form-control" name="contactNumber" value="{{$customer->contactNumber}}">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">address</label>
    <input type="address" class="form-control" name="address" value="{{$customer->address}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('partials.footer')