# Kütüphane Otomasyon Sistemi - Laravel Projesi

Bu proje, Laravel framework'ü kullanılarak geliştirilmiş temel bir kütüphane otomasyon sistemidir. Sistemde kitapların yönetimi, ödünç alma/iade işlemleri ve kullanıcı yönetimi gibi temel özellikler bulunmaktadır.

## Özellikler

### Kullanıcılar İçin
- Kitap arama ve görüntüleme
- Kitap ödünç alma
- Ödünç alınan kitapları iade etme
- Kullanıcı profili yönetimi

### Yöneticiler İçin
- Kitap ekleme/düzenleme/silme
- Kullanıcı yönetimi
- Ödünç alma/iade işlemlerini yönetme
- Raporlar ve istatistikler

## Kurulum

1. Depoyu klonlayın:
```bash
git clone https://github.com/sizin-kullanici-adiniz/kutuphane-otomasyon.git
cd kutuphane-otomasyon
```

2. Gerekli bağımlılıkları yükleyin:
```bash
composer install
```

3. `.env` dosyasını oluşturun ve ayarları yapılandırın:
```bash
cp .env.example .env
```

4. Uygulama anahtarını oluşturun:
```bash
php artisan key:generate
```

5. Veritabanını yapılandırın ve migration'ları çalıştırın:
```bash
php artisan migrate --seed
```

6. Geliştirme sunucusunu başlatın:
```bash
php artisan serve
```

## Kullanılan Teknolojiler

- Laravel 10.x
- MySQL
- Bootstrap (Frontend)
- Laravel Breeze (Authentication)

## Katkıda Bulunma

Katkıda bulunmak isterseniz lütfen bir pull request gönderin. Büyük değişiklikler için önce bir issue açarak neyi değiştirmek istediğinizi tartışalım.

## Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasına bakın.

