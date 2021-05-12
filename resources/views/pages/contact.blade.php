 @extends('layouts.master')

@section('title')
    Blue Water Café.
@endsection

@section('title', '| Contact')

@section('content')
@if(Session::has('success'))
    <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
    <div id="charge-message" class="alert alert-success">
    {{ Session::get('success') }}
        </div>    
    </div>
</div>
@endif
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Us</h1>
                <hr>
                <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <//div class="form-group">
                    <div class="form-group"> 
                        <label name="message">Message:</label>
                        <input id="message" name="message" placeholder="Type your message here" class="form-control">
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>
        </div>
@endsection