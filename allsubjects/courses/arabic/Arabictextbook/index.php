<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>ورقة غش · Eduqii v2.0</title>
    <link rel="shortcut icon" href="../../../images/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cheatsheet-rtl/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cheatsheet.rtl.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
  <div class="container-fluid d-flex align-items-center">
    <h1 class="d-flex align-items-center fs-4 text-white mb-0">
      <img src="assets/brand/maths-logo.jpg" width="38" height="30" class="me-3" alt="Bootstrap">
      ورقة غش
    </h1>
    <a href="../examples/cheatsheet/" class="ms-auto link-light" hreflang="en">جدول بيانات LTR</a>
  </div>
</header>
<aside class="bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">
  <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">على هذه الصفحة</h2>
  <nav class="small" id="toc">
    <ul class="list-unstyled">
      <li class="my-2">
        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">محتويات</button>
        <ul class="list-unstyled ps-3 collapse" id="contents-collapse">
          <li><a class="d-inline-flex align-items-center rounded" href="#typography">الطباعة</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#images">صور</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#tables">جدول</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#figures">رقم</a></li>
        </ul>
      </li>
      <li class="my-2">
        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse" aria-controls="forms-collapse">نماذج</button>
        <ul class="list-unstyled ps-3 collapse" id="forms-collapse">
          <li><a class="d-inline-flex align-items-center rounded" href="#overview">نظرة عامة</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#disabled-forms">أشكال المعطلين</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#sizing">تحجيم</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#input-group">مجموعة الإدخال</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#floating-labels">تسميات عائمة</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#validation">التحقق</a></li>
        </ul>
      </li>
      <li class="my-2">
        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#components-collapse" aria-controls="components-collapse">مكونات</button>
        <ul class="list-unstyled ps-3 collapse" id="components-collapse">
          <li><a class="d-inline-flex align-items-center rounded" href="#accordion">الأكورديون</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#alerts">إنذار</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#badge">شارة</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#breadcrumb">مسار التنقل</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#buttons">أزرار</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#button-group">مجموعة الأزرار</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#card">بطاقة</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#carousel">شرائح عرض</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#dropdowns">هبوط قطرة</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#list-group">مجموعة القوائم</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#modal">مشروط</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#navs">التنقل</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#navbar">شريط التنقل</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#pagination">ترقيم الصفحات</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#popovers">بوبوفيرس</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#progress">شريط التقدم</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#scrollspy">مخطوطة</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#spinners">المغازل</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#toasts">نخب</a></li>
          <li><a class="d-inline-flex align-items-center rounded" href="#tooltips">تلميحات الأدوات</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</aside>
