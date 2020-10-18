# portfolio_remake

## 機能一覧

- adminでの作品投稿機能
- skillとworksの取得
- 管理者ログイン


## テーブル一覧

### 作成テーブル

- プロフィール
- 趣味
- 特技
- キャリア
- 自己PR

<br>

### プロフィール profile

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  | プロフィールid   |  id  |  int  |  ×  |    |    | 
|  2  |  名前  |  name |  varchar  |  ×  |    |    | 
|  3  |  誕生日  |  birth_day  |  datetime  |  ○  |    |    | 
|  4  |  一言  |  one_thing  |  varchar  |  ○  |    |    | 
|  5  |  アイコン画像  |  my_icon_img  |  varchar  |  ○  |    |    | 
|  6  |  作成日  |  created_at  |  datetime  |  ○  |    |    | 
|  7  |  更新日  |  updated_at  |  datetime  |  ○  |    |    | 

<br>
<br>
<br>

### 趣味 profile_special_hobby

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  趣味ID  |  id |  int  |  ×  |    |    | 
|  2  |  コンテンツ  |  content  |  varchar  |  ×  |    |    | 
|  3  |  プロフィールID  |  profile_id  |  int  |  ×  |    |    | 
|  4  |  作成日  |  created_at  |  datetime  |  ○  |    |    | 
|  5  |  更新日  |  updated_at  |  datetime  |  ○  |    |    | 

<br>
<br>
<br>

### 特技 profile_special_skill

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  特技ID  |  id  |  int  |  ×  |    |   | 
|  2  |  コンテンツ  |  content  |  varchar  | × |    |    | 
|  3  |  プロフィールID  |  profile_id  |  int  |  ×  |    |    | 
|  4  |  作成日  |  created_at  |  datetime  |  ○  |    |    | 
|  5  |  更新日  |  updated_at  |  datetime  |  ○  |    |    | 

<br>
<br>
<br>

### キャリア profile_career

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  キャリアID  |  id  |  int  |  ×  |    |   | 
|  2  |  期間始まり  |  date_from  |  datetime  | × |    |    | 
|  3  |  期間終わり  |  date_to  |  datetime  |  ○  |    |    | 
|  4  |  企業名  |  content  |  varchar  |  ×  |    |    | 
|  5  |  職種  |  occupation  |  varchar  |  ○  |    |    | 
|  6  |  プロフィールID  |  profile_id  |  int  |  ×  |    |    | 
|  7  |  作成日  |  created_at  |  datetime  |  ○  |    |    | 
|  8  |  更新日  |  updated_at  |  datetime  |  ○  |    |    | 

<br>
<br>
<br>

### 自己PR profile_pr

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  自己PRID  |  id  |  int  |  ×  |    |    | 
|  2  |  コンテンツ  |  content  |  text  |  ×  |    |    | 
|  3  |  プロフィールID  |  profile_id  |  int  |  ×  |    |    | 
|  4  |  作成日  |  created_at  |  datetime  |  ○  |    |    | 
|  5  |  更新日  |  updated_at  |  datetime  |  ○  |    |    | 

<br>
<br>
<br>
