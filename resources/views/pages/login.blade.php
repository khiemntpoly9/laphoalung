@extends('layouts.default')
@section('title', 'Đăng nhập')

@section('content')
  <div class="box-login w-1/4 m-auto">
    <form class="flex flex-col" action="/login" method="POST">
      <div class="flex flex-col gap-2">
        <label for="">Tài khoản</label>
        <input class="border rounded p-2" name="email" type="text">
      </div>
      <div class="flex flex-col gap-2">
        <label for="">Mật khẩu</label>
        <input class="border rounded p-2" name="text" type="text">
      </div>
      <button class="bg-sky-500 p-2 text-white rounded shadow mt-2" type="submit">Đăng nhập</button>
    </form>
  </div>
  <div class="text-center mt-2">
    <span>Chưa có tài khoản? <a class="hover:text-cyan-500" href="/register">Đăng ký</a></span>
  </div>
@endsection
