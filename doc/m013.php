<?php
include_once('../../../common.php');
$page_num = 3;
$page_title = "건강정보";
include_once(G5_THEME_PATH . '/head.php');
?>


<div class="sub_content">
    <h3>
        <?= $page_title ?>
    </h3>

    <p class="title">
        <?= $as_slogan ?>
    </p>
    <div class="box">
        <figure data-num="01">
            <img src="../img/visual1.jpg" alt="">
        </figure>
        <figure data-num="02">
            <img src="../img/visual2.jpg" alt="">
        </figure>
        <figure data-num="03">
            <figure>
                <img src="../img/visual3.jpg" alt="">
            </figure>
    </div>

    <strong>경희의료원 홈페이지를 방문해 주신 여러분을 환영합니다.

    </strong>
    <p>경희의료원은 세계에서 유일하게 의학, 치의학, 한의학, 동서의학, 약학, 간호학 등 6개 의학분야가 공존하고 있는
        경희대학교 의료기관으로, 각 분야의 장점을 상호 보완하여 새로운 진료시스템을 구축,
        지난 50여년간 인류를 질병으로부터 지키기 위해 노력해 왔습니다.</p>
    <p>경희의료원은 환자와 보호자에게 받은 사랑을 보답하기 위해 새로운 변화와 혁신적인 시스템을 통해 질병치료의 효과를
        더욱 높임으로서 찾아오시는 모든 환자분들이 빠른 쾌유를 위해 차원 높은 의료서비스를 제공하여 지역사회와 국민보건에
        공헌하는 경희의료원으로 재도약할 것을 약속드립니다.</p>
    <p>현재 이용하고 계신 홈페이지는 환자와 보호자들께서 궁금한 병원 및 의학정보 등을 쉽게 접할 수 있도록 운영하고 있습니다.
        앞으로도 유익한 정보를 보다 신속하게 제공할 수 있도록 최선을 다하겠습니다.</p>
</div>




<?php
include_once(G5_THEME_PATH . '/tail.php');
