# 113年度資料庫程式設計作業

## 前後台整合系統
### 主題
* 請建立一個校園資訊系統(參考網頁乙級題組一)

* 或是可以自選主題，但最後成果需有前台及後台，且有使用到資料庫，比如：
  * 學生管理系統
  * 發票管理系統
  * 個人記帳管理系統
  * 投票/問卷系統
  * 形象網站系統

* 如果是自選主題，請先列出計劃完成的功能，且與老師討論，以便決定合適的難度及製作期間

### 動作要求(以投票功能為例)
1. 分析需要的功能
    * 功能一....(前台要有投票主題的列表讓使用者可以選擇)
    * 功能二....(有會員註冊登入功能，會員比一般使用者有更多的主題可以投票)
    * 功能三....(後台可以新增投票主題及項目)
    * ......
  
- 分析結果可以是word文件，或是markdown的文件格式儲存在ScreenShot目錄下

2. 設計資料表
    * 資料表一(資料表名)
        |欄位名|資料型態|主鍵|預設值|自動遞增|備註|
        |---|---|---|---|---|---|
        |||||||
        |||||||
    * 資料表二(資料表名)
        |欄位名|資料型態|主鍵|預設值|自動遞增|備註|
        |---|---|---|---|---|---|
        |||||||
        |||||||
    
3. 請充分運用學到的各項網頁知識來美化這個投票系統的畫面
    * html標籤的應用(語意標籤、表單、表格、分隔線、標頭..etc)
    * css的應用(行內、內嵌、外連、flexbox、偽元素、動畫..etc)
    * bootstrap的應用(排版功能、元件、類別..etc)
    * javascript or jQuery的應用(DOM的操作、CSS的切換)

4. 請上傳至220的伺服器個人空間，並自行建立所需資料表
   
5. 請將完成品前後台及功能截圖五張放在ScreenShot資料夾下

### 必備要求
**後台功能**
* 後台需具備控制資料庫資料功能
* 有控制資料是否在前台顯示的功能
* 有上傳檔案功能

**前台功能**
* 請設計一套前台功能，讓未登入使用者可以瀏灠或操作
* 前台資料需能與資料庫連動，不能寫死在html中

**進階功能**
* 請整合註冊及登入系統
* 能以視覺化的方式呈現資料(圖表、icon...etc)
* 能判斷使用者的狀態呈現不同的功能(如登入狀態，瀏灠時間提示...etc)

## 評量時間
交代作業後的四周時間(含六日共28天)

##	評分說明 （合計 100 分）
|項目|內容|分數|
|--|--|--|
|1.|**能使用HTML及CSS語法進行至少三種不同樣式的前後台版面區塊製作**|**10 分**|
|2.|**能建立符合功能需求的資料庫及資料表欄位，至少需有三張對應不同功能的資料表**|**10 分**|
|3.|**能使用PHP語法成功連接資料庫並讀出資料**|**10 分**|
|4.|**能製作出一套使用比對資料庫會員帳號密碼的登入機制**|**10 分**|
|5.|**前台頁面能呈現出來自資料表的資料至少三筆**|**10 分**|
|6.|**後台能提供至少三項表單功能讓使用者可以修改資料表中的資料**|**10 分**|
|7.|**能製作至少一項檔案上傳的功能**|**10 分**|
|8.|**能至少有一項功能使用到迴圈來呈現多筆資料**|**10 分**|
|9.|**能製作至少三項使用到javascript應用的前端功能**|**10 分**|
|10.|**能應用到至少一項網頁製作相關的函式庫或套件**|**10 分**|