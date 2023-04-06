@extends('layouts.backend')
@section('content')
<div class="main-content">
    <div class="logo-area">
        <div class="row">

                <div class="col-md-12">
                    <label for="formFile" class="form-label">Logo Upload</label>
                    <input class="form-control" type="file" id="formFile">
                    <input class="btn btn-primary" type="submit" name="logoSubmit" value="Submit">
                </div>

        </div>
    </div>
</div>
@endsection
