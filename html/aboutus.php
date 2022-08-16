<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>凱茂資訊 ABOUT US</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/uxl/popper.min.js"></script>
    <script src="https://cdn.usebootstrap.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.usebootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../css/aboutus.css" />
    <link rel="stylesheet" type="text/css" href="../css/timeline.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/utilities.css" />

    <link rel="shortcut icon" href="../img/logo/favicon.ico" />
    <link rel="bookmark" href="../img/logo/favicon.ico" />
  </head>

  <body>
    <input type="checkbox" id="active" />
    <label for="active" class="menu-btn">
      <span></span>
      <span></span>
      <!-- 3個span-->
      <span></span>
    </label>
    <label for="active" class="close"></label>
    <div class="wrapper">
      <div class="wapperContent">
        <img
          src="../img/logo/only-logo.png"
          style="width: 80px; position: absolute; position: 0px 0px"
        />

        <div class="wapperContentWord">
          <a href="./index.php">HOME</a><br />
          <a href="./aboutus.php">ABOUT</a><br />
          <a href="./news.php">NEWS</a><br />
          <a href="./contact.php">CONTACT</a>
        </div>
      </div>
    </div>

    <!-- Banner -->
    <div class="aboutBanner">
      <img src="../img/logo/verticle01.png" />
    </div>

    <!-- 關於凱茂 -->
    <div class="container-fluid aboutMain">
      <div class="container vh-80">
        <div class="row">
          <div class="col-lg-6 my-5 aboutContent">
            <h1 class="indexh1">ABOUT <br />US.</h1>
            <h3 class="indexh2">關於凱茂</h3>
            <p class="indexp txtIn">
              凱茂資訊
              成立於2009年，迄今已成為多家知名軟、硬體大廠之大型客戶承銷商。目前除了臺中總部，服務耕耘客群也遍及全國北中南。
            </p>
            <p class="indexp txtIn">
              凱茂團隊以即時且反應迅速服務機制，協助客戶於最快時間獲得問題解答與排除，以及在需求時間內到場技術支援服務，另外針對客戶不同需求來提供相對應解決方案的顧問服務及專案建置。
            </p>
          </div>

          <div class="col-lg-6 KAIMAUDiv">
            <img
              class="KAIMAUImage"
              src="../img/index/aboutus00.png"
              alt="圖片 "
            />
          </div>
        </div>
      </div>
    </div>

    <!-- 合作夥伴 -->
    <div class="container mt-5 pb-5">
      <div data-aos="fade-up" class="py-3">
        <h2 class="text-center indexh2 mt-5">合作夥伴</h2>
        <p class="indexp px-30 txtIn">
          我們與各領域的科技廠商密切合作，提供符合您架構的解決方案，協助您為客戶創造更多價值。這些合作當中，包含了策略聯盟與技術聯盟兩種合作夥伴。確保在產品安裝與使用過程當中都能維持順暢的客戶體驗。
        </p>
      </div>

      <!-- 幻燈片 -->
      <div
        id="carouselExampleControls1"
        class="carousel slide carousel-01"
        data-ride="carousel"
        data-aos="fade-up"
        data-interval="1000000"
      >
        <!-- 輪播內容 -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row pt-5">
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/checkpoint-logo-stacked-large.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/ASUS.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/aruba.svg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/Dell_Logo.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="https://www.kx.com.tw/file/2017/10/25/Hep_200x200_1.jpg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row pt-5">
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/microsoft.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="https://www.kx.com.tw/file/2017/11/03/nutanix_200x200.jpg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="https://www.kx.com.tw/file/2017/10/30/Cisco_200x200.jpg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/LENOVO-1.jpg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/DVC.svg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row pt-5">
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/FORTIGATE.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/checkpoint-logo-01.jpg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/checkpoint-logo-stacked-large.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/hewlett-packard-enterprise.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-md-2">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/MICROSOFT-1.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- 左右箭頭 -->
        <button
          class="carousel-control-prev"
          type="button"
          data-target="#carouselExampleControls1"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-target="#carouselExampleControls1"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
        <!-- 指標控制 -->
        <ol class="carousel-indicators mt-3">
          <li
            data-target="#carouselExampleControls1"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleControls1" data-slide-to="1"></li>
          <li data-target="#carouselExampleControls1" data-slide-to="2"></li>
        </ol>
      </div>
      <div
        id="carouselExampleControls2"
        class="carousel slide carousel-02"
        data-ride="carousel"
        data-interval="1000000"
      >
        <!-- 輪播內容 -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row pt-5">
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/checkpoint-logo-stacked-large.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/ASUS.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/aruba.svg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row pt-5">
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/Dell_Logo.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-3">
                <a href="#">
                  <img
                    src="https://www.kx.com.tw/file/2017/10/25/Hep_200x200_1.jpg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/microsoft.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row pt-5">
              <div class="col-3">
                <a href="#">
                  <img
                    src="https://www.kx.com.tw/file/2017/11/03/nutanix_200x200.jpg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-3">
                <a href="#">
                  <img
                    src="https://www.kx.com.tw/file/2017/10/30/Cisco_200x200.jpg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/LENOVO-1.jpg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row pt-5">
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/DVC.svg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/FORTIGATE.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/checkpoint-logo-01.jpg"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row pt-5">
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/checkpoint-logo-stacked-large.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/hewlett-packard-enterprise.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
              <div class="col-3">
                <a href="#">
                  <img
                    src="../資訊圖庫/合作夥伴logo/MICROSOFT-1.png"
                    alt="Image"
                    class="img-thumbnail"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- 左右箭頭 -->
        <button
          class="carousel-control-prev"
          type="button"
          data-target="#carouselExampleControls2"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-target="#carouselExampleControls2"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
        <!-- 指標控制 -->
        <ol class="carousel-indicators mt-3">
          <li
            data-target="#carouselExampleControls2"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleControls2" data-slide-to="1"></li>
          <li data-target="#carouselExampleControls2" data-slide-to="2"></li>
          <li data-target="#carouselExampleControls2" data-slide-to="3"></li>
          <li data-target="#carouselExampleControls2" data-slide-to="4"></li>
        </ol>
      </div>
    </div>

    <!-- 凱茂理念 -->
    <div class="container-fluid" style="background-color: #ffffff">
      <div class="container mt-5 aboutContent">
        <div class="row">
          <div data-aos="fade-right" class="col-lg-6">
            <h2 class="indexh2">凱茂理念</h2>
            <h1 class="indexh1">Take KAIMAU<br />Take the Future.</h1>
            <p class="indexp txtIn">
              資安議題日漸受重視，資訊安全的威脅無所不在，不論是企業或是政府組織，潛藏在暗處的惡意攻擊者都是一視同仁，凱茂資訊洞察產業趨勢與眾多資訊安全系統的原廠及代理商合作，針對不同產業對資安的需求，依照客戶的情境提出精準完整的解決方案。
            </p>
          </div>

          <div data-aos="zoom-out-left" data-aos-delay="200" class="col-lg-6">
            <div class="cube">
              <div class="top"></div>
              <div>
                <span style="--i: 0">
                  <h4>Take the Future</h4>
                  <h4>Take the Future</h4>
                </span>
                <span style="--i: 1">
                  <h4>Take KAIMAU</h4>
                  <h4>Take KAIMAU</h4>
                </span>

                <span style="--i: 2">
                  <h4>Take the Future</h4>
                  <h4>Take the Future</h4>
                </span>

                <span style="--i: 3">
                  <h4>Take KAIMAU</h4>
                  <h4>Take KAIMAU</h4>
                </span>
              </div>
            </div>

            <div class="cube1">
              <div class="top1"></div>
              <div>
                <span style="--i: 0">
                  <h2>Take<br />the<br />Future</h2>
                  <h2>Take<br />the<br />Future</h2>
                </span>
                <span style="--i: 1">
                  <h2>Take KAIMAU</h2>
                  <h2>Take KAIMAU</h2>
                </span>

                <span style="--i: 2">
                  <h2>Take<br />the<br />Future</h2>
                  <h2>Take<br />the<br />Future</h2>
                </span>

                <span style="--i: 3">
                  <h2>Take KAIMAU</h2>
                  <h2>Take KAIMAU</h2>
                </span>
              </div>
            </div>

            <div class="cube2">
              <div class="top2"></div>
              <div>
                <span style="--i: 0">
                  <h2>
                    Take <br />
                    the<br />
                    Future
                  </h2>
                  <h2>
                    Take <br />
                    the<br />
                    Future
                  </h2>
                </span>
                <span style="--i: 1">
                  <h2>
                    Take <br />
                    KAIMAU
                  </h2>
                  <h2>
                    Take <br />
                    KAIMAU
                  </h2>
                </span>

                <span style="--i: 2">
                  <h2>
                    Take <br />
                    the<br />
                    Future
                  </h2>
                  <h2>
                    Take <br />
                    the<br />
                    Future
                  </h2>
                </span>

                <span style="--i: 3">
                  <h2>
                    Take <br />
                    KAIMAU
                  </h2>
                  <h2>
                    Take <br />
                    KAIMAU
                  </h2>
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- <div>
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee"></rect>
                    <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg>
                <img src="" alt="">
            </div> -->
        <!-- <div>
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee"></rect>
                    <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg>
                <img src="" alt="">
            </div> -->
        <!-- <div><img src="" alt=""></div> -->
      </div>
    </div>

    <!-- 里程碑 -->
    <div class="milestone pt-5">
      <h2 class="indexh2 text-center">里程碑</h2>

      <div class="timeline mt-5">
        <div class="line mt-5"></div>

        <div class="section">
          <div class="bead"></div>
          <div class="content-timeline txtR">
            <img src="../img/logo/color-whitebg.jpg" />
            <h2 class="indexh2">2009年</h2>
            <p class="indexptimeline">凱茂資訊股份有限公司成立。</p>
          </div>
        </div>

        <div class="section">
          <div class="bead"></div>
          <div class="content-timeline txtL">
            <img src="../img/aboutUs/laptop.jpg" />
            <h2 class="indexh2">2010年</h2>
            <p class="indexptimeline">成為華碩卓越黃金經銷夥伴。</p>
          </div>
        </div>

        <div class="section">
          <div class="bead"></div>
          <div class="content-timeline txtR">
            <img src="../img/aboutUs/laptop.jpg" />
            <h2 class="indexh2">2013年</h2>
            <p class="indexptimeline">
              成為Microsoft Gold Partner Network微軟金級合作伙伴。
            </p>
          </div>
        </div>

        <div class="section">
          <div class="bead"></div>
          <div class="content-timeline txtL">
            <img src="../img/aboutUs/laptop.jpg" />
            <h2 class="indexh2">2014年</h2>
            <p class="indexptimeline">
              成為Intel Technology Provider Gold Partner。
            </p>
          </div>
        </div>

        <div class="section">
          <div class="bead"></div>
          <div class="content-timeline txtR">
            <img src="../img/aboutUs/skyscraper.jpg" />
            <h2 class="indexh2">2019年</h2>
            <p class="indexptimeline">購置台中辦公室(現址)。</p>
          </div>
        </div>

        <div class="section">
          <div class="bead"></div>
          <div class="content-timeline txtL">
            <img src="../img/aboutUs/growth.png" />
            <h2 class="indexh2">2021年</h2>
            <p class="indexptimeline">營業額連續三年成長20%。</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="container-fluid footer">
        <div style="text-align: center; width: 100%; margin: auto">
          <img
            src="../images/logo-gray.png"
            style="height: 40px; margin: 20px"
          />
          <hr />
          <a href="./index.html" class="m-2">HOME</a>
          <a href="./aboutus.html" class="m-2">ABOUT</a>
          <a href="./news.html" class="m-2">NEWS</a>
          <a href="./contact.html" class="m-2">CONTACT</a>
          <br />
          <br />
          <p style="font-size: 14px; color: #a2a2a2">&copy; 2022 凱茂資訊</p>
        </div>
      </div>
    </footer>

    <script src="../js/navbar.js"></script>
    <script src="../js/timeline.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-1.7.1.min.js"></script>
    <script src="../js/jquery.timelinr-0.9.4.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>