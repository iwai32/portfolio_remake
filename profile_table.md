### 作成テーブル

- プロフィール
- 趣味
- 特技
- キャリア
- 自己PR

<br>

### プロフィール profiles

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  | プロフィールid   |  id  |  bigint  |  ×  |    |    | 
|  2  |  名前  |  name |  varchar  |  ×  |    |    | 
|  3  |  誕生日  |  birth_day  |  datetime  |  ○  |    |    | 
|  4  |  一言  |  one_thing  |  varchar  |  ○  |    |    | 
|  5  |  アイコン画像  |  my_icon_img  |  varchar  |  ○  |    |    | 
|  6  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  7  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 

<br>
<br>
<br>

### 趣味 profile_special_hobbies

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  趣味ID  |  id |  bigint  |  ×  |    |    | 
|  2  |  コンテンツ  |  content  |  varchar  |  ×  |    |    | 
|  3  |  プロフィールID  |  profile_id  |  bigint  |  ×  |    |    | 
|  4  |  削除日  |  deleted_at  |  timestamp  |  ○  |    |    | 
|  5  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  6  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 

<br>
<br>
<br>

### 特技 profile_special_skills

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  特技ID  |  id  |  bigint  |  ×  |    |   | 
|  2  |  コンテンツ  |  content  |  varchar  | × |    |    | 
|  3  |  プロフィールID  |  profile_id  |  bigint  |  ×  |    |    | 
|  4  |  削除日  |  deleted_at  |  timestamp  |  ○  |    |    | 
|  5  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  6  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 
<br>
<br>
<br>

### キャリア profile_careers

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  キャリアID  |  id  |  bigint  |  ×  |    |   | 
|  2  |  期間始まり  |  date_from  |  datetime  | × |    |    | 
|  3  |  期間終わり  |  date_to  |  datetime  |  ○  |    |    | 
|  4  |  企業名  |  content  |  varchar  |  ×  |    |    | 
|  5  |  職種  |  occupation  |  varchar  |  ○  |    |    | 
|  6  |  プロフィールID  |  profile_id  |  bigint  |  ×  |    |    | 
|  7  |  削除日  |  deleted_at  |  timestamp  |  ○  |    |    | 
|  8  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  9  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 

<br>
<br>
<br>

### 自己PR profile_prs

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  自己PRID  |  id  |  bigint  |  ×  |    |    | 
|  2  |  コンテンツ  |  content  |  text  |  ×  |    |    | 
|  3  |  プロフィールID  |  profile_id  |  bigint  |  ×  |    |    | 
|  4  |  削除日  |  deleted_at  |  timestamp  |  ○  |    |    | 
|  5  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  6  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 

<br>
<br>
<br>
