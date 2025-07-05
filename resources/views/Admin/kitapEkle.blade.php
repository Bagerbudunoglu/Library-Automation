@extends('Admin.layout_')

@section('title')
    Kitap Ekle | {{ Auth::user()->name }}
@endsection


@section('content')
<style>/* Genel Form Stilleri */
form {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Form Başlıkları */
form .form-label {
    font-weight: bold;
    color: #495057;
}

/* Form Giriş Alanları */
form .form-control, form .form-select {
    border: 1px solid #ced4da;
    border-radius: 6px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

form .form-control:focus, form .form-select:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Form Butonları */
form .btn-primary {
    background-color: #007bff;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 6px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

form .btn-primary:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}

/* Seçenek Alanları */
form select.form-select {
    background-color: #f8f9fa;
    font-size: 1rem;
    padding: 0.5rem;
}

/* Dosya Yükleme Alanı */
form input[type="file"] {
    border: 1px dashed #ced4da;
    padding: 1rem;
    background-color: #f8f9fa;
    transition: border-color 0.3s ease;
}

form input[type="file"]:focus {
    border-color: #007bff;
}

/* Hata Mesajları */
form .is-invalid {
    border-color: #dc3545;
    background-color: #fff5f5;
}

form .invalid-feedback {
    color: #dc3545;
    font-size: 0.875rem;
}
</style>
    <div class="row">
        <h1>
            Kitap Ekle
        </h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <form action="{{route("admin-kitap-ekle")}}" method="POST" enctype="multipart/form-data">
                <!-- CSRF Token -->
                @csrf
                <div class="mb-3">
                    <label for="category_id" class="form-label">Kategori</label>
                    <select class="form-select" id="category_id" name="category_id" required>
                        <option selected disabled>Bir kategori seçin...</option>
                        <!-- Kategoriler buraya dinamik olarak gelecek -->
                        @foreach ($Categories as $item)
                            <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Başlık</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Kitap başlığı"
                        required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">İçerik</label>
                    <textarea class="form-control" id="content" name="content" rows="4" placeholder="Kitap içeriği"></textarea>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Yazar</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Kitap yazarı"
                        required>
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Stok miktarı"
                        min="0" required>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Yayın Evi</label>
                    <select class="form-select" id="category_id" name="publishing_id" required>
                        <option selected disabled>Bir Yayın Evi seçin...</option>
                        <!-- Kategoriler buraya dinamik olarak gelecek -->
                        @foreach ($Publishings as $item)
                            <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="book_img" class="form-label">Kitap Görseli</label>
                    <input type="file" class="form-control" id="book_img" name="book_img" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>
@endsection
