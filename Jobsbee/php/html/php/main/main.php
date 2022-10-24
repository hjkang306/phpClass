<?php
    include "../connect/session.php";
    include "../connect/connect.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainPage</title>
    <link rel="stylesheet" href="../../html/asset/css/style.css">
    <link rel="stylesheet" href="../../html/asset/css/jobsbeeMain.css">
    <link rel="stylesheet" href="../../html/asset/css/category_R.css">
    <link rel="stylesheet" href="../../html/asset/css/category_S.css">

    <?php 
        include "../include/link.php";
    ?>

    <style>
        #category {margin-bottom: 0;}
        .header__none {display: none;}
    </style>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main>
        <section id="jobsbeenator">
            <div class="jobsbee__bg">
                <div class="bgText" aria-hidden="true">jobsbeejobsbeejobsbee</div>
                <div class="bgImg"></div>
            </div>
            <div class="jobsbee__wrap">
                <div class="jobsbee__inner">
                    <div class="jobsbee__search">
                        <h2>
                            안녕하세요! 저는 잡스비예요 :D<br>
                            무엇이 불편하신가요?
                        </h2>
                        <form action="jobsbeeSearchResult.php" name="jobsbeeSearch" method="get">
                            <fieldset>
                                <legend class="blind">잡스비 검색 영역</legend>
                                <input type="search" name="JsearchKeyword" id="JsearchKeyword" placeholder="검색어를 입력해 주세요…" aria-label="search" required>
                                <button type="submit" class="JsearchBtn"><span class="blind">검색</span></button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="jobsbeeIcon"></div>
                </div>
                <div class="more"><a href="#category">더 알아보기</a></div>
            </div>
        </section>
        <!-- //jobsbeenator -->

        <section id="category" class="container">
            <h3>분류별로 꿀팁들을 찾아보세요!</h3>
            <div class="category__inner">
                <div class="categoryIcon">
                    <a href="../category/category_S.php">
                        <div class="icon icon1"></div>
                        <h4>건강</h4>
                    </a>
                </div>
                <div class="categoryIcon">
                    <a href="../category/category_S.php">
                        <div class="icon icon2"></div>
                        <h4>전자기기</h4>
                    </a>
                </div>
                <div class="categoryIcon">
                    <a href="../category/category_S.php">
                        <div class="icon icon3"></div>
                        <h4>청소</h4>
                    </a>
                </div>
                <div class="categoryIcon">
                    <a href="../category/category_S.php">
                        <div class="icon icon4"></div>
                        <h4>취미</h4>
                    </a>
                </div>
                <div class="categoryIcon">
                    <a href="../category/category_S.php">
                        <div class="icon icon5"></div>
                        <h4>라이프 스타일</h4>
                    </a>
                </div>
                <div class="categoryIcon">
                    <a href="../category/category_S.php">
                        <div class="icon icon6"></div>
                        <h4>건강</h4>
                    </a>
                </div>
                <div class="categoryIcon">
                    <a href="../category/category_S.php">
                        <div class="icon icon7"></div>
                        <h4>전자기기</h4>
                    </a>
                </div>
                <div class="categoryIcon">
                    <a href="../category/category_S.php">
                        <div class="icon icon8"></div>
                        <h4>청소</h4>
                    </a>
                </div>
                <div class="categoryIcon">
                    <a href="../category/category_S.php">
                        <div class="icon icon9"></div>
                        <h4>취미</h4>
                    </a>
                </div>
                <div class="categoryIcon">
                    <a href="../category/category_S.php">
                        <div class="icon icon10"></div>
                        <h4>라이프 스타일</h4>
                    </a>
                </div>
            </div>
        </section>
        <!-- //category -->

        <section id="todayBestTip" class="container">
            <h3>오늘의 '<em>통합</em>' 꿀팁 <em>BEST_3</em></h3>
            <div class="list__inner">
                <ul>
<?php
    // 두개의 테이블 join
    $sql = "SELECT b.myTipsID, b.TipsTitle, b.TipsView, b.TipsLike, b.regTime FROM myTips b JOIN myMember m ON (b.myMemberID = m.myMemberID) ORDER BY TipsLike DESC LIMIT 0, 3";
    $result = $connect -> query($sql);
    if($result){
        $count = $result -> num_rows;
        if($count > 0){
            for($i=1; $i<=3; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                switch ($i) {
                    case 1 :
                        echo "<li class='gold'><a href='http://bb020440.dothome.co.kr/php/category/small_cg_detail.php?myTipsID={$info['myTipsID']}'><h4>".$info['TipsTitle']."</h4></a></li>";
                    break;
                    case 2 :
                        echo "<li class='silver'><a href='http://bb020440.dothome.co.kr/php/category/small_cg_detail.php?myTipsID={$info['myTipsID']}'><h4>".$info['TipsTitle']."</h4></a></li>";
                    break;
                    case 3 :
                        echo "<li class='bronze'><a href='http://bb020440.dothome.co.kr/php/category/small_cg_detail.php?myTipsID={$info['myTipsID']}'><h4>".$info['TipsTitle']."</h4></a></li>";
                    break;
                    // http://bb020440.dothome.co.kr/php/category/small_cg_detail.php?myTipsID=7
                }
            }
        } 
        else {
            echo "<div class='issue__title'>게시글 오류입니다. 관리자에게 문의하세요!</div>";
        }
    }
?>
                    <!-- <li class="gold"><a href="#"><h4>고기만두 최고의 짝꿍은 김치만두?!</h4></a></li>
                    <li class="silver"><a href="#"><h4>아이디를 교자만두로 만들면 모든 사이트 기능을 사용할 수 있다?!</h4></a></li>
                    <li class="bronze"><a href="#"><h4>잡스비 만두가게 개업설</h4></a></li> -->
                </ul>
            </div>
        </section>
        <!-- //todayBestTip -->

        <?php include "../include/footer.php" ?>
        <!-- //footer -->
    </main>

    <script>
        // 배경 스크롤 패럴랙스 효과
        function scroll(){
            let scrollTop = window.pageYOffset;

            const target1 = document.querySelector(".bgImg");
            const target2 = document.querySelector(".bgText");
            
            let offset1 = -scrollTop * 0.5;
            let offset2 = -scrollTop * 0.2;

            // gsap.to(target1, {target1: .3, y: offset1, ease: "power4.out"});
            // gsap.to(target2, {target1: .3, y: offset2, ease: "power4.out"});
            target1.style.top = offset1 + "px";
            target2.style.top = -25 + offset2 + "px";
            
            //헤더 보이기
            if(scrollTop > window.innerHeight - 150){
                document.querySelector("#header").classList.add("show");
            } else {
                document.querySelector("#header").classList.remove("show");
            }
            requestAnimationFrame(scroll);
        }
        scroll();

        //더보기 누르면 아래로
        const moreBtn = document.querySelector(".jobsbee__wrap .more a");
        moreBtn.addEventListener("click", e => {
            e.preventDefault();

            document.querySelector(moreBtn.getAttribute("href")).scrollIntoView({behavior: "smooth"});
        });
    </script>
</body>
</html>