@extends("layouts.backend")
@section('content')
<div class="main-content">
    <div class="hero-area">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <input class="btn btn-primary common-btn" type="submit" name="logoSubmit" value="Submit">
    </div>
</div>
@endsection
