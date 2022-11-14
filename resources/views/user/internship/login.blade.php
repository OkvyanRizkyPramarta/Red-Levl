@extends('layouts.user.master')
<script>
// membuat fungsi change
function change() {
    
    // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
    var x = document.getElementById('pass').type;
    
    //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
    if (x == 'password') {
    
        //ubah form input password menjadi text
        document.getElementById('pass').type = 'text';
                        
        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
        </svg>`;
    } else {
    
        //ubah form input password menjadi text
        document.getElementById('pass').type = 'password';
    
        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('mybutton').innerHTML = 
        `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
         <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
         <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
         </svg>`;
    }
}
</script>
@section('content')
<!-- Login Start -->
<div class="container-fluid py-5 px-0" style="background-color:#1f1f1f;">
        <div class="row mx-0 justify-content-center" style="margin-top:10px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form rounded p-5" style="background-color:white;">
                    <div id="success"></div>
                    <h1 class="display-4 text-uppercase text-center mb-5">Login</h1>
                    <form action="{{ route('internship.login.role') }}" id="contactForm" novalidate="novalidate" method="POST">
                    @csrf
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" placeholder="Username" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <div class="input-group">
                                <input type="password" id="pass" name="password" class="form-control bg-light border-0 p-4"  placeholder="Password" required="required" data-validation-required-message="Please enter a subject">
                                <div class="input-group-append">
                                    <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                    <span id="mybutton" onclick="change()" class="input-group-text">
                                        <!-- icon mata bawaan bootstrap  -->
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path fill-rule="evenodd"
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary text-uppercase py-3 px-5 mt-5" type="submit">login</button>
                        </div>
                        <div class="text-center" style="margin-top:20px;">
                           <p>If you don't have an account, you can register <a href="{{ route ('internship.register') }}" target="_blank" rel="noopener noreferrer">here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

@endsection