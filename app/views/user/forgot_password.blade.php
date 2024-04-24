@extends('layout.main')
@section('content')
<div class="modal">
    <div class="modal__overlay"></div>
    <div class="modal__body">
        <div class="auth-form">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth__heading">Quên mật khẩu</h3>
                    <a href="login.html" style="text-decoration: none;" class="auth-form__switch-btn">Đăng
                        nhập</a>
                </div>
                <form action="" method="POST">
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" name="email" placeholder="Nhập email của bạn" class="auth-form__input">
                            <span style="color: red;">
                                <?= isset($ValidC["email"]) ? $ValidC["email"] : "" ?>
                            </span>
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Lưu ý!Bạn phải sở hữu email trong hệ thống
                        </p>
                    </div>
                    <div class="auth-form__controls">
                        <a href="../index.html" class="btn auth-form__controls-back btn--nomals">TRỞ VỀ</a>
                        <button type="submit" name="guimatkhau" class="btn btn--primary">GỬI MẬT KHẨU</button>
                    </div>
                </form>
            </div>
            <div class="auth-form__socials">
            </div>
        </div>
    </div>
</div>
@endsection