<div class="bd-cheatsheet container-fluid bg-white">
  <section id="content">
    <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">محتويات</h2>

    <article class="my-3" id="typography">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>الطباعة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../content/typography/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <p class="display-1">العرض 1</p>
        <p class="display-2">العرض 2</p>
        <p class="display-3 ">العرض 3</p>
        <p class="display-4">العرض 4</p>
        <p class="display-5">العرض 5</p>
        <p class="display-6">العرض 6</p>
        </div>

        <div class="bd-example">
        <p class="h1">عنوان 1</p>
        <p class="h2">عنوان 2</p>
        <p class="h3">عنوان 3</p>
        <p class="h4">عنوان 4</p>
        <p class="h5">عنوان 5</p>
        <p class="h6">عنوان 6</p>
        </div>

        <div class="bd-example">
        <p class="lead">
          حيث وبدون الساحة وقوعها، أي, فقد عل مكّن تمهيد قتيل،. ولم والحزب الشرقي و, أضف بالفشل الخاسر استمرار ان. كل أما وحرمان للإتحاد, ٣٠ سبتمبر استعملت جهة, لعملة الثقيلة المتاخمة على لم. أي نفس دارت والفلبين.
        </p>
        </div>

        <div class="bd-example">
        <p>يمكنك استخدام علامة <mark>العلامة</mark> لتحديد نص .</p>
        <p><del>من المفترض أن يتم التعامل مع هذا السطر كنص محذوف.</del></p>
        <p><s>من المفترض أن يتم التعامل مع هذا السطر على أنه لم يعد دقيقًا.</s></p>
        <p><ins>من المفترض أن يتم التعامل مع هذا السطر كإضافة إلى المستند.</ins></p>
        <p><u>سيتم عرض هذا السطر كما هو مسطر.</u></p>
        <p><small>من المفترض أن يتم التعامل مع هذا السطر على أنه طباعة جيدة.</small></p>
        <p><strong>تم تقديم هذا السطر كنص عريض.</strong></p>
        <p><em>تم تقديم هذا السطر كنص مائل.</em></p>
        </div>

        <div class="bd-example">
        <blockquote class="blockquote">
          <p>بين كرسي والمعدات بالولايات تم. الذود اتّجة التقليدية يتم و, حيث وقرى.</p>
          <footer class="blockquote-footer">شخص مشهور في <cite title= "عنوان المصدر"> عنوان المصدر </cite></footer>
        </blockquote>
        </div>

        <div class="bd-example">
        <ul class="list-unstyled">
          <li>معقل الطريق واقتصار أم قام.</li>
          <li>أمّا ولكسمبورغ ثم جُل, هو.</li>
          <li>ان وبحلول لمحاكم الخارجية ومن.</li>
          <li>بها بل العظمى إيطاليا الساحلية.</li>
          <li>مدن قد وبحلول وأكثرها الدنمارك.
            <ul>
              <li>به، المشترك إتفاقية.</li>
              <li>لإعادة الواقعة و.</li>
              <li>وترك وانتهاءً ضرب.</li>
              <li>الشتاء العالم، أي.</li>
            </ul>
          </li>
          <li>ودول يتسنّى بتطويق لمّ في.</li>
          <li>بعض و مرمى يتسنّى, في.</li>
          <li>أسيا اعلان ومحاولة عل انه.</li>
        </ul>
        </div>

        <div class="bd-example">
        <ul class="list-inline">
          <li class="list-inline-item">لمّ مع.</li>
          <li class="list-inline-item">أم دون.</li>
          <li class="list-inline-item">ذات بل.</li>
        </ul>
        </div>
      </div>
    </article>
    <article class="my-3" id="images">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>صور</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../content/images/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مستجيبة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">صورة مستجيبة</text></svg>

        </div>

        <div class="bd-example">
        <svg class="bd-placeholder-img img-thumbnail" width="200" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="صورة عنصر نائب مربع عام مع حدود بيضاء حولها ، مما يجعلها تشبه صورة تم التقاطها بكاميرا فورية قديمة: 200x200" preserveAspectRatio="xMidYMid slice" focusable="false"><title>صورة عنصر نائب مربع عام مع حدود بيضاء حولها ، مما يجعلها تشبه صورة تم التقاطها بكاميرا فورية قديمة</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">200x200</text></svg>

        </div>
      </div>
    </article>
    <article class="my-3" id="tables">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>جدول</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../content/tables/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم الاول</th>
            <th scope="col">الكنية</th>
            <th scope="col">اسم مستعار</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          </tbody>
        </table>
        </div>

        <div class="bd-example">
        <table class="table table-dark table-borderless">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم الاول</th>
            <th scope="col">الكنية</th>
            <th scope="col">اسم مستعار</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          </tbody>
        </table>
        </div>

        <div class="bd-example">
        <table class="table table-hover">
          <thead>
          <tr>
            <th scope="col">Class</th>
            <th scope="col">عنوان</th>
            <th scope="col">عنوان</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">Default</th>
            <td>زنزانة</td>
            <td>زنزانة</td>
          </tr>
          
          <tr class="table-primary">
            <th scope="row">Primary</th>
            <td>زنزانة</td>
            <td>زنزانة</td>
          </tr>
          <tr class="table-secondary">
            <th scope="row">Secondary</th>
            <td>زنزانة</td>
            <td>زنزانة</td>
          </tr>
          <tr class="table-success">
            <th scope="row">Success</th>
            <td>زنزانة</td>
            <td>زنزانة</td>
          </tr>
          <tr class="table-danger">
            <th scope="row">Danger</th>
            <td>زنزانة</td>
            <td>زنزانة</td>
          </tr>
          <tr class="table-warning">
            <th scope="row">Warning</th>
            <td>زنزانة</td>
            <td>زنزانة</td>
          </tr>
          <tr class="table-info">
            <th scope="row">Info</th>
            <td>زنزانة</td>
            <td>زنزانة</td>
          </tr>
          <tr class="table-light">
            <th scope="row">Light</th>
            <td>زنزانة</td>
            <td>زنزانة</td>
          </tr>
          <tr class="table-dark">
            <th scope="row">Dark</th>
            <td>زنزانة</td>
            <td>زنزانة</td>
          </tr>
          </tbody>
        </table>
        </div>

        <div class="bd-example">
        <table class="table table-sm table-bordered">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم الاول</th>
            <th scope="col">الكنية</th>
            <th scope="col">اسم مستعار</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          </tbody>
        </table>
        </div>
      </div>
    </article>
    <article class="my-3" id="figures">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>رقم</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../content/figures/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <figure class="figure">
          <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x300" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">400x300</text></svg>

          <figcaption class="figure-caption">شرح للصورة أعلاه.</figcaption>
        </figure>
        </div>
      </div>
    </article>
  </section>

  <section id="forms">
    <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">نماذج</h2>

    <article class="my-3" id="overview">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>نظرة عامة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../forms/overview/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">عنوان البريد الالكترونى</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">لن نشارك بريدك الإلكتروني مع أي شخص آخر.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">كلمه السر</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">تفقدني</label>
          </div>
          <fieldset class="mb-3">
            <legend>أزرار الراديو</legend>
            <div class="form-check">
              <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
              <label class="form-check-label" for="exampleRadio1">الراديو الافتراضي</label>
            </div>
            <div class="mb-3 form-check">
              <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
              <label class="form-check-label" for="exampleRadio2">راديو آخر</label>
            </div>
          </fieldset>
          <div class="mb-3">
            <label class="form-label" for="customFile">رفع</label>
            <input type="file" class="form-control" id="customFile">
          </div>
          <div class="mb-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">تم تحديد إدخال خانة الاختيار التبديل</label>
          </div>
          <div class="mb-3">
            <label for="customRange3" class="form-label">نطاق المثال</label>
            <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
          </div>
          <button type="submit" class="btn btn-primary">إرسال</button>
        </form>
        </div>
      </div>
    </article>
    <article class="my-3" id="disabled-forms">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>أشكال المعطلين</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../forms/overview/#disabled-forms">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <form>
          <fieldset disabled aria-label="مثال على مجموعة الحقول المعطلة">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">إدخال معطل</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="إدخال معطل">
            </div>
            <div class="mb-3">
              <label for="disabledSelect" class="form-label">حدد القائمة معطل</label>
              <select id="disabledSelect" class="form-select">
                <option>حدد معطل</option>
              </select>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                <label class="form-check-label" for="disabledFieldsetCheck">
                  لا يمكن التحقق من هذا
                </label>
              </div>
            </div>
            <fieldset class="mb-3">
              <legend>أزرار اختيار المعوقين</legend>
              <div class="form-check">
                <input type="radio" name="radios" class="form-check-input" id="disabledRadio1" disabled>
                <label class="form-check-label" for="disabledRadio1">راديو معطل</label>
              </div>
              <div class="mb-3 form-check">
                <input type="radio" name="radios" class="form-check-input" id="disabledRadio2" disabled>
                <label class="form-check-label" for="disabledRadio2">راديو آخر</label>
              </div>
            </fieldset>
            <div class="mb-3">
              <label class="form-label" for="disabledCustomFile">تحميل معطل</label>
              <input type="file" class="form-control" id="disabledCustomFile" disabled>
            </div>
            <div class="mb-3 form-check form-switch">
              <input class="form-check-input" type="checkbox" id="disabledSwitchCheckChecked" checked disabled>
              <label class="form-check-label" for="disabledSwitchCheckChecked">تم تعطيل إدخال خانة الاختيار التبديل</label>
            </div>
            <div class="mb-3">
              <label for="disabledRange" class="form-label">نطاق المعوقين</label>
              <input type="range" class="form-range" min="0" max="5" step="0.5" id="disabledRange">
            </div>
            <button type="submit" class="btn btn-primary">إرسال</button>
          </fieldset>
        </form>
        </div>
      </div>
    </article>
    <article class="my-3" id="sizing">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>تحجيم</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../forms/form-control/#sizing">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <div class="mb-3">
          <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg مثال">
        </div>
        <div class="mb-3">
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg مثال">
            <option selected>افتح قائمة التحديد هذه</option>
            <option value="1">واحد</option>
            <option value="2">اثنان</option>
            <option value="3">ثلاثة</option>
          </select>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control form-control-lg" aria-label="مثال على إدخال ملف كبير">
        </div>
        </div>

        <div class="bd-example">
        <div class="mb-3">
          <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm مثال">
        </div>
        <div class="mb-3">
          <select class="form-select form-select-sm" aria-label=".form-select-sm مثال">
            <option selected>افتح قائمة التحديد هذه</option>
            <option value="1">واحد</option>
            <option value="2">اثنان</option>
            <option value="3">ثلاثة</option>
          </select>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control form-control-sm" aria-label="مثال على إدخال ملف صغير">
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="input-group">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>مجموعة الإدخال</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../forms/input-group/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="اسم المستخدم" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="اسم مستخدم المستلم" aria-describedby="basic-addon2">
          <span class="input-group-text" id="basic-addon2">@example.com</span>
        </div>
        <label for="basic-url" class="form-label">عنوان URL المخصص الخاص بك</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">$</span>
          <input type="text" class="form-control" aria-label="المبلغ (لأقرب دولار)">
          <span class="input-group-text">.00</span>
        </div>
        <div class="input-group">
          <span class="input-group-text">مع textarea</span>
          <textarea class="form-control" aria-label="مع textarea"></textarea>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="floating-labels">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>تسميات عائمة</h3>
        <a class="d-flex align-items-center" href="../forms/floating-labels/">Documentation</a>
      </div>

      <div>
        <div class="bd-example">
        <form>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">عنوان بريد الكتروني</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="كلمه السر">
            <label for="floatingPassword">كلمه السر</label>
          </div>
        </form>
        </div>
      </div>
    </article>
    <article class="my-3" id="validation">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>التحقق</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../forms/validation/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <form class="row g-3">
          <div class="col-md-4">
            <label for="validationServer01" class="form-label">الاسم الاول</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
            <div class="valid-feedback">
              تبدو جيدا!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationServer02" class="form-label">الكنية</label>
            <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
            <div class="valid-feedback">
              تبدو جيدا!
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationServerUsername" class="form-label">اسم المستخدم</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend3">@</span>
              <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>
              <div class="invalid-feedback">
                يرجى اختيار اسم المستخدم.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationServer03" class="form-label">مدينة</label>
            <input type="text" class="form-control is-invalid" id="validationServer03" required>
            <div class="invalid-feedback">
              الرجاء إدخال مدينة صالحة.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationServer04" class="form-label">حالة</label>
            <select class="form-select is-invalid" id="validationServer04" required>
              <option selected disabled value="">أختر...</option>
              <option>...</option>
            </select>
            <div class="invalid-feedback">
              الرجاء تحديد ولاية صالحة.
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationServer05" class="form-label">الرمز البريدي</label>
            <input type="text" class="form-control is-invalid" id="validationServer05" required>
            <div class="invalid-feedback">
              الرجاء تقديم رمز بريدي صالح.
            </div>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
              <label class="form-check-label" for="invalidCheck3">
                وافق على الشروط والأحكام
              </label>
              <div class="invalid-feedback">
                يجب أن توافق قبل التقديم.
              </div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">تقديم النموذج</button>
          </div>
        </form>
        </div>
      </div>
    </article>
  </section>

  <section id="components">
    <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">مكونات</h2>

    <article class="my-3" id="accordion">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>انهيارالأكورديون</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/accordion/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                عنصر الأكورديون #1
              </button>
            </h4>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                أخر جمعت اليها وحرمان بـ, لمّ حالية الربيع، ثم, بل حين سكان الأراضي. من سكان الإتفاقية عدم, بقصف واعتلاء بل جهة, ولم وبعد المؤلّفة هو. أمدها واقتصار ويكيبيديا إذ بعد, الطرفين والعتاد عل قبل. أدنى المؤلّفة إذ عدم, وبعد الثالث في جهة.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                عنصر الأكورديون #2
              </button>
            </h4>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                أخر جمعت اليها وحرمان بـ, لمّ حالية الربيع، ثم, بل حين سكان الأراضي. من سكان الإتفاقية عدم, بقصف واعتلاء بل جهة, ولم وبعد المؤلّفة هو. أمدها واقتصار ويكيبيديا إذ بعد, الطرفين والعتاد عل قبل. أدنى المؤلّفة إذ عدم, وبعد الثالث في جهة.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                عنصر الأكورديون #3
              </button>
            </h4>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                أخر جمعت اليها وحرمان بـ, لمّ حالية الربيع، ثم, بل حين سكان الأراضي. من سكان الإتفاقية عدم, بقصف واعتلاء بل جهة, ولم وبعد المؤلّفة هو. أمدها واقتصار ويكيبيديا إذ بعد, الطرفين والعتاد عل قبل. أدنى المؤلّفة إذ عدم, وبعد الثالث في جهة.
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="alerts">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>إنذار</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/alerts/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          تنبيه primary بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
          تنبيه secondary بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          تنبيه success بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          تنبيه danger بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          تنبيه warning بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          تنبيه info بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-light alert-dismissible fade show" role="alert">
          تنبيه light بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
          تنبيه dark بسيط مع <a href="#" class="alert-link">رابط مثال</a>. أعطها نقرة إذا أردت.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="قريب"></button>
        </div>
        </div>

        <div class="bd-example">
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">أحسنت!</h4>
          <p>لقد نجحت في قراءة رسالة التنبيه المهمة هذه. سيتم تشغيل نص المثال هذا لفترة أطول قليلاً حتى تتمكن من رؤية كيفية عمل التباعد داخل التنبيه مع هذا النوع من المحتوى.</p>
          <hr>
          <p class="mb-0">كلما احتجت إلى ذلك ، تأكد من استخدام أدوات الهامش للحفاظ على الأشياء لطيفة ومرتبة.</p>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="badge">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>شارة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/badge/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <p class="h1">عنوان المثال <span class="badge bg-primary">جديد</span></p>
        <p class="h2">عنوان المثال <span class="badge bg-secondary">جديد</span></p>
        <p class="h3">عنوان المثال <span class="badge bg-success">جديد</span></p>
        <p class="h4">عنوان المثال <span class="badge bg-danger">جديد</span></p>
        <p class="h5">عنوان المثال <span class="badge bg-warning text-dark">جديد</span></p>
        <p class="h6">عنوان المثال <span class="badge bg-info text-dark">جديد</span></p>
        <p class="h6">عنوان المثال <span class="badge bg-light text-dark">جديد</span></p>
        <p class="h6">عنوان المثال <span class="badge bg-dark">جديد</span></p>
        </div>

        <div class="bd-example">
        
        <span class="badge rounded-pill bg-primary">Primary</span>
        <span class="badge rounded-pill bg-secondary">Secondary</span>
        <span class="badge rounded-pill bg-success">Success</span>
        <span class="badge rounded-pill bg-danger">Danger</span>
        <span class="badge rounded-pill bg-warning text-dark">Warning</span>
        <span class="badge rounded-pill bg-info text-dark">Info</span>
        <span class="badge rounded-pill bg-light text-dark">Light</span>
        <span class="badge rounded-pill bg-dark">Dark</span>
        </div>
      </div>
    </article>
    <article class="my-3" id="breadcrumb">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>مسار التنقل</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/breadcrumb/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <nav aria-label="مسار الخبز">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الصفحة الرئيسية</a></li>
            <li class="breadcrumb-item"><a href="#">مكتبة</a></li>
            <li class="breadcrumb-item active" aria-current="page">البيانات</li>
          </ol>
        </nav>
        </div>
      </div>
    </article>
    <article class="my-3" id="buttons">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>أزرار</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/buttons/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>

        <button type="button" class="btn btn-link">حلقة الوصل</button>
        </div>

        <div class="bd-example">
        
        <button type="button" class="btn btn-outline-primary">Primary</button>
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <button type="button" class="btn btn-outline-success">Success</button>
        <button type="button" class="btn btn-outline-danger">Danger</button>
        <button type="button" class="btn btn-outline-warning">Warning</button>
        <button type="button" class="btn btn-outline-info">Info</button>
        <button type="button" class="btn btn-outline-light">Light</button>
        <button type="button" class="btn btn-outline-dark">Dark</button>
        </div>

        <div class="bd-example">
        <button type="button" class="btn btn-primary btn-sm">زر صغير</button>
        <button type="button" class="btn btn-primary">زر قياسي</button>
        <button type="button" class="btn btn-primary btn-lg">زر كبير</button>
        </div>
      </div>
    </article>
    <article class="my-3" id="button-group">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>مجموعة الأزرار</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/button-group/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <div class="btn-toolbar" role="toolbar" aria-label="شريط الأدوات مع مجموعات الأزرار">
          <div class="btn-group me-2" role="group" aria-label="المجموعة الأولى">
            <button type="button" class="btn btn-secondary">1</button>
            <button type="button" class="btn btn-secondary">2</button>
            <button type="button" class="btn btn-secondary">3</button>
            <button type="button" class="btn btn-secondary">4</button>
          </div>
          <div class="btn-group me-2" role="group" aria-label="المجموعة الثانية">
            <button type="button" class="btn btn-secondary">5</button>
            <button type="button" class="btn btn-secondary">6</button>
            <button type="button" class="btn btn-secondary">7</button>
          </div>
          <div class="btn-group" role="group" aria-label="المجموعة الثالثة">
            <button type="button" class="btn btn-secondary">8</button>
          </div>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="card">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>بطاقة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/card/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <div class="row  row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: غطاء الصورة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">غطاء الصورة</text></svg>

              <div class="card-body">
                <h5 class="card-title">عنوان البطاقة</h5>
                <p class="card-text">بعض الأمثلة السريعة للنصوص للبناء على عنوان البطاقة وتشكيل الجزء الأكبر من محتوى البطاقة.</p>
                <a href="#" class="btn btn-primary">اذهب لمكان ما</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-header">
                متميز
              </div>
              <div class="card-body">
                <h5 class="card-title">عنوان البطاقة</h5>
                <p class="card-text">بعض الأمثلة السريعة للنصوص للبناء على عنوان البطاقة وتشكيل الجزء الأكبر من محتوى البطاقة.</p>
                <a href="#" class="btn btn-primary">اذهب لمكان ما</a>
              </div>
              <div class="card-footer text-muted">
                2 منذ أيام
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">عنوان البطاقة</h5>
                <p class="card-text">بعض الأمثلة السريعة للنصوص للبناء على عنوان البطاقة وتشكيل الجزء الأكبر من محتوى البطاقة.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">أسر كل أراض.</li>
                <li class="list-group-item">شرسة مشارف واستمرت.</li>
                <li class="list-group-item">مكن إذ كانتا.</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link">رابط البطاقة</a>
                <a href="#" class="card-link">رابط آخر</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                  <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">صورة</text></svg>

                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">عنوان البطاقة</h5>
                    <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
                    <p class="card-text"><small class="text-muted">آخر تحديث منذ 3 دقائق</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="carousel">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>شرائح عرض</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/carousel/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: الشريحة الأولى" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">الشريحة الأولى</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>تسمية الشريحة الأولى</h5>
                <p>إستعمل تحرّكت المتحدة كان ما. لم وفي الشرقي المتاخمة تعد.</p>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: الشريحة الثانية" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">الشريحة الثانية</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>تسمية الشريحة الثانية</h5>
                <p>أجزاء الخاسرة التّحول ٣٠ انه, وصل أن عالمية التحالف التجارية.</p>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: الشريحة الثالثة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">الشريحة الثالثة</text></svg>

              <div class="carousel-caption d-none d-md-block">
                <h5>تسمية الشريحة الثالثة</h5>
                <p>ان فقد ترتيب والديون. وتتحمّل الحيلولة أخذ قد. ضرب بل.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">التالى</span>
          </a>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="dropdowns">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>هبوط قطرة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/dropdowns/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <div class="btn-group w-100 align-items-center justify-content-between flex-wrap">
          <div class="dropdown">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="false">
              زر القائمة المنسدلة
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonSM">
              <li><h6 class="dropdown-header">رأس القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              زر القائمة المنسدلة
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><h6 class="dropdown-header">رأس القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButtonLG" data-bs-toggle="dropdown" aria-expanded="false">
              زر القائمة المنسدلة
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLG">
              <li><h6 class="dropdown-header">رأس القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
        </div>
        </div>

        <div class="bd-example">
        <div class="btn-group">
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-success">Success</button>
          <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-warning">Warning</button>
          <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-danger">Danger</button>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">تبديل القائمة المنسدلة</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">عمل</a></li>
            <li><a class="dropdown-item" href="#">عمل آخر</a></li>
            <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
          </ul>
        </div><!-- /btn-group -->
        </div>

        <div class="bd-example">
        <div class="btn-group w-100 align-items-center justify-content-between flex-wrap">
          <div class="dropend">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropendMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              زر Dropend
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropendMenuButton">
              <li><h6 class="dropdown-header">رأس القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
          <div class="dropup">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropupMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              زر Dropup
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropupMenuButton">
              <li><h6 class="dropdown-header">رأس القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
          <div class="dropstart">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropstartMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              زر Dropstart
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropstartMenuButton">
              <li><h6 class="dropdown-header">رأس القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
        </div>
        </div>

        <div class="bd-example">
        <div class="btn-group">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownRightMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              قائمة بمحاذاة النهاية
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownRightMenuButton">
              <li><h6 class="dropdown-header">رأس القائمة المنسدلة</h6></li>
              <li><a class="dropdown-item" href="#">عمل</a></li>
              <li><a class="dropdown-item" href="#">عمل آخر</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">رابط منفصل</a></li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="list-group">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>مجموعة القوائم</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/list-group/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <ul class="list-group">
          <li class="list-group-item active" aria-current="true">الفرنسية الأثناء، أي.</li>
          <li class="list-group-item disabled" aria-disabled="true">كلّ في تعداد.</li>
          <li class="list-group-item">وتم الأخذ أساسي.</li>
          <li class="list-group-item">لدحر بشرية ابتدعها.</li>
          <li class="list-group-item">لكون أسيا ولاتّساع.</li>
        </ul>
        </div>

        <div class="bd-example">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">الفرنسية الأثناء، أي.</li>
          <li class="list-group-item">كلّ في تعداد.</li>
          <li class="list-group-item">وتم الأخذ أساسي.</li>
          <li class="list-group-item">لدحر بشرية ابتدعها.</li>
          <li class="list-group-item">لكون أسيا ولاتّساع.</li>
        </ul>
        </div>

        <div class="bd-example">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">كلّ في تعداد.</a>
          
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">عنصر مجموعة قائمة primary بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">عنصر مجموعة قائمة secondary بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success">عنصر مجموعة قائمة success بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-danger">عنصر مجموعة قائمة danger بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-warning">عنصر مجموعة قائمة warning بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-info">عنصر مجموعة قائمة info بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-light">عنصر مجموعة قائمة light بسيط</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-dark">عنصر مجموعة قائمة dark بسيط</a>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="modal">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>مشروط</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/modal/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <div class="d-flex justify-content-between flex-wrap">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
            إطلاق نموذج تجريبي
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
            إطلاق مشروط خلفية ثابتة
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
            مشروط قابل للتمرير تتمركز عموديًا
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">
            شاشة كاملة
          </button>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="navs">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>التنقل</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/navs-tabs/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <nav class="nav">
          <a class="nav-link active" aria-current="page" href="#">نشيط</a>
          <a class="nav-link" href="#">حلقة الوصل</a>
          <a class="nav-link" href="#">حلقة الوصل</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">معطل</a>
        </nav>
        </div>

        <div class="bd-example">
        <nav>
          <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">الصفحة الرئيسية</a>
            <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">الملف الشخصي</a>
            <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">اتصل</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <p class="px-3">هو أسيا والإتحاد أضف, فشكّل الإتفاقية ذلك في. اكتوبر والعتاد و لمّ, وفي أم ٢٠٠٤ وإقامة الانجليزية. وجزر المضي التقليدي ان أما. كلا لإنعدام استراليا، بـ, ٣٠ أضف بوابة أوزار مساعدة. ما السيطرة الأرضية دار, هو بال الساحة الموسوعة.</p>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <p class="px-3">بفرض البشريةً ذلك أي, ٣٠ تنفّس ليركز الإطلاق جُل. يكن ألمّ أمام في. بفرض الصينية الخاسرة هو لها. ومن معاملة وحلفاؤها كل. بلا يعادل العظمى مع. بـ بحث وجزر الصعداء الأعمال, لكون نتيجة هذا من. مع ثانية أوروبا بحث, كلّ بتطويق واستمرت أن.</p>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <p class="px-3">كلا تم وزارة الأسيوي, جهة خطّة سنغافورة إذ. فقد أن قبضتهم شواطيء, مسارح أوزار إبّان كلّ أي. أحكم استمرار مدن تم, الى إتفاقية الإنذار، ان, ما هذه أراض وصغار استمرار. دنو هو تجهيز أصقاع الأعمال. و وأزيز إيطاليا ومن, بـ يبق السفن أدوات, اتفاق شواطيء الأوروبي ذلك عن.</p>
          </div>
        </div>
        </div>

        <div class="bd-example">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">نشيط</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">حلقة الوصل</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">حلقة الوصل</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">معطل</a>
          </li>
        </ul>
        </div>
      </div>
    </article>
    <article class="my-3" id="navbar">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>شريط التنقل</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/navbar/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="d-inline-block align-top" alt="Bootstrap" loading="lazy"
                   style="filter: invert(1) grayscale(100%) brightness(200%);">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="تبديل التنقل">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">حلقة الوصل</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    اسقاط
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">عمل</a></li>
                    <li><a class="dropdown-item" href="#">عمل آخر</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">معطل</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="بحث" aria-label="بحث">
                <button class="btn btn-outline-dark" type="submit">بحث</button>
              </form>
            </div>
          </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-5">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../assets/brand/bootstrap-logo-white.svg" width="38" height="30" class="d-inline-block align-top" alt="Bootstrap" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="تبديل التنقل">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">حلقة الوصل</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    اسقاط
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <li><a class="dropdown-item" href="#">عمل</a></li>
                    <li><a class="dropdown-item" href="#">عمل آخر</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">شيء آخر هنا</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">معطل</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="بحث" aria-label="بحث">
                <button class="btn btn-outline-light" type="submit">بحث</button>
              </form>
            </div>
          </div>
        </nav>
        </div>
      </div>
    </article>
    <article class="my-3" id="pagination">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>ترقيم الصفحات</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/pagination/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <nav aria-label="مثال ترقيم الصفحات">
          <ul class="pagination pagination-sm">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2 <span class="visually-hidden">(تيار)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
          </ul>
        </nav>
        </div>

        <div class="bd-example">
        <nav aria-label="مثال قياسي لترقيم الصفحات">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="السابق">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="التالى">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        </div>

        <div class="bd-example">
        <nav aria-label="مثال آخر لترقيم الصفحات">
          <ul class="pagination pagination-lg flex-wrap">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">السابق</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2 <span class="visually-hidden">(تيار)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">التالى</a>
            </li>
          </ul>
        </nav>
        </div>
      </div>
    </article>
    <article class="my-3" id="popovers">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>بوبوفيرس</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/popovers/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="عنوان Popover" data-bs-content="وإليك بعض المحتويات الرائعة. إنه ممتع للغاية. حق؟">انقر لتبديل المنبثقة</button>
        </div>

        <div class="bd-example">
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="يرتبط لفرنسا ذلك تم, ان إعلان أدوات إنطلاق.">
          انبثاق في الأعلى
        </button>
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="يرتبط لفرنسا ذلك تم, ان إعلان أدوات إنطلاق.">
          popover في النهاية
        </button>
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="يرتبط لفرنسا ذلك تم, ان إعلان أدوات إنطلاق.">
          انبثاق في الأسفل
        </button>
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="يرتبط لفرنسا ذلك تم, ان إعلان أدوات إنطلاق.">
          popover عند البدء
        </button>
        </div>
      </div>
    </article>
    <article class="my-3" id="progress">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>شريط التقدم</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/progress/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar bg-info text-dark w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
        </div>
        <div class="progress mb-3">
          <div class="progress-bar bg-warning text-dark w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-danger w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
        </div>
        </div>

        <div class="bd-example">
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="scrollspy">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>مخطوطة</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/scrollspy/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
          <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
            <a class="navbar-brand" href="#">شريط التنقل</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="#fat">@fat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mdo">@mdo</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">اسقاط</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#one">واحد</a></li>
                  <li><a class="dropdown-item" href="#two">اثنان</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#three">ثلاثة</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example">
            <h4 id="fat">@fat</h4>
            <p>إنطلاق العالمي ما هذه, لم فسقط عُقر الهادي جُل. بعد ٣٠ شرسة النزاع اليميني. عن بحث اتّجة الصينية, مع وأزيز الفرنسية مدن, عدد مرجع العالمية لبلجيكا، أن. طوكيو أعلنت حيث بل. الأخذ واندونيسيا، إذ ذلك, به، قد معاملة وقوعها،. ولم التي إبّان بالفشل ٣٠, جنوب مشاركة حيث أم.</p>
            <h4 id="mdo">@mdo</h4>
            <p>بل الشتاء، بمحاولة جُل, فعل ببعض الأراضي مع. أما لم الأولى تكاليف, في بحشد جنوب الدول دون. في لمحاكم الإنزال تلك, أي بين الصفحة النزاع. عن دول فسقط احداث. وباءت التقليدي أم حيث, دنو ماذا واستمرت بل, غير ٣٠ بقعة هناك وفنلندا.</p>
            <h4 id="one">واحد</h4>
            <p>وزارة العاصمة الأوربيين حتى بـ. إذ دول مقاطعة بالرغم الأوروبي, كلّ هو نهاية لبولندا،, إذ مما ماشاء إتفاقية. إذ جهة تسبب وانتهاءً, تم تعد الذود أعلنت الأمريكية. ضرب نقطة حالية أن, ثم مارد للصين جديداً بين, بعد بل العظمى ابتدعها والفرنسي. ثم جعل يذكر ووصف, أثره، وعُرفت هو كان, بها قُدُماً البولندي ان. العالمي الجديدة، الفرنسية عرض كل.</p>
            <h4 id="two">اثنان</h4>
            <p>إذ قِبل أعلنت عرض. ما به، هاربر قتيل، الإكتفاء, أوزار المنتصر لبولندا، بلا بـ. وبدون بزمام وبحلول جُل أن, مكن أي لعدم مشارف. تم أخر دفّة وصغار وبالتحديد،, وقد اعلان العالم واشتدّت عن. أي حين الأولية لبولندا،, كما مايو وحتّى فرنسا ثم.</p>
            <h4 id="three">ثلاثة</h4>
            <p>لم هذا تسمّى إعادة مليون, ان يذكر فرنسا كما. إذ الدول الشتوية وأكثرها مدن. عرض بفرض بتحدّي الأوضاع تم. أحدث شاسعة تكبّد أخر من, ٣٠ حتى الخاطفة العالمية, هناك عالمية وقد لم. بشرية إتفاقية عل جهة, كل هُزم كانتا ضرب.</p>
            <p>أن كلّ صفحة إعادة الأمريكية. بحث تشكيل ويعزى وتزويده بل. وحتّى وإعلان أن دار, من مكّن الصينية المشتّتون مكن, وبحلول للمجهود الأمريكي أن بحق. أم جهة وجهان الأرض.</p>
          </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="spinners">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>المغازل</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/spinners/">توثيق</a>
      </div>

      <div>
        <div class="bd-example">
        
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-secondary" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-success" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-danger" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-warning" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-info" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-light" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-border text-dark" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        </div>

        <div class="bd-example">
        
        <div class="spinner-grow text-primary" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-secondary" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-success" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-danger" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-warning" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-info" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-light" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
          <span class="visually-hidden">جار التحميل...</span>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="toasts">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>نخب</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/toasts/">توثيق</a>
      </div>

      <div>
        <div class="bd-example bg-dark p-5 align-items-center">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

            <strong class="me-auto">Bootstrap</strong>
            <small class="text-muted">قبل 11 دقيقة</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="قريب"></button>
          </div>
          <div class="toast-body">
            مرحبا بالعالم! هذه رسالة نخب.
          </div>
        </div>
        </div>
      </div>
    </article>
    <article class="mt-3 mb-5 pb-5" id="tooltips">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>تلميحات الأدوات</h3>
        <a class="d-flex align-items-center" hreflang="en" href="../components/tooltips/">توثيق</a>
      </div>

      <div>
        <div class="bd-example tooltip-demo">
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="تلميح في الأعلى">تلميح في الأعلى</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="تلميح في النهاية">تلميح في النهاية</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="تلميح في الأسفل">تلميح في الأسفل</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="تلميح عند البدء">تلميح عند البدء</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>تلميح</em> <u>مع</u> <b>HTML</b>">تلميح مع HTML</button>
        </div>
        <footer class="text-muted py-5">
  <div class="container">
    <p class="mb-1"><span class="text-muted"> copyright&copy; 2020 Eduqii. Developed with &#128151; by the eduqii group.  Powered by Ben IT Solutions. All rights reserved. &nbsp;  · &nbsp;
      Special thanks to An-Nadwa Islamic School Complex, Mallam Suwaid, Sir Abdullah Qadri, Sir Felix, 
    Sir Charlse and the entire teaching and non-teaching staff.
  </div>
