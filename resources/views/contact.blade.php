@extends('layouts.app')
@section('title')
    Contact Us    
@endsection
@section('content')
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://cdn3.iconfinder.com/data/icons/user-interface-web-1/550/web-circle-circular-round_67-512.png"
            alt="img" />
    </div>
    <form method="post">
        <h3>Drop Us a Message</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Name" value=""
                        required />
                </div>
                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Email" value=""
                        required />
                </div>
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Phone Number"
                        value="" required />
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Feedback"
                        style="width: 100%; height: 150px;"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send" required />
                </div>
            </div>
        </div>
    </form>
</div>
@endsection