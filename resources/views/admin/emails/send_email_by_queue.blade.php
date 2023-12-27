@extends('admin.layouts.master')
@section('content')


<h1 class="text-center">Send Email To All User</h1>
<hr>


<div class="container mt-2 mb-2 pd-2">
    <form action="{{ route('admin.sendEmailQueue') }}" method="POST">
        @csrf
        <div class="form-group mt-2 mb-2 pd-2">
            <label for="title">Greeting</label>
            <input type="text" class="form-control" name="title" required placeholder="title">
        </div>

        <div class="form-group mt-2 mb-2 pd-2">
            <label for="Body">Body</label>
            <input type="text" class="form-control" name="body" required placeholder="Body">
        </div>

        {{-- <div class="form-group mt-2 mb-2 pd-2">
            <label for="actiontext">Action text</label>
            <input type="text" class="form-control" name="actiontext" required placeholder="Action text">
        </div>

        <div class="form-group mt-2 mb-2 pd-2">
            <label for="actionurl">Action url</label>
            <input type="text" class="form-control" name="actionurl" required placeholder="Action url">
        </div>

        <div class="form-group mt-2 mb-2 pd-2">
            <label for="endText">End text</label>
            <input type="text" class="form-control" name="endtext" required placeholder="End text">
        </div> --}}


        <button type="submit" class="btn btn-success">Submit</button>

    </form>
</div>

@endsection
