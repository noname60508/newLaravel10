
<?php
return [
    '0' => '請輸入正確的代碼',

    '2' => '參數錯誤',
    '3' => 'TOKEN取權限失敗',
    '4' => '不允許的查詢條件',

    // 查詢 1XX
    '100' => '查詢失敗',
    '101' => '查詢成功',
    '104' => '查詢失敗', //WebService SOAP Error

    // 匯出
    '106' => '匯出成功',
    // '107' => '匯出失敗',
    // '108' => '伺服器錯誤，匯出發生例外',
    '109' => '匯出成功，但無資料',

    // 修改 2XX
    '200' => '修改失敗',
    '201' => '修改成功',

    // 新增 4XX
    '400' => '新增失敗',
    '401' => '新增成功',
    '402' => '參數錯誤',
    '403' => '新增失敗(項目重複)',

    // 刪除 5XX
    '500' => '刪除失敗',
    '501' => '刪除成功',

    /**
     ******************************
     * USER
     ******************************
     */
    // 登入|出 3XX
    '300' => '登入失敗，請檢查輸入【帳號、密碼】是否正確。',
    '301' => '登入成功',
    // '302' => '登入失敗，請檢查輸入【帳號、密碼】是否正確。',
    '303' => '登出',
    // '304' => '登出失敗',
    // '305' => '待審核中',
    // '306' => '未通過審核',
    '307' => '帳號已存在',
    // '308' => '帳號啟用日期:',
    '309' => '帳號停用',
    '310' => '請檢查輸入【舊密碼】是否正確!!',
    '310' => 'Token有效',
    '311' => 'Token無效',

    // 權限查核
    '600' => '權限查核失敗，沒有權限。',
    '601' => '權限查核成功。',
    '602' => '權限查核成功，但沒有可查詢的資料。',

    // 版本檢查
    '700' => '檢查失敗',
    '701' => '檢查成功,無須更新',
    '702' => '檢查成功,可更新但不強制',
    '703' => '檢查成功,需更新且強制',
];
