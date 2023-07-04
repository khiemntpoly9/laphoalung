@extends('layouts.default')
@section('title', 'Đăng ký')

@section('content')
  <div class="box-login w-1/4 m-auto">
    <form id="register-form" class="flex flex-col" action="/register" method="POST">
      @csrf
      <div class="flex flex-col gap-2">
        <label for="">Họ và tên</label>
        <input class="border rounded p-2" name="name" type="text">
      </div>
      <div class="flex flex-col gap-2">
        <label for="">Tài khoản</label>
        <input class="border rounded p-2" name="email" type="text">
      </div>
      <div class="flex flex-col gap-2">
        <label for="">Mật khẩu</label>
        <input class="border rounded p-2" name="password" type="text">
      </div>
      <button class="bg-sky-500 p-2 text-white rounded shadow mt-2" type="submit">Đăng ký</button>
    </form>
    {{-- Check lỗi --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>
  <div class="text-center mt-2">
    <span>Đã có tài khoản? <a class="hover:text-cyan-500" href="/login">Đăng nhập</a></span>
  </div>

  {{-- Javascrip --}}
  {{-- <script type="text/javascript">
    const axios = require('axios').default;
    document.addEventListener('DOMContentLoaded', () => {
      const registerForm = document.getElementById('register-form');
      registerForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(registerForm);
        axios.post('/register', formData)
          .then((res) => {
            console.log(res);
            // if (res.data.status === 'success') {
            //   window.location.href = '/';
            // }
          })
          .catch((err) => {
            console.log(err);
          })
      })
    })
  </script> --}}
@endsection
