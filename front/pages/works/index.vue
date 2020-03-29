<template>
  <section class="section">
    <div class="works-con">
      <h2 class="works-con__title" v-cloak>{{workHeading}}</h2>
      <!--Works-->
      <div class="works-con__inner--top">
        <ul class="works-list">
          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/kozin02.png" alt="RpgRanker" />
            </a>
            <h3 class="work-item__title">RpgRanker</h3>
            <p class="work-item__category">自主制作</p>
          </li>
          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/kozin01.png" alt="PVSクリーニング" />
            </a>
            <h3 class="work-item__title">PVSクリーニング</h3>
            <p class="work-item__category">自主制作</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/intern01.png" alt="春の海外旅行スペシャルSP対応" />
            </a>
            <h3 class="work-item__title">春の海外旅行スペシャルSP対応</h3>
            <p class="work-item__category">インターンシップ</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/intern02.png" alt="満腹物語" />
            </a>
            <h3 class="work-item__title">満腹物語</h3>
            <p class="work-item__category">インターンシップ</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/intern03.png" alt="春の海外旅行スペシャル旧版" />
            </a>
            <h3 class="work-item__title">春の海外旅行スペシャル旧版</h3>
            <p class="work-item__category">インターンシップ</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/intern04.png" alt="スライドバナー制作" />
            </a>
            <h3 class="work-item__title">スライドバナー制作</h3>
            <p class="work-item__category">インターンシップ</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/client-work.png" alt="クライアントワーク" />
            </a>
            <h3 class="work-item__title">イタリアンバールアッカ</h3>
            <p class="work-item__category">クライアントワーク</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/school02.png" alt="キリンのトレース" />
            </a>
            <h3 class="work-item__title">キリンのトレース</h3>
            <p class="work-item__category">学校制作物</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/school03.png" alt="北欧風ECサイトのトレース" />
            </a>
            <h3 class="work-item__title">北欧風ECサイトのトレース</h3>
            <p class="work-item__category">学校制作物</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/school05.png" alt="フルスクリーンレイアウトの演習" />
            </a>
            <h3 class="work-item__title">フルスクリーンレイアウト演習</h3>
            <p class="work-item__category">学校制作物</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/school06.png" alt="グリッドレイアウトの演習" />
            </a>
            <h3 class="work-item__title">グリッドレイアウト演習</h3>
            <p class="work-item__category">学校制作物</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/school07.png" alt="LOFTのトレース" />
            </a>
            <h3 class="work-item__title">LOFTのトレース</h3>
            <p class="work-item__category">学校制作物</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/graphic01.gif" alt="動きのあるバナー" />
            </a>
            <h3 class="work-item__title">動きのあるバナー</h3>
            <p class="work-item__category">グラフィック</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/graphic03.png" alt="POP作成" />
            </a>
            <h3 class="work-item__title">POP作成</h3>
            <p class="work-item__category">グラフィック</p>
          </li>

          <li class="work-item">
            <a
              class="work-item__frame"
            >
              <img src="~/assets/img/graphic04.png" alt="かぎこうのバナー" />
            </a>
            <h3 class="work-item__title">かぎこうのバナー</h3>
            <p class="work-item__category">グラフィック</p>
          </li>
        </ul>
      </div>
      <!--.works-con__inner--top-->

      <div class="works-con__inner--bottom">
        <ul id="menuBtn" class="category-menu">
          <li
            class="category-menu__list active"
            @click="clickHeading('Works')"
          >ALL</li>
          <li
            class="category-menu__list"
            @click="clickHeading('自主制作')"
          >自主制作</li>
          <li
            class="category-menu__list"
            @click="clickHeading('インターンシップ')"
          >インターンシップ</li>
          <li
            class="category-menu__list"
            @click="clickHeading('クライアントワーク')"
          >クライアントワーク</li>
          <li
            class="category-menu__list"
            @click="clickHeading('学校制作')"
          >学校制作</li>
          <li
            class="category-menu__list"
            @click="clickHeading('グラフィック')"
          >グラフィック</li>
        </ul>
        <div class="work-typ">
          <p class="work-typ__txt">{{ typText }}</p>
        </div>
        <!--.work-typ-->
      </div>
      <!--.inner-bottm-->
    </div>
    <!--.works-con-->
  </section>
</template>

<script>
export default {
  data() {
    return {
      typText: 'こちらは今までの制作物を紹介するページです',
      workHeading: 'Works'
    }
  },
  methods: {
    clickHeading(pageName) {
      this.workHeading = pageName

      switch( pageName ) {
        case '自主制作':
          this.typText = '趣味や学習のために制作した作品を紹介しています。';
          break;
        case 'インターンシップ':
          this.typText = `株式会社ワンゴジュウゴインターンシップにて制作した作品を紹介しています。実務で活躍しているプロの元で実践的なコーディングを学べた貴重な経験でした。`
          break;
        case 'クライアントワーク':
          this.typText = `クライアントワークとは,フェリカテクニカルアカデミーで行われている実習の一つです。クライアントの要望を聞き、実際に使われるWebサイトができるのがこの実習のポイントです。`
          break;
        case '学校制作':
          this.typText = `フェリカテクニカルアカデミー・webサイト制作科で制作した作品を紹介しています。様々なレイアウト手法を学びました。`
          break;
        case 'グラフィック':
          this.typText = `photoshop,Illustratorを使用して制作したグラフィックの紹介です。`
          break;
        case 'Works':
          this.typText = 'こちらは今までの制作物を紹介するページです';
          break;
      }
    }
  }
}
</script>