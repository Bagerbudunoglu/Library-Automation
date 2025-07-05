@extends('Customer.Layout_')


@section('title')
    Login
@endsection

@section('content')
<style>/* Genel Gövde Ayarları */
/* Başlıklar */

/* Form Konteyneri */
form {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    padding: 30px;
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    position: relative;
}

/* Giriş Alanları */
form .form-group {
    margin-bottom: 20px;
}

form .form-group label {
    font-weight: 500;
    color: #555;
    margin-bottom: 8px;
    display: block;
}

form .form-control {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px 15px;
    font-size: 0.9rem;
    width: 100%;
    transition: border-color 0.3s ease;
}

form .form-control:focus {
    border-color: #42a5f5;
    box-shadow: 0px 0px 4px rgba(66, 165, 245, 0.5);
    outline: none;
}

/* Giriş Yap Butonu */
form .btn-primary {
    background-color: #42a5f5;
    border: none;
    font-size: 1rem;
    padding: 10px 20px;
    border-radius: 5px;
    color: #fff;
    transition: background-color 0.3s ease;
}

form .btn-primary:hover {
    background-color: #6c63ff;
}

/* Alt Metin */
form .form-group.mt-1 a {
    color: #42a5f5;
    text-decoration: none;
    font-size: 0.9rem;
}

form .form-group.mt-1 a:hover {
    text-decoration: underline;
}

/* Genel Stil ve Renk Paleti */
hr {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.row {
    margin-bottom: 15px;
}

/* Mobil ve Küçük Ekranlar */
@media (max-width: 768px) {
    form {
        padding: 20px;
    }

    h3 {
        font-size: 1.5rem;
    }
}
</style>

    <div class="row mt-3 ">
        <h3>
            <i class="fas fa-user    "></i>
            Giriş Yap
        </h3>
    </div>
    <hr>
    <div class="row mt-1">
        <h5>
            Lütfen sistemimize giriş yapın.
        </h5>
    </div>
    <div class="row">
        <div class="col-md-6">
            @include('components.FlashMessage')
            <form method="POST" action="{{route("customer-login-post")}}">
                @csrf
                <div class="form-group">
                    <label for="email">
                        E-posta</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Şifre</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary w-100">
                        Giriş Yap
                    </button>
                </div>
                <div class="form-group mt-1">
                    <a href="#" class="text-dark">Üye Değil misiniz ? </a>
                </div>
            </form>
        </div>
    </div>
@endsection
