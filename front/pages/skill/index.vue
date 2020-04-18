<template>
  <div class="profile-con">
    <MypageSidebar :typTxt="activeMessage" />

    <div class="profile-con__inner--right">
      <section class="profile-sec skill-area">
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
                      <img class="skill-items__list__logo" src="~/assets/img/vue.svg" alt="Vueのロゴ" />
                      <p class="skill-items__list__level">Lv40</p>
                    </li>
                    <li
                      class="skill-items__list"
                      @click="change('Nuxt')"
                      :class="{active : isActive === 'Nuxt'}"
                    >
                      <h4 class="skill-items__list__title">Nuxt</h4>
                      <img class="skill-items__list__logo" src="~/assets/img/nuxt.svg" alt="Nuxtのロゴ" />
                      <p class="skill-items__list__level">Lv40</p>
                    </li>
                    <li
                      class="skill-items__list"
                      @click="change('php')"
                      :class="{active : isActive === 'php'}"
                    >
                      <h4 class="skill-items__list__title">php</h4>
                      <img class="skill-items__list__logo" src="~/assets/img/php.svg" alt="PHPのロゴ" />
                      <p class="skill-items__list__level">Lv30</p>
                    </li>
                    <!-- <li
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
                    </li> -->
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
                      <p class="skill-items__list__level">Lv30</p>
                    </li>
                  </ul>
                </li>

                <li class="skill-category__list skill-category__list--tool">
                  <h3 class="skill-category__list__title">ツール</h3>

                  <ul class="skill-items">
                    <li class="skill-items__list skill-items__list--tool" @click="change('gulp')">
                      <h4 class="skill-items__list__title">gulp</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/gulp.svg"
                        alt="gulpのロゴ"
                      />
                    </li>
                    <li class="skill-items__list skill-items__list--tool" @click="change('git')">
                      <h4 class="skill-items__list__title">git</h4>
                      <img class="skill-items__list__logo" src="~/assets/img/git.svg" alt="gitのロゴ" />
                    </li>
                    <li class="skill-items__list skill-items__list--tool" @click="change('Docker')">
                      <h4 class="skill-items__list__title">Docker</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/docker.svg"
                        alt="Dockerのロゴ"
                      />
                    </li>
                    <li class="skill-items__list skill-items__list--tool" @click="change('PS')">
                      <h4 class="skill-items__list__title">PS</h4>
                      <img
                        class="skill-items__list__logo"
                        src="~/assets/img/ps.svg"
                        alt="PhotoShopのロゴ"
                      />
                    </li>
                    <li class="skill-items__list skill-items__list--tool" @click="change('Ai')">
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
                  <img class="skill-status__title__logo" src="~/assets/img/vue.svg" alt="Vueのロゴ" />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">SPAの構築</li>
                    <li class="skill-status__point">axiosでのapi連携</li>
                    <li class="skill-status__point">UI部品の作成</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'Nuxt'">
                <dt class="skill-status__title">
                  Nuxt
                  <img class="skill-status__title__logo" src="~/assets/img/nuxt.svg" alt="Nuxtのロゴ" />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">Jestを使用したテスト</li>
                    <li class="skill-status__point">JWT認証</li>
                  </ul>
                </dd>
              </dl>

              <dl class="skill-status" v-else-if="isActive === 'php'">
                <dt class="skill-status__title">
                  php
                  <img class="skill-status__title__logo" src="~/assets/img/php.svg" alt="phpのロゴ" />
                </dt>
                <dd class="skill-status__desc">
                  <ul>
                    <li class="skill-status__point">CRUD機能の作成</li>
                    <li class="skill-status__point">XSS,CSRF,SQLインジェクション対策</li>
                  </ul>
                </dd>
              </dl>

              <!-- <dl class="skill-status" v-else-if="isActive === 'WP'">
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
              </dl> -->

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
                  <img class="skill-status__title__logo" src="~/assets/img/git.svg" alt="gitのロゴ" />
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
    </div>
    <!--.profile-con__inner--right-->
  </div>
</template>

<script>
import MypageSidebar from "~/components/organisms/MypageSidebar";

export default {
  layout: "mypage",
  components: {
    MypageSidebar
  },
  data() {
    return {
      isActive: "HTML",
      activeMessage: "習得したスキルの紹介です。"
    };
  },
  methods: {
    change(skillName) {
      //skillNameが文字列でなければエラーを投げる
      this.isActive = skillName;

      switch (this.isActive) {
        case "HTML":
          this.activeMessage =
            "主にEmmetを使ってコーディングしています。";
          break;

        case "CSS":
          this.activeMessage = `ScssやBootstrapの使用経験があります。`;
          break;

        case "jQuery":
          this.activeMessage = `Ajax通信や、基本的なUI作成ができます。`;
          break;

        case "Vue":
          this.activeMessage = `Vuex、VueRouterを使ったSPAの構築ができ、アトミックデザインを意識したコンポーネント管理ができます。`;
          break;

        case "Nuxt":
          this.activeMessage = `実務ではNuxtを使用しています。`;
          break;

        case "php":
          this.activeMessage = `ログイン機能の実装や基本的なセキュリティ対策への理解と、CRUD処理が書けます。`;
          break;

        case "WP":
          this.activeMessage = "基本的な操作とカスタマイズができます。";
          break;

        case "Laravel":
          this.activeMessage = `APIの作成やJWT認証、ソケット通信などができます。DDDにも興味があり、サービス層やリポジトリパターンを使った開発もしてみたいです。`;
          break;

        case "MySQL":
          this.activeMessage = "サブクエリやリレーションなども抑えています。最近は、速度向上のためSQLチューニングについて勉強しています。";
          break;

        case "gulp":
          this.activeMessage = `タスクの設定や導入方法を学習しました。`;
          break;

        case "git":
          this.activeMessage = "実務では主にSourceTreeを使った管理をしていました。コマンドでの管理もできます。";
          break;

        case "Docker":
          this.activeMessage = `dockerfileをいじったりは経験ないですが、docker-composeを用いてコンテナの立ち上げができます。`;
          break;

        case "PS":
          this.activeMessage = "フィルターやレイヤー効果、レイヤーマスクなどの基本操作ができます。";
          break;

        case "Ai":
          this.activeMessage = `アピアランス機能や,オブジェクトの編集、合成などの基本操作ができます。`;
          break;
      }
    }
  }
};
</script>

