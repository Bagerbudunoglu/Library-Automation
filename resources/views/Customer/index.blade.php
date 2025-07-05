@extends('Customer.Layout_')


@section('title')
    Anasayfa
@endsection
@section('content')
<style>.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 15px;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.card-img-top {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    max-height: 180px;
    object-fit: cover;
}

.card-body {
    padding: 1rem;
}

.card-footer {
    border-top: 1px solid #f0f0f0;
}
</style>
    <div class="row mt-3 text-center">
        <h3 class="fw-bold text-primary">Kütüphane Uygulaması</h3>
    </div>
    <hr>
    @include('components.FlashMessage')
    <div class="row mt-1">
        <h5 class="fw-bold text-secondary">Mevcut Kitaplar</h5>
    </div>
    <div class="row mt-3 g-4">
        @foreach ($books as $item)
            <div class="col-md-4 col-lg-3">
                <div class="card shadow-lg border-0">
                    <div class="position-relative">
                        <img src="{{ asset('uploads_book_img/'.$item->book_img) }}" class="card-img-top img-fluid" alt="{{ $item->title }}">
                        <div class="position-absolute top-0 start-0 m-2">
                            <span class="badge bg-primary p-2"><i class="fas fa-book"></i> {{ $item->title }}</span>
                        </div>
                    </div>
                    <div class="card-body bg-light">
                        <h5 class="card-title text-dark fw-bold">{{ $item->author }}</h5>
                        <p class="card-text text-muted">{{ mb_substr(ucwords($item->content), 0, 100) }}...</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="badge bg-warning text-dark p-2">
                                Stok: {{ $item->stock }}
                            </span>
                            @if (Auth::check())
                                <form action="{{ route('customer-kitabi-talep-et') }}" method="post" class="m-0">
                                    @csrf
                                    <input type="hidden" name="book_id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-plus"></i> Talep Et
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer text-end bg-white">
                        <small class="text-muted">
                            <i class="fas fa-clock"></i> {{ $item->created_at }}
                        </small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection


