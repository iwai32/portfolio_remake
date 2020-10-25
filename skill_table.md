### 作成テーブル

- カテゴリー
- カテゴリー詳細
- カテゴリーへのコメント

<br>

### カテゴリー skill_categories

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  | カテゴリーid   |  id  |  bigint  |  ×  |    |    | 
|  2  |  カテゴリ名  |  name  |  varchar  |  ×  |    |    | 
|  3  |  プロフィールID  |  profile_id  |  bigint  |  ×  |    |    | 
|  4  |  アイコン画像  |  skill_icon_img  |  varchar  |  ○  |  no_skill_icon.img  |    | 
|  5  |  削除日  |  deleted_at  |  timestamp  |  ○  |    |    | 
|  6  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  7  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 

<br>
<br>
<br>

### カテゴリー詳細 skll_category_details

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  カテゴリー詳細ID  |  id |  bigint  |  ×  |    |    | 
|  2  |  メッセージ  |  message  |  varchar  |  ×  |    |    | 
|  3  |  カテゴリーID  |  category_id  |  bigint  |  ×  |    |    | 
|  4  |  削除日  |  deleted_at  |  timestamp  |  ○  |    |    | 
|  5  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  6  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 

<br>
<br>
<br>

### カテゴリーへのコメント skill_category_comments

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  コメントID  |  id  |  bigint  |  ×  |    |   | 
|  2  |  コメント  | comment |  varchar  | × |    |    | 
|  3  |  カテゴリーID  |  category_id  |  bigint  |  ×  |    |    | 
|  4  |  削除日  |  deleted_at  |  timestamp  |  ○  |    |    | 
|  5  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  6  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 

<br>
<br>
<br>