</footer>
      </div>
    </article>
  </section>
</div>

<div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">عنوان مشروط</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="قريب"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">قريب</button>
        <button type="button" class="btn btn-primary">احفظ التغييرات</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLiveLabel">عنوان مشروط</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="قريب"></button>
      </div>
      <div class="modal-body">
        <p>لن أغلق إذا نقرت خارج لي. لا تحاول حتى الضغط على مفتاح الهروب.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">قريب</button>
        <button type="button" class="btn btn-primary">فهمت</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">عنوان مشروط</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="قريب"></button>
      </div>
      <div class="modal-body">
        <p>علاقة الشمال والفرنسي لها أن. المحيط الشهيرة البولندي دون أي, لم على مليون الثالث، بالسيطرة, نفس ان واحدة المجتمع والكوري. أي أثره، الأمم دار, مع وسفن وقام سكان انه. كان بهيئة الإمداد هو, بينما تطوير يعادل هذه بل, قد خيار يقوم أعلنت بلا. ما مسرح ٢٠٠٤ عدم, حصدت الصفحة المؤلّفة أخذ هو. هذا عل الدول الفرنسية, معقل مهمّات إذ مدن. تجهيز ألمانيا دار بل.</p>
        <p>لان تم بسبب مئات الفترة. جهة تنفّس المشترك ٣٠, وباءت اوروبا دنو لم, أم جعل كرسي إختار وبريطانيا. مما رئيس الله الأثناء، ٣٠, الأمم الشتاء البولندي بين في, دول ان حلّت الأوروبيّون. بوابة العصبة البرية هو تحت, أضف أم الجوي أراضي, مدن العظمى قُدُماً ايطاليا، هو. حدى ثم تنفّس كنقطة, أن أما اعتداء واُسدل بالجانب.</p>
        <p>انتهت اكتوبر واندونيسيا، حين بـ. غير بالرغم التقليدي في, و أما بزمام ا لإنعدام. هو كُلفة وانتهاءً حول. جُل مكّن الصين ان, ترتيب الأجل أوراقهم لها كل.</p>
        <p>هذا وبعض قِبل من, هو ميناء فهرست قبضتهم يبق. كانت لهيمنة للإتحاد على إذ, بحشد مسرح بها أن. قد ومن الأوضاع اليابان للإتحاد, و قررت المارق عرض, أواخر محاولات بها قد. مايو لهيمنة بريطانيا مدن بل.</p>
        <p>وفي الثالث، الإثنان من, أم وعلى مهمّات على, بـ فرنسية بولندا، لها. لمّ ان قامت تعديل المدن, ٣٠ لمحاكم المعاهدات إيو. كثيرة أدوات ويكيبيديا و بها, أم جدول العصبة بحث. أساسي معارضة بـ هذه, شيء مسرح واتّجه الشّعبين ٣٠. بينما واحدة إذ لمّ.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">قريب</button>
        <button type="button" class="btn btn-primary">احفظ التغييرات</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalFullscreenLabel">مشروط ملء الشاشة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="قريب"></button>
      </div>
      <div class="modal-body">
        <p>علاقة الشمال والفرنسي لها أن. المحيط الشهيرة البولندي دون أي, لم على مليون الثالث، بالسيطرة, نفس ان واحدة المجتمع والكوري. أي أثره، الأمم دار, مع وسفن وقام سكان انه. كان بهيئة الإمداد هو, بينما تطوير يعادل هذه بل, قد خيار يقوم أعلنت بلا. ما مسرح ٢٠٠٤ عدم, حصدت الصفحة المؤلّفة أخذ هو. هذا عل الدول الفرنسية, معقل مهمّات إذ مدن. تجهيز ألمانيا دار بل.</p>
        <p>لان تم بسبب مئات الفترة. جهة تنفّس المشترك ٣٠, وباءت اوروبا دنو لم, أم جعل كرسي إختار وبريطانيا. مما رئيس الله الأثناء، ٣٠, الأمم الشتاء البولندي بين في, دول ان حلّت الأوروبيّون. بوابة العصبة البرية هو تحت, أضف أم الجوي أراضي, مدن العظمى قُدُماً ايطاليا، هو. حدى ثم تنفّس كنقطة, أن أما اعتداء واُسدل بالجانب.</p>
        <p>انتهت اكتوبر واندونيسيا، حين بـ. غير بالرغم التقليدي في, و أما بزمام ا لإنعدام. هو كُلفة وانتهاءً حول. جُل مكّن الصين ان, ترتيب الأجل أوراقهم لها كل.</p>
        <p>هذا وبعض قِبل من, هو ميناء فهرست قبضتهم يبق. كانت لهيمنة للإتحاد على إذ, بحشد مسرح بها أن. قد ومن الأوضاع اليابان للإتحاد, و قررت المارق عرض, أواخر محاولات بها قد. مايو لهيمنة بريطانيا مدن بل.</p>
        <p>وفي الثالث، الإثنان من, أم وعلى مهمّات على, بـ فرنسية بولندا، لها. لمّ ان قامت تعديل المدن, ٣٠ لمحاكم المعاهدات إيو. كثيرة أدوات ويكيبيديا و بها, أم جدول العصبة بحث. أساسي معارضة بـ هذه, شيء مسرح واتّجه الشّعبين ٣٠. بينما واحدة إذ لمّ.</p>
        <p>علاقة الشمال والفرنسي لها أن. المحيط الشهيرة البولندي دون أي, لم على مليون الثالث، بالسيطرة, نفس ان واحدة المجتمع والكوري. أي أثره، الأمم دار, مع وسفن وقام سكان انه. كان بهيئة الإمداد هو, بينما تطوير يعادل هذه بل, قد خيار يقوم أعلنت بلا. ما مسرح ٢٠٠٤ عدم, حصدت الصفحة المؤلّفة أخذ هو. هذا عل الدول الفرنسية, معقل مهمّات إذ مدن. تجهيز ألمانيا دار بل.</p>
        <p>لان تم بسبب مئات الفترة. جهة تنفّس المشترك ٣٠, وباءت اوروبا دنو لم, أم جعل كرسي إختار وبريطانيا. مما رئيس الله الأثناء، ٣٠, الأمم الشتاء البولندي بين في, دول ان حلّت الأوروبيّون. بوابة العصبة البرية هو تحت, أضف أم الجوي أراضي, مدن العظمى قُدُماً ايطاليا، هو. حدى ثم تنفّس كنقطة, أن أما اعتداء واُسدل بالجانب.</p>
        <p>انتهت اكتوبر واندونيسيا، حين بـ. غير بالرغم التقليدي في, و أما بزمام ا لإنعدام. هو كُلفة وانتهاءً حول. جُل مكّن الصين ان, ترتيب الأجل أوراقهم لها كل.</p>
        <p>هذا وبعض قِبل من, هو ميناء فهرست قبضتهم يبق. كانت لهيمنة للإتحاد على إذ, بحشد مسرح بها أن. قد ومن الأوضاع اليابان للإتحاد, و قررت المارق عرض, أواخر محاولات بها قد. مايو لهيمنة بريطانيا مدن بل.</p>
        <p>وفي الثالث، الإثنان من, أم وعلى مهمّات على, بـ فرنسية بولندا، لها. لمّ ان قامت تعديل المدن, ٣٠ لمحاكم المعاهدات إيو. كثيرة أدوات ويكيبيديا و بها, أم جدول العصبة بحث. أساسي معارضة بـ هذه, شيء مسرح واتّجه الشّعبين ٣٠. بينما واحدة إذ لمّ.</p>
        <p>علاقة الشمال والفرنسي لها أن. المحيط الشهيرة البولندي دون أي, لم على مليون الثالث، بالسيطرة, نفس ان واحدة المجتمع والكوري. أي أثره، الأمم دار, مع وسفن وقام سكان انه. كان بهيئة الإمداد هو, بينما تطوير يعادل هذه بل, قد خيار يقوم أعلنت بلا. ما مسرح ٢٠٠٤ عدم, حصدت الصفحة المؤلّفة أخذ هو. هذا عل الدول الفرنسية, معقل مهمّات إذ مدن. تجهيز ألمانيا دار بل.</p>
        <p>لان تم بسبب مئات الفترة. جهة تنفّس المشترك ٣٠, وباءت اوروبا دنو لم, أم جعل كرسي إختار وبريطانيا. مما رئيس الله الأثناء، ٣٠, الأمم الشتاء البولندي بين في, دول ان حلّت الأوروبيّون. بوابة العصبة البرية هو تحت, أضف أم الجوي أراضي, مدن العظمى قُدُماً ايطاليا، هو. حدى ثم تنفّس كنقطة, أن أما اعتداء واُسدل بالجانب.</p>
        <p>انتهت اكتوبر واندونيسيا، حين بـ. غير بالرغم التقليدي في, و أما بزمام ا لإنعدام. هو كُلفة وانتهاءً حول. جُل مكّن الصين ان, ترتيب الأجل أوراقهم لها كل.</p>
        <p>هذا وبعض قِبل من, هو ميناء فهرست قبضتهم يبق. كانت لهيمنة للإتحاد على إذ, بحشد مسرح بها أن. قد ومن الأوضاع اليابان للإتحاد, و قررت المارق عرض, أواخر محاولات بها قد. مايو لهيمنة بريطانيا مدن بل.</p>
        <p>وفي الثالث، الإثنان من, أم وعلى مهمّات على, بـ فرنسية بولندا، لها. لمّ ان قامت تعديل المدن, ٣٠ لمحاكم المعاهدات إيو. كثيرة أدوات ويكيبيديا و بها, أم جدول العصبة بحث. أساسي معارضة بـ هذه, شيء مسرح واتّجه الشّعبين ٣٠. بينما واحدة إذ لمّ.</p>
        <p>علاقة الشمال والفرنسي لها أن. المحيط الشهيرة البولندي دون أي, لم على مليون الثالث، بالسيطرة, نفس ان واحدة المجتمع والكوري. أي أثره، الأمم دار, مع وسفن وقام سكان انه. كان بهيئة الإمداد هو, بينما تطوير يعادل هذه بل, قد خيار يقوم أعلنت بلا. ما مسرح ٢٠٠٤ عدم, حصدت الصفحة المؤلّفة أخذ هو. هذا عل الدول الفرنسية, معقل مهمّات إذ مدن. تجهيز ألمانيا دار بل.</p>
        <p>لان تم بسبب مئات الفترة. جهة تنفّس المشترك ٣٠, وباءت اوروبا دنو لم, أم جعل كرسي إختار وبريطانيا. مما رئيس الله الأثناء، ٣٠, الأمم الشتاء البولندي بين في, دول ان حلّت الأوروبيّون. بوابة العصبة البرية هو تحت, أضف أم الجوي أراضي, مدن العظمى قُدُماً ايطاليا، هو. حدى ثم تنفّس كنقطة, أن أما اعتداء واُسدل بالجانب.</p>
        <p>انتهت اكتوبر واندونيسيا، حين بـ. غير بالرغم التقليدي في, و أما بزمام ا لإنعدام. هو كُلفة وانتهاءً حول. جُل مكّن الصين ان, ترتيب الأجل أوراقهم لها كل.</p>
        <p>هذا وبعض قِبل من, هو ميناء فهرست قبضتهم يبق. كانت لهيمنة للإتحاد على إذ, بحشد مسرح بها أن. قد ومن الأوضاع اليابان للإتحاد, و قررت المارق عرض, أواخر محاولات بها قد. مايو لهيمنة بريطانيا مدن بل.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">قريب</button>
      </div>
      <footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1"><span class="text-muted">&copy;copyright 2020 Eduqii. Developed with &#128151; by the eduqii group.  Powered by Ben IT Solutions. All rights reserved. &nbsp; &nbsp; · &nbsp;<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Donate">Donate</button></span></p>
    <p class="mb-0">New to Eduqii? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
    </div>
  </div>
</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="cheatsheet.js"></script>
  </body>
</html>
