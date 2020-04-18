<template>
  <div class="profile-con">
    <MypageSidebar :typTxt="'こちらはプロフィールを紹介するページです。'" />

    <div class="profile-con__inner--right">
      <section class="profile-sec">
        <div class="profile-sec__inner">
          <h2 class="profile-title">Profile</h2>
          <h3 class="my-name">岩井 康平</h3>
          <ul class="about-me">
            <li class="about-me__list">1997年3月2日</li>
            <li class="about-me__list">特技はサッカー,ポジション(MF)</li>
            <li class="about-me__list">趣味は映画鑑賞,スマブラ,アニメ,筋トレ</li>
          </ul>
          <hr class="under-line" />
          <dl class="career">
            <dt class="career__term">2019年7月~11月</dt>
            <dd class="career__desc">(Web制作会社)株式会社Gizumo 契約社員</dd>
            <dt class="career__term">2019年1月-2019年4月</dt>
            <dd class="career__desc">(Web制作会社)株式会社ワンゴジュウゴ インターンシップ</dd>
            <dt class="career__term">2018年9月-2019年3月</dt>
            <dd class="career__desc">(職業訓練校)フェリカテクニカルアカデミーWebサイト制作科 修了</dd>
          </dl>
          <hr class="under-line" />
          <p class="pr">自分が得意なこと、好きなことを仕事にしたいと思い職業適正検査を行い,Webコーダーやプログラマーに向いてると知り、職業訓練校を受講。</p>
          <p class="pr">職業訓練では、分からないことがあっても講師に聞かずにできるだけ自分で解決することをモットーに授業を受けていました。</p>
          <p class="pr">インターンシップでは、仲間とコミュニケーションを取り、意見交換をしながら同じ目標に向かって制作を進めていました。</p>
          <p
            class="pr"
          >インターンシップや日々の学習でフロントの経験を積んでいくなかでWebの裏側に興味を持ち、PHPとSQLの学習後、バックエンドの研修をメインに行っていた株式会社Gizumoに入社しました。</p>
          <p class="pr">作業時は常に効率や可読性を考え、新しく学んだことは積極的に取り入れるようにしています。</p>
        </div>
        <!--.profile-sec__inner-->
      </section>
      <!--.profile-sec #profileArea-->
    </div>
    <!--.profile-con__inner--right-->
  </div>
  <!--.profile-con-->
</template>


<script>
import MypageSidebar from "~/components/organisms/MypageSidebar";

export default {
  layout: "mypage",
  components: {
    MypageSidebar
  }
};
</script>
