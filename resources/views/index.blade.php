<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>花草feifei</title>
    <!-- link css 順序 1.bs 2.self -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),
                url(./img/bg.jpg);
            /* 淡化的線性漸層加背景圖片 */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .social-icon {
            font-size: 15px;
            /* 更適合的圖標大小 */
            margin: 0 10px;
            /* 增加按鈕間隔 */
            display: inline-flex;
            /* 讓圖標與背景共同對齊 */
            justify-content: center;
            /* 水平居中 */
            align-items: center;
            /* 垂直居中 */
            text-decoration: none;
            width: 40px;
            /* 圓形背景的寬度 */
            height: 40px;
            /* 圓形背景的高度 */
            border-radius: 10%;
            /* 使背景圓形 */
            padding: 5px;
            transition: all 0.3s ease;
            /* 加入過渡效果 */
        }

        /* LINE */
        .line-icon {

            background-color: white;
            /* LINE 綠色 */
            color: #00C300;

        }

        /* Facebook */
        .facebook-icon {
            background-color: #1877F2;
            /* Facebook 藍色 */
            color: white;
        }

        /* Instagram */
        .instagram-icon {
            background: linear-gradient(45deg, #f58529, #d62976, #962fbf, #4c68d7);
            /* Instagram 漸層顏色 */
            color: white;
        }

        /* 滑鼠懸停時變化 */
        .social-icon:hover {
            opacity: 0.8;
            /* 懸停時稍微透明 */
            transform: scale(1.2);
            /* 懸停時放大，並稍微增大效果 */
        }


        footer {
            width: 100%;
            /* height: 240px; */
            background-color: burlywood;
            padding: 20px;
        }

        img {
            border-radius: 5px;
        }


        i {
            font-size: 25px;
            /* 統一圖標大小 */
            line-height: 1;
            /* 避免行高影響 */
            vertical-align: middle;
            /* 確保垂直居中 */
        }

        /* 手機版設置 */
        @media (max-width: 768px) {
            .instagram-embed {
                padding-bottom: 100%;
            }
        }

        /* 平板和桌面版設置 */
        @media (min-width: 768px) {
            .instagram-embed {
                padding-bottom: 56.25%;
                /* 16:9比例 */
            }
        }
    </style>


</head>

<body>
    <!-- 第一部分  nav -->
    <!-- container -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)">花草feifei</a>
            <a class="navbar-brand" href="#">
                <img src="./img/0.logo.jpg" alt="Grass" style="width:40px;" class="rounded-pill">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">永生花的由來<i class="fas fa-seedling"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page1">療癒手作<i class="fa-solid fa-hand-spock"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page3">花卉展示及訂購連結<i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#page4">諮詢需求<i class="fa-regular fa-comment-dots"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 第二部分  carousel -->
    <div class="container-fluid vh-50">
        <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/images/t-1.jpg')}}" alt="" class="d-block w-100" style="object-fit:cover; height: 60vh;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/t-2.jpg')}}" alt="" class="d-block w-100" style="object-fit:cover; height: 60vh;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/t-3.jpg')}}" alt="su-1" class="d-block w-100" style="object-fit:cover; height: 60vh;">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>






    <!-- 第三部分 永生花的由來 -->
    <!-- container -->
    <div id="home"></div>

    <div class="container-fluid" style="padding-top: 50px;">
        <div class="mb-3 mt-3">
            <div class="row">
                <!-- 文字區塊，增加左邊的空白，並設置文字大小 -->
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-4">
                    <div style="font-size: 1.2rem; padding-bottom: 20px;">
                        <br>
                        <br>
                        <br>
                        永生花的故事源自一段動人的愛情。<br>
                        <br>
                        有一對深愛的情侶，男孩參加戰爭臨別前，
                        <br>
                        將一束玫瑰和一封信交給女孩，
                        <br>
                        告訴她當玫瑰最後一片花瓣凋落時，
                        <br>
                        代表她已經忘記他，開始新生活。<br>
                        <br>
                        女孩將玫瑰放入花瓶，默默祈禱。
                        <br>
                        戰爭噩耗不斷，但玫瑰花瓣始終未掉。
                        <br>
                        最終，男孩凱旋歸來，兩人手牽手走過一生，
                        <br>
                        那束依然挺立的玫瑰永遠留在他們身邊。<br>
                        <br>
                        這段故事在歐洲流傳，
                        <br>情侶們會留下玫瑰或將花瓣製成永生花，
                        <br>祈願擁有像故事中一樣的幸福與永恆愛情。<br>
                        <br>
                        永生花象徵著「不變的愛」、「永恆的幸福」，和「美麗長存」。
                        <br>
                        它們能夠保持美麗三年以上，象徵著永恆、忠誠的愛情。<br>
                    </div>

                </div>

                <!-- 圖片區塊 -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/images/1226-0001.jpg')}}" alt="" style="height:800px; max-width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>




    <!-- 第四部分 手作永生花小桌花 -->
    <!-- container -->
    <div id="page1"></div>
    <div class="container-fluid" style="padding-top: 50px;">
        <div class="row">
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-4">
                <iframe width="100%" height="385"
                    src="https://www.youtube.com/embed/umhvFa2WQwI?pp=ygUV5rC455Sf6Iqx5Yi25L2c5pa55rOV" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-12 col-md-4">
                <div style="font-size: 1.2rem; margin-top:50px;">
                    在快節奏與壓力重重的生活中，
                    <br>我們常常忘記停下來呼吸。
                    <br>手工花小桌花的製作是一個放鬆心情的好方法。
                    <br><br>
                    當雙手捏造每一朵花，焦慮漸漸消散，心情也變得輕鬆。
                    <br>這些小小的花朵不僅帶來視覺的美感，
                    <br>更讓我們重新找回內心的寧靜。</br>
                    <br>
                    在忙碌的生活中，透過手作花卉，
                    <br>暫時放下壓力，享受片刻的平靜與美麗。</br>
                </div>
            </div>
        </div>
    </div>


    <!-- 第五部分 -->
    <!-- container -->
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row">
            <!-- 文字區塊，靠右 -->
            <div class="col-12 col-md-8" style="font-size: 1.2rem; margin-top:50px; text-align: center;">
                <p>特別節日花卉訂購 ~ 歡樂聖誕節 ~ 手作聖誕花圈 </p>
                <!-- <div class="d-flex flex-wrap justify-content-end"> -->
                <div class="d-flex flex-wrap justify-content-center">
                    <img src="./img/c-1.jpg" alt="" class="img-fluid m-2" style="max-width: 200px; height: auto;">
                    <img src="./img/c-2.jpg" alt="" class="img-fluid m-2" style="max-width: 200px; height: auto;">
                    <img src="./img/c-3.jpg" alt="" class="img-fluid m-2" style="max-width: 200px; height: auto;">
                    <img src="./img/c-4.jpg" alt="" class="img-fluid m-2" style="max-width: 200px; height: auto;">
                    <img src="./img/c-5.jpg" alt="" class="img-fluid m-2" style="max-width: 200px; height: auto;">
                </div>
            </div>

            <!-- 影片區塊，iframe設定自適應 -->
            <div class="col-12 col-md-4 instagram-embed" style="position: relative; height: 0; overflow: hidden;">
                <iframe src="https://www.instagram.com/p/DBSYEh_hd0u/embed" frameborder="0" scrolling="no"
                    allowtransparency="true"
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;">
                </iframe>
            </div>



        </div>
    </div>

    <!-- 新增  第七部分 花店銷售統計 -->
    <div class="container mt-5">
        <h1>要送甚麼花好呢</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4>參考看看別人都買甚麼花吧</h4>
                <canvas id="salesChart"></canvas>
            </div>

            <div class="col-md-6">
                每種花都有自己的花語，都有不同的象徵意義，這些花語常被用來表達情感和祝福！你最喜歡哪一朵花呢？
                <pre>
                玫瑰（Rose）：
                紅玫瑰：愛與浪漫、熱情、真摯的愛情。
                白玫瑰：純潔、無瑕、尊敬。
                黃玫瑰：友誼、祝福、關懷。
                粉紅玫瑰：感謝、欣賞、溫柔的愛情。
                藍玫瑰：神秘、獨特、無法得到的愛。
                
                百合（Lily）：
                白百合：純潔、高雅、貞潔。
                紅百合：愛與激情。
                粉紅百合：女性的美麗和優雅。
                橙百合：熱情、慷慨。
                黃色百合：快樂、幸福。
                
                鬱金香（Tulip）：
                紅鬱金香：真愛、深愛。
                黃鬱金香：陽光、快樂、樂觀。
                粉紅鬱金香：愛的告白、浪漫。
                白鬱金香：尊敬、讚美、無瑕的愛。
                
                牡丹（Peony）：
                牡丹（一般）：富貴、繁榮、尊貴。
                紅牡丹：熱情、愛情。
                粉紅牡丹：浪漫、優雅、美麗。
                白牡丹：純潔、無瑕的愛、尊敬。
            </pre>
            </div>
            <hr>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h3>月銷售額趨勢</h3>
                    <canvas id="monthlySalesChart"></canvas>
                </div>
                <div class="col-md-6 ">
                    謝謝新同學，也謝謝老同學時不是的回來餐與活動及捧場</div>
            </div>
            <hr>
            <hr>
        </div>
    </div>




    <!-- 第六部分 花束圖片展示區 -->
    <div id="page3"></div>
    <div class="container-fluid" style="margin-top: 100px" ;>
        <p
            style="font-size: 1.5rem; font-weight: bold; color: #333; background-color: #f4f4f4; padding: 10px; text-align: center; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
            創意花藝，與你共享美好時光🕰️
        </p>

        <div class=" mb-3 mt-3">
            <div class="row" style="margin-top: 10px;">
                <div class="col-6 col-md-3">
                    <img src="{{asset('assets/images/1226-1.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{asset('assets/images/1226-2.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{asset('assets/images/1226-3.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-3">
                    <img src="{{asset('assets/images/1226-4.jpg')}}" alt="" class="img-fluid">
                </div>

            </div>


            <div class="row" style="margin-top: 10px;">
                <div class="col-6 col-md-2">
                    <img src="{{asset('assets/images/1226-5.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2">
                    <img src="{{asset('assets/images/1226-6.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2">
                    <img src="{{asset('assets/images/1226-7.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2">
                    <img src="{{asset('assets/images/1226-8.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2">
                    <img src="{{asset('assets/images/1226-9.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2">
                    <img src="{{asset('assets/images/1226-10.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-6 col-md-3">
                    <img src="./img/1226-11.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-3">
                    <img src="./img/1226-12.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-3">
                    <img src="./img/1226-13.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-3">
                    <img src="./img/1226-14.jpg" alt="" class="img-fluid">
                </div>

            </div>


            <div class="row" style="margin-top: 10px;">
                <div class="col-6 col-md-2">
                    <img src="./img/1226-15.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2">
                    <img src="./img/1226-16.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2">
                    <img src="./img/1226-17.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2">
                    <img src="./img/1226-18.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2">
                    <img src="./img/1226-19.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2">
                    <img src="./img/1226-20.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div style="display: flex; align-items: center; gap: 10px;">
            <p><i class="fa-solid fa-heart" style="color:red;"></i>心動下訂請點選此
                <a
                    href="https://l.instagram.com/?u=https%3A%2F%2Fforms.gle%2Fk9Uxc2asrG2jiuU76&e=AT3xskqr03uPSqIB2vPuBatn9cWUZFKqcan5IM8G_rTjj28tgxPK3unNOtoz9N44uUZ1Hiq0fvAJz6Dm0ABORjFfmn-_RPNYF-sG6hg">週花訂購表單
                    <i class="fa-solid fa-sheet-plastic" style="color:#D1B38C;"></i> </a>
            </p>
            <p>
                <a href=" https://www.pinkoi.com/store/huatsaofeifei?utm_campaign=koc&utm_content=huatsaofeifei&utm_medium=ios_share&utm_source=Copy&utm_term=store"
                    target="_blank" class="text-dark mx-2">
                    Poikoi訂購<img src="./img/pinkoi.png" alt="pinkoi"
                        style="width: 30px; height: 30px;border-radius: 5px;">
                </a>
            </p>


        </div>

    </div>

    <!-- 表單區 -->
    <div id="page4"></div>
    <div class="container-fluid" style="margin-top: 100px;">
        <form action="/action_page.php">

            <div class="container-fluid">
                <h2>線上表單－專人諮詢</h2>
                ❀ 若對於網站內容有疑問、對於訂購有問題、或有任何建議的話，歡迎使用以下表單，來訊詢問，謝謝！
                <div class="mb-3 mt-3">
                    <form>
                        <div class="row">
                            <div class="col-1">
                                <label for="name" class="form-label">姓 名:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="請輸入姓名" name="name">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-1">
                                <label for="number" class="form-label">電 話:</label>
                            </div>
                            <div class="col-8">
                                <input type="number" class="form-control" placeholder="請輸入聯絡電話" name="phoneNumber">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-1">
                                <label for="lineId" class="form-label">LINE:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="請輸入LINE ID" name="lineId">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-1">
                                <label for="email" class="form-label">Mail:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="請輸入E-mail" name="email">
                            </div>
                        </div>



                        <div class="container-fluid">
                            <div class="row">
                                <!-- 左側：需求花禮 -->
                                <div class="col-12 col-md-6">
                                    <label for="browser" class="form-label">需求花禮</label>

                                    <div class="row" style="gap: 10px;"> <!-- 設定 gap 來減少列間距 -->
                                        <!-- 第一行選項 -->
                                        <div class="col-12 col-md-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check1"
                                                    name="option1" value="something" checked>
                                                <label class="form-check-label" for="check1">鮮花花束</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check2"
                                                    name="option2" value="something">
                                                <label class="form-check-label" for="check2">鮮花桌花</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check3"
                                                    name="option3" value="something">
                                                <label class="form-check-label" for="check3">永生乾燥花束</label>
                                            </div>
                                        </div>

                                        <!-- 第二行選項 -->
                                        <div class="col-12 col-md-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check4"
                                                    name="option4" value="something">
                                                <label class="form-check-label" for="check4">永生乾燥桌花</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check5"
                                                    name="option5" value="something">
                                                <label class="form-check-label" for="check5">永生相關花禮</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check6"
                                                    name="option6" value="something">
                                                <label class="form-check-label" for="check6">高架花籃</label>
                                            </div>
                                        </div>

                                        <!-- 第三行選項-->
                                        <div class="col-12 col-md-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check7"
                                                    name="option7" value="something">
                                                <label class="form-check-label" for="check7">提籃花</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check8"
                                                    name="option8" value="something">
                                                <label class="form-check-label" for="check8">植栽</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check9"
                                                    name="option9" value="something">
                                                <label class="form-check-label" for="check9">其他</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 右側：需求目的 -->
                                <div class="col-12 col-md-6">
                                    <label for="browser" class="form-label">需求目的</label>

                                    <div class="row" style="gap: 10px;"> <!-- 設定 gap 來減少列間距 -->
                                        <!-- 第一行選項 -->
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check10"
                                                    name="option10" value="something" checked>
                                                <label class="form-check-label" for="check10">送禮</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check11"
                                                    name="option11" value="something">
                                                <label class="form-check-label" for="check11">祝賀</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check12"
                                                    name="option12" value="something">
                                                <label class="form-check-label" for="check12">節日</label>
                                            </div>
                                        </div>

                                        <!-- 第二行選項 -->
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check13"
                                                    name="option13" value="something">
                                                <label class="form-check-label" for="check13">商用</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check14"
                                                    name="option14" value="something">
                                                <label class="form-check-label" for="check14">婚禮</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check15"
                                                    name="option15" value="something">
                                                <label class="form-check-label" for="check15">其他</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-1">
                                <label for="comment">其 他:</label>
                            </div>
                            <div class="col-8">
                                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>

                            </div>
                        </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"
                style="background-color: #5D4037; border-color: #5D4037;">提交</button>
            <p>謝謝您的主動聯絡，請留下要您的聯繫資料與諮詢的問題，我們會以您留下的聯繫方式盡快進行回覆。</p>
        </form>
    </div>




    <!-- 第七部分 footer -->
    <footer>
        <div class="container-fluid">
            <div class="mb-3 mt-3">
                <div class="row">
                    <!-- 左側區域：社交和資格 -->
                    <div class="col-md-6">
                        <div>
                            <p>🌹法國AAFF Niveau III高級證照</p>
                            <p>🌷日本AUBE 不凋花協會證書/講師資格</p>
                            <p>🚚服務範圍：雙北、桃園地區</p>
                            <p>🏡門市資訊: 新北市林口區南勢四街196巷17號, New Taipei City 244</p>
                        </div>
                        <div>
                            <p>聯絡我們</p>
                            <!-- LINE -->
                            <a href="https://line.me/R/ti/p/@287lkmtd" target="_blank" title="Line"
                                class="social-icon line-icon">
                                <i class="fa-brands fa-line" style="font-size: 2.7rem;"></i>

                            </a>
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/profile.php?id=61556129413714" target="_blank"
                                title="Facebook" class="social-icon facebook-icon">
                                <i class="fa-brands fa-facebook-f" style="font-size: 2.2rem;"></i>
                            </a>
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/huatsaofeifei/" target="_blank" title="Instagram"
                                class="social-icon instagram-icon">
                                <i class="fab fa-instagram" style="font-size: 2.4rem;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- 右側區域：地圖 -->
                    <div class="col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9106.330018627279!2d121.3537992533171!3d25.073089212784648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7e0e9cd0d4b%3A0xc537d2f72ff8a850!2z6Iqx6I2JZmVpIGZlaeiKseiXneW3peS9nOWupA!5e0!3m2!1szh-TW!2stw!4v1730341059051!5m2!1szh-TW!2stw"
                            width="100%" height="300" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>















    <!-- js include 順序 1.bs 2.jq 3.self -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function () {

        });
    </script>

    <script>
        // 圓餅圖 - 顯示花卉類別銷售比例
        var ctx1 = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: ['玫瑰', '百合', '鬱金香', '牡丹', '其他'],
                datasets: [{
                    data: [40, 20, 15, 10, 15], // 銷售比例
                    backgroundColor: ['#D8A1A6', '#8C9D7D', '#B69AC1', '#D0C29F', '#6A7E99'],
                    borderColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF'],
                    borderWidth: 1
                }]
            }
        });

        // 折線圖 - 顯示月銷售額趨勢
        var ctx2 = document.getElementById('monthlySalesChart').getContext('2d');
        var monthlySalesChart = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '10月', '10月', '11月', '12月'],
                datasets: [{
                    label: '銷售額',
                    data: [1200, 1500, 1400, 1700, 1600, 1850, 1750, 1500, 1600, 1700, 1800, 2050], // 每月銷售額
                    fill: false,
                    borderColor: '#FF5733',
                    tension: 0.1
                }]
            }
        });
    </script>
</body>

</html>