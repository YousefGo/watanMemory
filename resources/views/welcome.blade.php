<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="css/style.css" >
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>ذكريات وطن</title>
  </head>
  <body>

    <section>
        <img src="img/sa.gif" style="width: 100%">
    </section>

    <!--  اللوحة الجدارية  -->
    <section style="background-image: url(/img/haweya_pic.jpg); width: 100%; height: 100%">
      <div class="" style="padding: 4%">
        <div class="row row-cols-1 row-cols-md-3 g-4 text-center" style="direction: rtl;">
          @foreach ($posts as $post)
          <div class="col">
            <div class="card" style="direction: rtl; background-color: transparent; border: none">
              <div class="card-body" style="color: white;">
                  <p>{{$post->text}}</p>
                  <footer class="blockquote-footer" style="color: white"> {{$post->userName['name']}} <cite title="Source Title"></cite></footer>
              </div>
            </div>
          </div>
          @endforeach




        </div>
        <section>
          <a href="{{route('home')}}" class="btn btn-lg mt-4  " style="color: #1e8574; background-color: white"> للذكرى وتهنئة للوطن - اكتب </a>

        </section>




        </div>
      </div>
    </section>

    <!--  إضافة عبارة إلى اللوحة الجدارية  -->


    <!--  شاركنا وطنيتك بصورة  -->
    <section style="direction: rtl">
      <div class="" style="padding: 4%">
        <h3>شاركنا وطنيتك بصورة</h3>
        <hr style="height: 4px; color: lightgray; width: 250px">
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-2">
          <div class="col">
            <div class="card" style="border: none;">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/p1.png" class="d-block w-100" alt="...">
                    <br>
                    <button class="btn" style="background-color: white; color: #137246; border: 1px #137246 solid; border-bottom: 1px #137246 solid ;width: 100%">تنزيل الصورة</button>
                  </div>
                  <div class="carousel-item">
                    <img src="img/p2.png" class="d-block w-100" alt="...">
                    <br>
                    <button class="btn" style="background-color: white; color: #137246; border: 1px #137246 solid; border-bottom: 1px #137246 solid ;width: 100%">تنزيل الصورة</button>

                  </div>
                  <div class="carousel-item">
                    <img src="img/p3.png" class="d-block w-100" alt="...">
                    <br>
                    <button class="btn" style="background-color: white; color: #137246; border: 1px #137246 solid; border-bottom: 1px #137246 solid ;width: 100%">تنزيل الصورة</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="border: none;">
              <img src="img/flag.gif">
              <br><br>
              <div class="card-body">
                <div class="mb-3">
                  <input type="file" class="form-control" id="customFile" />
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn" style="background-color: #1e8574; color: white">إضافة</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="" style="padding: 3%">
        <div class="" style="direction: rtl">
            <div class="row">
                <div class="col-6">
                    <div class="card" style="">
                        <img src="{{asset('img/ryadh.gif')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><i class='fas fa-map-marker-alt' style='font-size:24px'></i> الرياض</h5>
                            <p class="card-text">
                                الاعتزاز إلى الوطن خالد، فلا أحد يعرف شيئًا يستحقُّ الاعتزاز أكثر منه.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" style="">
                        <img src="{{asset('img/jeddah1.gif')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><i class='fas fa-map-marker-alt' style='font-size:24px'></i> جدة]</h5>
                            <p class="card-text">
                                الاعتزاز إلى الوطن خالد، فلا أحد يعرف شيئًا يستحقُّ الاعتزاز أكثر منه.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--  إضافة عبارة إلى اللوحة الجدارية  -->
    <section style="direction: rtl">

      <div class="" style="padding: 0 4% 4% 4%">
        <div class="row">
          <div class="col">
              <input type="file" class="form-control" id="customFile" />
          </div>
          <div class="col">
            <select class="form-select" aria-label="Default select example">
              <option selected>اختر مدينة الاحتفال</option>
              <option value="1">الرياض</option>
              <option value="2">جدة</option>
              <option value="3">أبها</option>
              <option value="3">ينبع</option>
            </select>
          </div>
        </div>
          <br>
        <form class="row g-3">
            <div class="mb-3">
              <textarea class="form-control" placeholder="أضف عبارة وطنية هنا" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn" style="background-color: #1e8574; color: white">إضافة</button>
            </div>
        </form>
      </div>
    </section>


    <div class="line-space"></div>
    <div class="line-space"></div>
    <div class="" style="direction: rtl; padding: 2% 4%">
        <h3>فريقنا</h3>
        <hr style="height: 4px; color: lightgray; width: 100px">
    </div>
    <div class="row row-cols-1 row-cols-md-4 text-center"  style=" direction: rtl ;padding-right: 10%; padding-left: 10%; padding-top: 2%; padding-bottom: 2%">
        <div class="col">
            <div class="card" style="border: none; background: none">
                <img src="/img/fteem.jpeg" class="card-img-top mx-auto" alt="..." style="width: 50%; border-radius: 50%;">
                <div class="card-body">
                    <h5 class="card-title">فاطمة اليامي</h5>
                    <p class="card-text">عضو</p>
                    <p class="card-text">front-end developer</p>
                    <a class="text-white" href="" target="_blank"><i class="fa fa-linkedin-square" style="font-size:24px; color: #333333"></i></a>
                    <a class="text-white" href="" target="_blank"><i class="fa fa-twitter-square" style="font-size:24px; color: #333333"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="border: none; background: none">
                <img src="/img/h%20(2).png" class="card-img-top mx-auto" alt="..." style="width: 50%; border-radius: 50%;">
                <div class="card-body">
                    <h5 class="card-title">هند عدنان</h5>
                    <p class="card-text">عضو</p>
                    <p class="card-text">front-end developer</p>
                    <a class="text-white" href="" target="_blank"><i class="fa fa-linkedin-square" style="font-size:24px; color: #333333"></i></a>
                    <a class="text-white" href="" target="_blank"><i class="fa fa-twitter-square" style="font-size:24px; color: #333333"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="border: none; background: none">
                <img src="/img/user-sa.png" class="card-img-top mx-auto" alt="..." style="width: 50%; border-radius: 50%;">
                <div class="card-body">
                    <h5 class="card-title">مازن العجيلي</h5>
                    <p class="card-text">عضو</p>
                    <p class="card-text">back-end developer</p>
                    <a class="text-white" href="" target="_blank"><i class="fa fa-linkedin-square" style="font-size:24px; color: #333333"></i></a>
                    <a class="text-white" href="" target="_blank"><i class="fa fa-twitter-square" style="font-size:24px; color: #333333"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="border: none; background: none">
                <img src="/img/user-sa.png" class="card-img-top mx-auto" alt="..." style="width: 50%; border-radius: 50%;">
                <div class="card-body">
                    <h5 class="card-title">يوسف محمد</h5>
                    <p class="card-text">عضو</p>
                    <p class="card-text">back-end developer</p>
                    <a class="text-white" href="" target="_blank"><i class="fa fa-linkedin-square" style="font-size:24px; color: #333333"></i></a>
                    <a class="text-white" href="" target="_blank"><i class="fa fa-twitter-square" style="font-size:24px; color: #333333"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section -->
    <div class="row">
        <footer class="text-center text-lg-end bg-light " style="direction: rtl">
            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-end mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                            <!-- Content -->
                            <h6 class="text-end">
                                <img src="/img/back2.png" style="width: 30%">
                            </h6>
                            <p>
                                بوابة مخصصة للأفراد لمشاركة مشاعرهم وذكرياتهم اتجاه الوطن السعودي الحبيب ومعرفة أحدث الإنجازات التي اعدتها دولتنا العظيمة
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-2">
                            <p>
                                <a href="home.html" class="text-reset" style="text-decoration: none">الرئيسية</a>
                            </p>
                            <p>
                                <a href="#who" class="text-reset" style="text-decoration: none">من نحـن</a>
                            </p>
                            <p>
                                <a href="#who" class="text-reset" style="text-decoration: none">تواصل معنا</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-2">
                            <!-- Links -->
                            <!--                <h6 class="text-uppercase fw-bold mb-4">-->
                            <!--                  Products-->
                            <!--                </h6>-->
                            <p>
                                <a href="#question" class="text-reset" style="text-decoration: none">روابط مهمة</a>
                            </p>
                            <p>
                                <a href="https://www.vision2030.gov.sa/ar/" class="text-reset" style="text-decoration: none">رؤية ٢٠٣٠</a>
                            </p>

                        </div>
                        <!-- Grid column -->


                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="row">
                <div class="text-center p-4" style="background-color: #137246; color: white">
                    ©️ 2021 جميع الحقوق محفوظة:
                </div>
            </div>
            <!-- Copyright -->
        </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script>
      var c=document.getElementById("myCanvas");
   var ctx=c.getContext("2d");
  var imageObj1 = new Image();
  var imageObj2 = new Image();
imageObj1.src = "1.png"
imageObj1.onload = function() {
   ctx.drawImage(imageObj1, 0, 0, 328, 526);
   imageObj2.src = "2.png";
   imageObj2.onload = function() {
      ctx.drawImage(imageObj2, 15, 85, 300, 300);
      var img = c.toDataURL("image/png");
      document.write('<img src="' + img + '" width="328" height="526"/>');
   }
};
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
