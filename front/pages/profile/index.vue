<template>
  <div class="profile-con">
    <div class="profile-con__inner--left">
      <p class="icon-photo">
        <img src="~/assets/img/profile-photo.png" alt="iwaiのアイコン" />
      </p>

      <ul class="profile-navs">
        <li
          class="profile-navs__list"
          :class="{ active: isPage === 'Profile' }"
          @click="isPage = 'Profile'"
        >
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span>Profile</span>
        </li>
        <li
          class="profile-navs__list"
          :class="{ active: isPage === 'Skill' }"
          @click="isPage = 'Skill'"
        >
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span>Skill</span>
        </li>
      </ul>
      <!--profile-navs-->

      <div class="profile-typ">
        <p class="profile-typ__txt">こちらはプロフィールを紹介するページです</p>
      </div>
      <!--.profile-typ-->
    </div>
    <!--.profile-con__inner--left-->

    <div class="profile-con__inner--right">
      <transition name="fade">
      <section class="profile-sec" v-show="isPage === 'Profile'">
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
      </transition>

      <transition name="fade">
      <section class="profile-sec skill-area" v-show="isPage === 'Skill'">
        <div class="profile-sec__inner">
          <h2 class="profile-title">Skill</h2>
          <div class="skill-con">
            <div class="skill-con__inner--top">
              <ul class="skill-category">
                <li class="skill-category__list skill-category__list--lang">
                  <h3 class="skill-category__list__title">スキル</h3>

                  <ul class="skill-items">
                    <li
                      class="skill-items__list"
                      @click="change('HTML')"
                      :class="{active : isActive === 'HTML'}"
                    >
                      <h4 class="skill-items__list__title">HTML</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/html-5.svg"
                        alt="HTML5のロゴ"
                      />
                      <p class="skill-items__list__level">Lv40</p>
                    </li>
                    <li
                      class="skill-items__list"
                      @click="change('CSS')"
                      :class="{active : isActive === 'CSS'}"
                    >
                      <h4 class="skill-items__list__title">CSS</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/css-3.svg"
                        alt="CSS3のロゴ"
                      />
                      <p class="skill-items__list__level">Lv30</p>
                    </li>
                    <li
                      class="skill-items__list"
                      @click="change('jQuery')"
                      :class="{active : isActive === 'jQuery'}"
                    >
                      <h4 class="skill-items__list__title">jQuery</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/jquery.svg"
                        alt="jQueryのロゴ"
                      />
                      <p class="skill-items__list__level">Lv30</p>
                    </li>
                    <li
                      class="skill-items__list"
                      @click="change('Vue')"
                      :class="{active : isActive === 'Vue'}"
                    >
                      <h4 class="skill-items__list__title">Vue</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/vue.svg"
                        alt="Vueのロゴ"
                      />
                      <p class="skill-items__list__level">Lv30</p>
                    </li>
                    <li
                      class="skill-items__list"
                      @click="change('php')"
                      :class="{active : isActive === 'php'}"
                    >
                      <h4 class="skill-items__list__title">php</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/php.svg"
                        alt="PHPのロゴ"
                      />
                      <p class="skill-items__list__level">Lv30</p>
                    </li>
                    <li
                      class="skill-items__list"
                      @click="change('WP')"
                      :class="{active : isActive === 'WP'}"
                    >
                      <h4 class="skill-items__list__title">WP</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/wp.svg"
                        alt="wordpressのロゴ"
                      />
                      <p class="skill-items__list__level">Lv10</p>
                    </li>
                    <li
                      class="skill-items__list"
                      @click="change('Laravel')"
                      :class="{active : isActive === 'Laravel'}"
                    >
                      <h4 class="skill-items__list__title">Laravel</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/laravel.svg"
                        alt="Laravelのロゴ"
                      />
                      <p class="skill-items__list__level">Lv30</p>
                    </li>
                    <li
                      class="skill-items__list"
                      @click="change('MySQL')"
                      :class="{active : isActive === 'MySQL'}"
                    >
                      <h4 class="skill-items__list__title">MySQL</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/mysql.svg"
                        alt="MySQLのロゴ"
                      />
                      <p class="skill-items__list__level">Lv20</p>
                    </li>
                  </ul>
                </li>

                <li class="skill-category__list skill-category__list--tool">
                  <h3 class="skill-category__list__title">ツール</h3>

                  <ul class="skill-items">
                    <li
                      class="skill-items__list skill-items__list--tool"
                      @click="change('gulp')"
                    >
                      <h4 class="skill-items__list__title">gulp</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/gulp.svg"
                        alt="gulpのロゴ"
                      />
                    </li>
                    <li
                      class="skill-items__list skill-items__list--tool"
                      @click="change('git')"
                    >
                      <h4 class="skill-items__list__title">git</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/git.svg"
                        alt="gitのロゴ"
                      />
                    </li>
                    <li
                      class="skill-items__list skill-items__list--tool"
                      @click="change('Docker')"
                    >
                      <h4 class="skill-items__list__title">Docker</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/docker.svg"
                        alt="Dockerのロゴ"
                      />
                    </li>
                    <li
                      class="skill-items__list skill-items__list--tool"
                      @click="change('PS')"
                    >
                      <h4 class="skill-items__list__title">PS</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/ps.svg"
                        alt="PhotoShopのロゴ"
                      />
                    </li>
                    <li
                      class="skill-items__list skill-items__list--tool"
                      @click="change('Ai')"
                    >
                      <h4 class="skill-items__list__title">Ai</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/ai.svg"
                        alt="Illustratorのロゴ"
                      />
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!--skill-con__inner--top-->

            <div class="skill-con__inner--bottom">
              <dl class="skill-status" v-if="isActive === 'HTML'">
                <dt class="skill-status__title">
                  HTML
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/html-5.svg"
                    alt="HTML5のロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">簡単なEmmetの省略記法</li>
                    <li class="skill-status__point">BEMによる命名規則</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'CSS'">
                <dt class="skill-status__title">
                  CSS
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/css-3.svg"
                    alt="CSSのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">Scss記法</li>
                    <li class="skill-status__point">BEMを使用したcss設計</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'jQuery'">
                <dt class="skill-status__title">
                  jQuery
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/jquery.svg"
                    alt="jQueryのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">モーダルウィンドウなどのUI作成</li>
                    <li class="skill-status__point">ソート機能の作成</li>
                    <li class="skill-status__point">ajaxによるAPIでの非同期通信</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'Vue'">
                <dt class="skill-status__title">
                  Vue
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/vue.svg"
                    alt="Vueのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">SPAの構築</li>
                    <li class="skill-status__point">axiosでのapi連携</li>
                    <li class="skill-status__point">UI部品の作成</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'php'">
                <dt class="skill-status__title">
                  php
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/php.svg"
                    alt="phpのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">CRUD機能の作成</li>
                    <li class="skill-status__point">XSS,CSRF,SQLインジェクション対策</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'WP'">
                <dt class="skill-status__title">
                  WP
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/wp.svg"
                    alt="wordpressのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">静的HTMLサイトのWordPress化</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'Laravel'">
                <dt class="skill-status__title">
                  Laravel
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/laravel.svg"
                    alt="Laravelのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">MVCによる機能の作成</li>
                    <li class="skill-status__point">サービス層への分離</li>
                    <li class="skill-status__point">phpUnitTestによるテストの実行</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'MySQL'">
                <dt class="skill-status__title">
                  MySQL
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/mysql.svg"
                    alt="MySQLのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">基本的な4大命令</li>
                    <li class="skill-status__point">テーブルの結合</li>
                    <li class="skill-status__point">インデックスの作成</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'gulp'">
                <dt class="skill-status__title">
                  gulp
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/gulp.svg"
                    alt="gulpのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">scssの圧縮</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'git'">
                <dt class="skill-status__title">
                  git
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/git.svg"
                    alt="gitのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">CUIを使ったバージョン管理</li>
                    <li class="skill-status__point">GUI(sourcetree)を使ったバージョン管理</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'Docker'">
                <dt class="skill-status__title">
                  Docker
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/docker.svg"
                    alt="Dockerのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">Laradockでのコンテナの立ち上げ</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'PS'">
                <dt class="skill-status__title">
                  PS
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/ps.svg"
                    alt="PhotoShopのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">バナーの制作</li>
                    <li class="skill-status__point">カンプの制作</li>
                    <li class="skill-status__point">GIFアニメーション</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'Ai'">
                <dt class="skill-status__title">
                  Ai
                  <img
                    class="skill-status__title__logo"
                    src="~/assets/img/ai.svg"
                    alt="Illustratorのロゴ"
                  />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">ロゴ画像の制作</li>
                    <li class="skill-status__point">カンプの制作</li>
                  </ul>
                </dd>
              </dl>
            </div>
            <!--.skill-con__inner--bottom-->
          </div>
          <!--.skill-con-->
        </div>
        <!--profile-sec__inner-->
      </section>
      </transition>
    </div>
    <!--.profile-con__inner--right-->
  </div>
  <!--.profile-con-->
</template>


<script>
export default {
  data() {
    return {
      isPage: "Profile",
      isActive: 'HTML'
    }
  },
  methods: {
    change(skillName) {
      //skillNameが文字列でなければエラーを投げる
      this.isActive = skillName
    }
  }
};
</script>

<style>
.fade-enter-active, .fade-leave-active {
  transition: all .2s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>