<style>
.btn{
	margin-top: 25px;
}

</style>

@extends('main')

@section('title', '| Contact')

@section('content')    
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Me</h1>
            <hr>
            <form method="POST" action="/contact">
                @csrf
                <div class="from -group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>

                <div class="from-group">
                    <label name="subject">Subject:</label>
                    <input id="subject" name="subject" class="form-control" placeholder="write something">
                </div>

                <div class="from-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" class="form-control"></textarea>
                </div>

                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection     