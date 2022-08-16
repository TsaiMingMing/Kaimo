<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>凱茂資訊 GET IN TOUCH</title>

    <style>
        @import url('[https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&family=Noto+Serif+TC:wght@200&display=swap](https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&family=Noto+Serif+TC:wght@200&display=swap)');
        @import url('[https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&display=swap](https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&display=swap)');
    </style>


    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/paragraph.css">
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/utilities.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"></script>
    <script src="https://cdn.usebootstrap.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="../img/logo/favicon.ico" />
    <link rel="bookmark" href="../img/logo/favicon.ico" />


</head>

<body>

    <input type="checkbox" id="active">
    <label for="active" class="menu-btn">
        <span></span>
        <span></span>  <!-- 3個span-->
        <span></span>
    </label>
    <label for="active" class="close"></label>
    <div class="wrapper">
        <div class="wapperContent">
            <img src="../img/logo/only-logo.png" style="width:80px;position: absolute;position:0px 0px;">

            <div class="wapperContentWord">
                <a href="./index.php">HOME</a><br>
                <a href="./aboutus.php">ABOUT</a><br>
                <a href="./news.php">NEWS</a><br>
                <a href="./contact.php">CONTACT</a>
            </div>
        </div>
    </div>

    <div class="contactBanner">
        <img src="../img/logo/verticle01.png">
    </div>

    <div class="mb-5 pt-5">
        <div class="container text-center">
            <h1 class="indexh1">GET IN TOUCH</h1>
            <h2 class="indexh2 mb-5">聯絡我們</h2>
        </div>
    </div>
    <div id="content" class="container mb-5">
        <div class="row mt-5">
            <div id="contactForm" class="col-xl rounded border p-3 shadow m-3 ">
                <p class="indexh3"> 諮詢與服務表單：</p>
                <form method="post" action="../php/form.php" onsubmit="SubmitForm()">
                    <!-- 使用VScode PHP server -->
                    <div class="form-group">
                        <label for="FormName" class="pl-2 titleFont">姓名 <span>*</span><span id="NameIfo"></span></label>
                        <input type="text" name="Name" id="FormName" class="form-control" placeholder="Name" required
                            autocomplete="off">

                    </div>
                    <div class="form-group">
                        <label for="FormCompany" class="pl-2 titleFont">公司 <span>*</span></label>
                        <input type="text" name="Company" id="FormCompany" class="form-control" placeholder="Company"
                            required autocomplete="off">

                    </div>
                    <div class="form-group">
                        <label for="FormTel" class="pl-2 titleFont">聯絡電話 <span>*</span></label>
                        <input type="text" name="Tel" id="FormTel" class="form-control" placeholder="Phone Number"
                            required autocomplete="off">

                    </div>
                    <div class="form-group">
                        <label for="FormEmail" class="pl-2 titleFont">電子郵件 <span>*</span> </label>
                        <input type="email" name="Email" id="FormEmail" class="form-control" placeholder="E-mail"
                            required autocomplete="off">

                    </div>
                    <div class="form-group">
                        <label for="FormContent" class="pl-2 titleFont">諮詢內容 <span>*</span></label>
                        <textarea name="Content" id="FormContent" class="form-control" placeholder="Messages" rows="3"
                            required autocomplete="off"></textarea>

                    </div>
                    <div class="form-group">
                        <img class="border" id="check" src="../php/captcha.php">
                        <!-- 使用VScode PHP server -->
                        <div id="refresh" class="ml-2">
                            <img id="refreshIcon" src="../資訊圖庫/icon/refresh-1.png" width="20px" height="20px">
                            <span class="CaptchaFont ml-2 ">更新驗證碼</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="pl-2 titleFont">驗證碼 <span>*</span></label>
                        <input type="text" name="Captcha" class="form-control" placeholder="Captcha" required
                            autocomplete="off">

                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="SEND">

                </form>
                <!-- <button onclick="test()" value="TEST">TEST</button> test -->
            </div>
            <div class="col-xl p-3 mt-5">
                <div id="map" class="border">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.9510216505255!2d120.65267762474834!3d24.13835813450139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d9f70a0914b%3A0xc15f47247005141c!2z5Yex6IyC6LOH6KiK6IKh5Lu95pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2sus!4v1655799360204!5m2!1szh-TW!2sus"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div id="mapContent" class="m-3">
                    <span class="m-2">
                        <img src="../資訊圖庫/icon/phone.png" width="30px" height="30px">
                        <span class="mapContentFont">TEL:04-2375 8388</span>
                    </span>
                    <span class="m-2">
                        <img src="../資訊圖庫/icon/fax.png" width="30px" height="30px">
                        <span class="mapContentFont">FAX:04-23759399</span>
                    </span>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <div class="container-fluid footer">
            <div style="text-align:center; width:100% ;margin:auto;">
                <img src="../images/logo-gray.png" style="height: 40px; margin:20px">
                <hr>
                <a href="./index.html" class="m-2">HOME</a>
                <a href="./aboutus.html" class="m-2">ABOUT</a>
                <a href="./news.html" class="m-2">NEWS</a>
                <a href="./contact.html" class="m-2">CONTACT</a>
                <br>
                <br>
                <p style="font-size:14px; color:#a2a2a2">&copy; 2022 凱茂資訊 </p>
            </div>
        </div>
    </footer>


    <script>


        function SubmitForm() {

            var formData = $("form").serializeArray();
            $.ajax({
                type: 'POST',
                url: '../php/check.php',
                data: formData,
                success: function (res) {
                    alert(res)
                }
            })
        }

        $(function () {

            // 驗證碼動起來
            var d = 1;

            $('#refresh').on({
                'click': function () {
                    $('#check').attr("src", "../php/captcha.php"); // 使用VScode PHP server
                    $('#refreshIcon').css('transform', `rotateZ(${-d * 360}deg)`);
                    d++;
                },
            })
        })


    </script>
    <script src="../js/navbar.js"></script>
</body>

</html>