### 作成テーブル

- プロダクト
- プロダクト詳細
- プロダクトのポイント

<br>

### プロダクト products

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  | プロダクトid   |  id  |  bigint  |  ×  |    |    | 
|  2  |  プロダクト名  |  name  |  varchar  |  ×  |    |    | 
|  3  |  プロフィールID  |  profile_id  |  bigint  |  ×  |    |    | 
|  4  |  プロダクト画像1  |  picture1  |  varchar  |  ○  |  no_product.img  |    | 
|  5  |  プロダクト画像2  |  picture2  |  varchar  |  ○  |  no_product.img  |    | 
|  6  |  プロダクトURL  |  product_url  |  varchar  |  ○  |    |    |
|  7  |  リポジトリURL  |  repository_url  |  varchar  |  ○  |    |    | 
|  8  |  プロダクト詳細  |  about  |  text  |  ○  |    |    | 
|  9  |  削除日  |  deleted_at  |  timestamp  |  ○  |    |    | 
|  10  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  11  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 

<br>
<br>
<br>

### プロダクト詳細 product_details

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  プロダクト詳細ID  |  id |  bigint  |  ×  |    |    | 
|  2  |  定義  |  definition  |  varchar  |  ×  |    |    | 
|  3  |  詳細  |  detail  |  varchar  |  ×  |    |    | 
|  4  |  プロダクトID  |  product_id  |  bigint  |  ×  |    |    | 
|  5  |  削除日  |  deleted_at  |  timestamp  |  ○  |    |    | 
|  6  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  7  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 

<br>
<br>
<br>

### プロダクトのポイント product_points

|  #  |  論理名  |  物理名  |  データ型  |  NULL  |  デフォルト値  |  コメント | 
| ---- | ---- | ---- | ---- | ---- | ---- | ---- | 
|  1  |  プロダクトポイントID  |  id  |  bigint  |  ×  |    |   | 
|  2  |  タイトル  | title |  varchar  | × |    |    | 
|  3  |  ポイント  | point |  varchar  | × |    |    | 
|  4  |  プロダクトID  |  product_id  |  bigint  |  ×  |    |    | 
|  5  |  削除日  |  deleted_at  |  timestamp  |  ○  |    |    | 
|  6  |  作成日  |  created_at  |  timestamp  |  ○  |    |    | 
|  7  |  更新日  |  updated_at  |  timestamp  |  ○  |    |    | 

<br>
<br>
<br>
