<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maison Belle | Güzellik Stüdyosu</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: "DM Sans", sans-serif; }
    h1,h2,h3,.serif { font-family: "Playfair Display", serif; }
    html { scroll-behavior: smooth; }
  </style>
</head>
<body class="bg-[#f8f5f0] text-[#302821]">

  <header class="sticky top-0 z-50 border-b border-[#e8ded4] bg-[#f8f5f0]/95 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
      <a href="#" class="serif text-2xl">maison belle<span class="text-[#bd897b]">.</span></a>
      <nav class="hidden gap-7 text-sm md:flex">
        <a href="#hakkimizda">Hakkımızda</a>
        <a href="#hizmetler">Hizmetler</a>
        <a href="#galeri">Galeri</a>
        <a href="#iletisim">İletişim</a>
      </nav>
      <a href="#randevu" class="bg-[#302821] px-5 py-3 text-xs tracking-wider text-white hover:bg-[#bd897b]">RANDEVU AL ↗</a>
    </div>
  </header>

  <main>
    <section class="relative flex min-h-[620px] items-center bg-cover bg-center text-white"
      style="background-image:linear-gradient(90deg,rgba(30,22,18,.75),rgba(30,22,18,.12)),url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1800&q=85')">
      <div class="mx-auto w-full max-w-7xl px-6 py-24">
        <p class="mb-6 text-xs tracking-[.3em] text-[#edc9bc]">SENİN GÜZELLİK RİTÜELİN</p>
        <h1 class="max-w-3xl text-5xl leading-tight sm:text-7xl">
          Güzelliğin<br><span class="italic text-[#edc9bc]">sana özel</span> hali.
        </h1>
        <p class="mt-7 max-w-lg text-sm leading-7 text-white/80">
          Kendine zaman ayır, güzelliğini keşfet. Sana özel bakım deneyimleriyle kendini yeniden iyi hisset.
        </p>
        <div class="mt-9 flex flex-wrap gap-4">
          <a href="#randevu" class="bg-[#f8f5f0] px-7 py-4 text-xs tracking-wider text-[#302821] hover:bg-[#edc9bc]">RANDEVU OLUŞTUR ↗</a>
          <a href="#hizmetler" class="border border-white/60 px-7 py-4 text-xs tracking-wider hover:bg-white/10">HİZMETLERİ KEŞFET</a>
        </div>
      </div>
    </section>

    <section id="hakkimizda" class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-24 md:grid-cols-2 md:py-32">
      <img class="h-[480px] w-full object-cover" loading="lazy"
        src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?auto=format&fit=crop&w=900&q=85"
        alt="Güzellik ve bakım">
      <div>
        <p class="mb-5 text-xs tracking-[.25em] text-[#bd897b]">HİKÂYEMİZ</p>
        <h2 class="text-4xl leading-tight sm:text-5xl">Güzellik bir standart değil,<br><i class="text-[#bd897b]">senin hikâyen.</i></h2>
        <p class="mt-7 text-sm leading-8 text-[#796d63]">
          Her cildin, her yüzün ve her insanın farklı olduğuna inanıyoruz.
          Bu yüzden sana özel, ihtiyaçlarına uygun bir güzellik deneyimi sunuyoruz.
          Bizim için güzellik yalnızca görünüş değil, kendini iyi hissetmektir.
        </p>
        <a href="#randevu" class="mt-8 inline-block border-b border-[#bd897b] pb-2 text-sm">BİZİ TANI ↗</a>
      </div>
    </section>

    <section id="hizmetler" class="bg-[#eee7df] px-6 py-24">
      <div class="mx-auto max-w-7xl">
        <div class="mb-12">
          <p class="mb-4 text-xs tracking-[.25em] text-[#bd897b]">SANA ÖZEL DOKUNUŞLAR</p>
          <h2 class="text-4xl sm:text-5xl">Bakım ritüellerimiz.</h2>
        </div>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          <article class="bg-[#f8f5f0]">
            <img class="h-64 w-full object-cover" loading="lazy" src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=600&q=80" alt="Cilt bakımı">
            <div class="p-6">
              <p class="text-xs text-[#bd897b]">01 / CİLT</p>
              <h3 class="mt-3 text-2xl">Cilt Bakımı</h3>
              <p class="mt-3 text-sm leading-6 text-[#796d63]">Cildinin ihtiyaçlarına yönelik özel bakım uygulamaları.</p>
              <a href="#randevu" class="mt-5 inline-block text-sm underline underline-offset-4">Randevu al ↗</a>
            </div>
          </article>
          <article class="bg-[#f8f5f0]">
            <img class="h-64 w-full object-cover" loading="lazy" src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?auto=format&fit=crop&w=600&q=80" alt="Kaş ve kirpik">
            <div class="p-6">
              <p class="text-xs text-[#bd897b]">02 / BAKIŞ</p>
              <h3 class="mt-3 text-2xl">Kaş & Kirpik</h3>
              <p class="mt-3 text-sm leading-6 text-[#796d63]">Doğal görünümünü öne çıkaran zarif dokunuşlar.</p>
              <a href="#randevu" class="mt-5 inline-block text-sm underline underline-offset-4">Randevu al ↗</a>
            </div>
          </article>
          <article class="bg-[#f8f5f0]">
            <img class="h-64 w-full object-cover" loading="lazy" src="https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&w=600&q=80" alt="Manikür">
            <div class="p-6">
              <p class="text-xs text-[#bd897b]">03 / DETAY</p>
              <h3 class="mt-3 text-2xl">El & Tırnak</h3>
              <p class="mt-3 text-sm leading-6 text-[#796d63]">Bakımlı eller ve stilini tamamlayan tırnaklar.</p>
              <a href="#randevu" class="mt-5 inline-block text-sm underline underline-offset-4">Randevu al ↗</a>
            </div>
          </article>
          <article class="bg-[#f8f5f0]">
            <img class="h-64 w-full object-cover" loading="lazy" src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=600&q=80" alt="Bakım ve rahatlama">
            <div class="p-6">
              <p class="text-xs text-[#bd897b]">04 / RAHATLAMA</p>
              <h3 class="mt-3 text-2xl">Bakım Ritüeli</h3>
              <p class="mt-3 text-sm leading-6 text-[#796d63]">Kendine ayırabileceğin huzurlu bir bakım zamanı.</p>
              <a href="#randevu" class="mt-5 inline-block text-sm underline underline-offset-4">Randevu al ↗</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="galeri" class="px-6 py-24">
      <div class="mx-auto max-w-7xl">
        <p class="mb-4 text-xs tracking-[.25em] text-[#bd897b]">GÜZELLİĞİN DETAYLARI</p>
        <h2 class="mb-10 text-4xl sm:text-5xl">Stüdyomuzdan kareler.</h2>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
          <img class="h-72 w-full object-cover" loading="lazy" src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?auto=format&fit=crop&w=600&q=80" alt="Salon iç mekânı">
          <img class="mt-8 h-72 w-full object-cover" loading="lazy" src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?auto=format&fit=crop&w=600&q=80" alt="Bakım uygulaması">
          <img class="h-72 w-full object-cover" loading="lazy" src="https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&w=600&q=80" alt="Tırnak bakımı">
          <img class="mt-8 h-72 w-full object-cover" loading="lazy" src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?auto=format&fit=crop&w=600&q=80" alt="Güzellik portresi">
        </div>
      </div>
    </section>

    <section class="bg-[#d9b9ad] px-6 py-20 text-center">
      <p class="mb-5 text-xs tracking-[.25em]">MAISON BELLE FELSEFESİ</p>
      <h2 class="text-3xl leading-relaxed sm:text-5xl">Kendine gösterdiğin özen,<br><i>dünyaya yansıyan ışığındır.</i></h2>
    </section>

    <section id="randevu" class="scroll-mt-20 bg-[#302821] px-6 py-24 text-white">
      <div class="mx-auto grid max-w-7xl gap-12 md:grid-cols-2">
        <div>
          <p class="mb-5 text-xs tracking-[.25em] text-[#d9b9ad]">KENDİNE ZAMAN AYIR</p>
          <h2 class="text-4xl leading-tight sm:text-6xl">Güzel hissetmeye<br><i class="text-[#d9b9ad]">hazır mısın?</i></h2>
          <p class="mt-6 max-w-md text-sm leading-7 text-white/65">Randevu talebini gönder, sana uygun bir zaman planlayalım.</p>
          <p class="mt-10 text-sm text-white/60">Telefon / WhatsApp</p>
          <p class="mt-2">+90 5XX XXX XX XX</p>
          <p class="mt-6 text-sm text-white/60">Adres</p>
          <p class="mt-2">Salon adresini buraya yaz</p>
        </div>

        <form id="bookingForm" class="space-y-5 border border-white/15 p-6 sm:p-9">
          <h3 class="text-2xl">Randevu talebi</h3>
          <div>
            <label for="name" class="mb-2 block text-sm">Adın soyadın</label>
            <input id="name" required class="w-full border border-white/20 bg-white/5 p-3 outline-none focus:border-[#d9b9ad]" placeholder="Adını yaz">
          </div>
          <div>
            <label for="phone" class="mb-2 block text-sm">Telefon numaran</label>
            <input id="phone" required type="tel" class="w-full border border-white/20 bg-white/5 p-3 outline-none focus:border-[#d9b9ad]" placeholder="05XX XXX XX XX">
          </div>
          <div>
            <label for="service" class="mb-2 block text-sm">Hizmet seç</label>
            <select id="service" required class="w-full border border-white/20 bg-[#302821] p-3 outline-none">
              <option value="">Seçiniz</option>
              <option>Cilt Bakımı</option>
              <option>Kaş & Kirpik</option>
              <option>El & Tırnak</option>
              <option>Bakım Ritüeli</option>
            </select>
          </div>
          <div>
            <label for="date" class="mb-2 block text-sm">Tercih edilen tarih</label>
            <input id="date" type="date" class="w-full border border-white/20 bg-[#302821] p-3 outline-none">
          </div>
          <button class="w-full bg-[#d9b9ad] p-4 text-xs tracking-widest text-[#302821] hover:bg-[#edcfc3]">WHATSAPP'TAN GÖNDER ↗</button>
          <p class="text-xs leading-5 text-white/50">Randevun, salonla iletişim kurup saat teyidi yaptığında kesinleşir.</p>
        </form>
      </div>
    </section>
  </main>

  <footer class="px-6 py-8">
    <div class="mx-auto flex max-w-7xl flex-col justify-between gap-4 text-xs text-[#83776d] sm:flex-row">
      <p>© <span id="year"></span> Maison Belle Beauty Studio</p>
      <a href="#" class="underline underline-offset-4">Başa dön ↑</a>
    </div>
  </footer>

  <a href="https://wa.me/905XXXXXXXXX" aria-label="WhatsApp" class="fixed bottom-5 right-5 rounded-full bg-[#302821] px-5 py-4 text-sm text-white shadow-xl hover:bg-[#bd897b]">WhatsApp ↗</a>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();

    // BURAYA KENDİ WHATSAPP NUMARANI YAZ.
    // Örnek biçim: 905XXXXXXXXX (artı işareti ve boşluk kullanma)
    const WHATSAPP = "905XXXXXXXXX";

    document.getElementById("bookingForm").addEventListener("submit", function(e) {
      e.preventDefault();

      if (WHATSAPP.includes("X")) {
        alert("Lütfen HTML kodundaki WHATSAPP değişkenine kendi numaranı yaz.");
        return;
      }

      const name = document.getElementById("name").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const service = document.getElementById("service").value;
      const date = document.getElementById("date").value || "Belirtilmedi";

      const message =
        "Merhaba, randevu almak istiyorum.\n" +
        "Ad Soyad: " + name + "\n" +
        "Telefon: " + phone + "\n" +
        "Hizmet: " + service + "\n" +
        "Tarih: " + date;

      window.open(
        "https://wa.me/" + WHATSAPP + "?text=" + encodeURIComponent(message),
        "_blank",
        "noopener,noreferrer"
      );
    });
  </script>
</body>
</html>
