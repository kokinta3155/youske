
    // HTMLがロードされた場合
    $(window).on({
      'load':() =>{
      console.log('loadイベントが発生しました');
      }}),

     // 画面がスクロールされた場合
     $(window).on({
      'scroll':() =>{
      console.log('scrollイベントが発生しました');
       }});
 
