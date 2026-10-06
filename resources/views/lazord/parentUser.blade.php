<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>لازورد — مختبر الأسنان الرقمي</title>
  <link rel="stylesheet" href="{{ asset('lazord/style.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Tajawal:wght@300;400;500;700;800&display=swap"
    rel="stylesheet" />
</head>

<body>

  <!-- NAVBAR -->
  <header class="navbar">
    <div class="nav-container">
      <a href="{{ route("learn") }}" class="logo">لازورد</a>
      <nav class="nav-links">
        <a href="{{ route('why-lazord') }}">لماذا لازورد</a>
        <a href="{{ route('lab-services') }}">خدمات المختبرات</a>
        <a href="{{ route('solutions') }}">الحلول</a>
        <a href="{{ route('pricing') }}">التسعير</a>
        <a href="{{ route('learn') }}">التعلم</a>
      </nav>
      <div class="nav-actions">
        {{-- <span class="phone">هاتف: +(970)0594866148</span> --}}
        
        @auth
        <span>أهلاً، {{ Auth::user()->name }}</span>
    
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn-login" style="background-color: #dc3545; color: #fff; border: none; padding: 8px 16px; border-radius: 5px; cursor: pointer;">تسجيل الخروج</button>        </form>
    @endauth

      </div>
      <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="القائمة">
        <span></span><span></span><span></span>
      </button>
    </div>
    <div class="mobile-menu" id="mobileMenu">
      <a href="{{ route('why-lazord') }}">لماذا لازورد</a>
        <a href="{{ route('lab-services') }}">خدمات المختبرات</a>
        <a href="{{ route('solutions') }}">الحلول</a>
        <a href="{{ route('pricing') }}">التسعير</a>
        <a href="{{ route('learn') }}">التعلم</a>
      <a href="{{ route('pricing') }}" class="btn-cta mobile-cta">ابدأ الآن</a>
    </div>
  </header>


@yield('content')

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container footer-container">
      <div class="footer-cta">
        <h3>هل مازلت تأخذ الانطباعات الجسدية؟</h3>
        <p>نقدم لك كل ما تحتاجه لبدء ذلك في طب الأسنان الرقمي محلياً — بما في ذلك الماسح الضوئي داخل الفم.</p>
        <a href="pricing.html" class="btn-cta-footer">ابدأ</a>
      </div>
      <div class="footer-links">
        <div class="footer-col">
          <h4>لازورد</h4>
          <ul>
            <li><a href="why-lazord.html">لماذا لازورد</a></li>
            <li><a href="lab-services.html">خدمات المختبرات</a></li>
            <li><a href="#">وظائف</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>منتجات</h4>
          <ul>
            <li><a href="lab-services.html">منتجات</a></li>
            <li><a href="lab-services.html">أطقم والمسح</a></li>
            <li><a href="lab-services.html">حلول رعاية الأسنان</a></li>
            <li><a href="lab-services.html">أدوات رقمية</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>ممارسات</h4>
          <ul>
            <li><a href="solutions.html">الحلول</a></li>
            <li><a href="why-lazord.html">لماذا لازورد</a></li>
            <li><a href="pricing.html">التسعير</a></li>
            <li><a href="login.html">تسجيل الدخول</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>موارد</h4>
          <ul>
            <li><a href="learn.html">التعلم</a></li>
            <li><a href="learn.html">دراسات الحالة</a></li>
            <li><a href="learn.html">مدونة</a></li>
            <li><a href="pricing.html">تواصل معنا</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p>© 2024 لازورد — جميع الحقوق محفوظة</p>
        <div class="footer-legal"><a href="#">سياسة الخصوصية</a><a href="#">شروط الاستخدام</a><a
            href="pricing.html">تواصل معنا</a></div>
      </div>
    </div>
  </footer>

  <script src="{{asset('lazord/script.js')}}"></script>
</body>

</html>