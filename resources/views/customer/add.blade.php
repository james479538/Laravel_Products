@include('partials.header')
<h3> Add User</h3>
<form action="/saveCustomer" method="Post">
@CSRF
<div class="mb-3">
    <label for="lastName" class="form-label">lastName</label>
    <input type="lastName" class="form-control" name="lastName">
    @error('name')
      <p>Invalid.</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="firstName" class="form-label">firstName</label>
    <input type="firstName" class="form-control" name="firstName">
    @error('name')
      <p>Invalid.</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    @error('email')
      <p>Email is already used.</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="contactNumber" class="form-label">contactNumber</label>
    <input type="contactNumber" class="form-control" name="contactNumber">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">address</label>
    <input type="address" class="form-control" name="address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('partials.footer')