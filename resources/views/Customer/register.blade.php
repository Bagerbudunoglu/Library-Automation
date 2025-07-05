@extends('Customer.Layout_')

@section('title')
    Register
@endsection

@section('content')
<style>
.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}


.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-size: 0.9rem;
    color: #333;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    color: #555;
}

input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

button {
    display: block;
    width: 100%;
    padding: 12px;
    font-size: 1rem;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

a {
    display: block;
    text-align: center;
    font-size: 0.9rem;
    color: #007bff;
    text-decoration: none;
    margin-top: 10px;
}

a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .container {
        margin: 20px auto;
        padding: 15px;
    }

    h3, h5 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    button {
        font-size: 0.9rem;
        padding: 10px;
    }
}
</style>
    <div class="row mt-3">
        <h3>
            <i class="fas fa-user-plus"></i>
            Kayıt Ol
        </h3>
    </div>
    <hr>
    <div class="row mt-1">
        <h5>
            Lütfen sistemimize kayıt olun.
        </h5>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('components.FlashMessage')
            <form method="POST" action="{{route("customer-register-post")}}">
                @csrf
                <div class="form-group">
                    <label for="first_name">Ad</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Soyad</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-posta</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Şifre</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary w-100">
                        Kayıt Ol
                    </button>
                </div>
                <div class="form-group mt-1">
                    <a href="#" class="text-dark">Zaten Üye misiniz? Giriş Yapın</a>
                </div>
            </form>
        </div>
    </div>
@endsection
