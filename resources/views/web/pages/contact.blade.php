@php use Illuminate\Support\Facades\Auth; @endphp
@extends('web.layout.index')
@section('support')
    active
@endsection
@section('css')
.form {
    display: flex;
    flex-direction: column;
    gap: 28px;
    background-color: #fff;
    padding: 50px;
    border-radius: 10px;
    position: relative;
    margin: 0 140px;
    background-color: #f8f8f8
    }

    .message {
    color: rgba(88, 87, 87, 0.822);
    font-size: 14px;
    }

    .flex {
    display: flex;
    width: 100%;
    gap: 6px;
    justify-content: center;
    }

    .flex {
    display: flex;
    width: 100%;
    gap: 6px;
    justify-content: space-between;
    }

    .flex label {
        flex: 1; 
    }

    .input-left {
        text-align: left;
    }

    .input-center {
        text-align: center;
    }

    .input-right {
        text-align: right;
    }

    .flex .input {
    text-align: inherit;
    }

    .form label {
    position: relative;
    }

    .form label .input {
    width: 100%;
    padding: 10px 10px 20px 10px;
    outline: 0;
    border: 1px solid rgba(105, 105, 105, 0.397);
    border-radius: 5px;
    }

    .form label .input + span {
    position: absolute;
    left: 10px;
    top: 15px;
    color: grey;
    font-size: 0.9em;
    cursor: text;
    transition: 0.3s ease;
    }

    .form label .input:placeholder-shown + span {
    top: 15px;
    font-size: 0.9em;
    }

    .form label .input:focus + span,.form label .input:valid + span {
    top: -25px;
    font-size: 1em;
    font-weight: 600;
    }

    .form label .input:valid + span {
    color: green;
    }

    .input01 {
    width: 100%;
    padding: 10px 10px 20px 10px;
    outline: 0;
    border: 1px solid rgba(105, 105, 105, 0.397);
    border-radius: 5px;
    }

    .form label .input01 + span {
    position: absolute;
    left: 10px;
    top: 50px;
    color: grey;
    font-size: 0.9em;
    cursor: text;
    transition: 0.3s ease;
    }

    .form label .input01:placeholder-shown + span {
    top: 40px;
    font-size: 0.9em;
    }

    .form label .input01:focus + span,.form label .input01:valid + span {
    top: -28px;
    font-size: 1em;
    font-weight: 600;
    }

    .form label .input01:valid + span {
    color: green;
    }

    .fancy {
    background-color: transparent;
    border: 2px solid #cacaca;
    border-radius: 0px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-weight: 390;
    letter-spacing: 2px;
    margin: 0;
    outline: none;
    overflow: visible;
    padding: 6px 20px;
    position: relative;
    text-align: center;
    text-decoration: none;
    text-transform: none;
    transition: all 0.3s ease-in-out;
    user-select: none;
    font-size: 20px;
    }

    .fancy::before {
    content: " ";
    width: 1.7rem;
    height: 2px;
    background: #cacaca;
    top: 50%;
    left: 1.5em;
    position: absolute;
    transform: translateY(-50%);
    transform: translateX(230%);
    transform-origin: center;
    transition: background 0.3s linear, width 0.3s linear;
    }

    .fancy .text {
    font-size: 1.125em;
    line-height: 1.33333em;
    padding-left: 8em;
    display: block;
    text-align: left;
    transition: all 0.3s ease-in-out;
    text-transform: lowercase;
    text-decoration: none;
    color: #818181;
    transform: translateX(30%);
    }

    .fancy .top-key {
    height: 2px;
    width: 1.5625rem;
    top: -2px;
    left: 0.625rem;
    position: absolute;
    background: white;
    transition: width 0.5s ease-out, left 0.3s ease-out;
    }

    .fancy .bottom-key-1 {
    height: 2px;
    width: 1.5625rem;
    right: 1.875rem;
    bottom: -2px;
    position: absolute;
    background: white;
    transition: width 0.5s ease-out, right 0.3s ease-out;
    }

    .fancy .bottom-key-2 {
    height: 2px;
    width: 0.625rem;
    right: 0.625rem;
    bottom: -2px;
    position: absolute;
    background: white;
    transition: width 0.5s ease-out, right 0.3s ease-out;
    }

    .fancy:hover {
    color: white;
    background: #cacaca;
    }

    .fancy:hover::before {
    width: 1.5rem;
    background: white;
    }

    .fancy:hover .text {
    color: white;
    padding-left: 1.5em;
    }

    .fancy:hover .top-key {
    left: -2px;
    width: 0px;
    }

    .fancy:hover .bottom-key-1,
    .fancy:hover .bottom-key-2 {
    right: 0;
    width: 0;
    }
    .lienhe{
        text-align: center;
    }

@endsection
@section('content')
<h1 class=lienhe>@lang('lang.contact')</h1>
    <section class="container-lg clearfix">
        <div class="form justify-content-center">
                <div class="flex">
                    <label>
                        <input id="fullname" required name="fullName"  value="@if(Auth::check()) {{ Auth::user()->fullName }} @endif"
                                type="text" class="input">
                        <span>@lang('lang.fullname')</span>
                    </label>

                    <label>
                        <input id="email" required name="email" value="@if(Auth::check()) {{ Auth::user()->email}} @endif" type="email" class="input">
                        <span>Email</span>
                    </label>
                    <label>
                        <input id="phone" required name="phone"  value="@if(Auth::check()) {{ Auth::user()->phone }} @endif" type="tel" class="input">
                        <span>@lang('lang.phone')</span>
                </label>
                </div>    
                <label>
                    <textarea id="message" required name="message" rows="3"  class="input01 message_feedback"></textarea>
                    <span>@lang('lang.message')</span>
                </label>

                <a class="fancy feedback" href="javascript:void(0)" >
                    <span class="top-key"></span>
                    <span class="text ">@lang('lang.send')</span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </a>
    </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.feedback').on('click', function () {
                var message =  $('.message_feedback').val();
                if (confirm("Thông tin của bạn sẽ được ghi nhận vào hệ thống, bạn có chắc muốn gửi ?") === true) {
                    $.ajax({
                        url: '/feedback',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            'fullName': $('#fullname').val(),
                            'email': $('#email').val(),
                            'phone': $('#phone').val(),
                            'message': message,
                        },
                        success: function (data) {
                            if (data['success']) {
                                alert(data.success);
                                window.location.href ="/";
                            } else if (data['error']) {
                                alert(data.error);
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection

@if(request()->is('contact')) 
    <!-- Mã Tawk.to chỉ hiển thị trên trang Liên Hệ -->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/67247dd74304e3196adbab03/1ibj8n57p';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
@endif

