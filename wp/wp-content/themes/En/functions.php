<?php 
  add_theme_support("menus");

  register_sidebar(
    array(
      "before_widget" => "<div class='widget'>",
      "after_widget" => "</div>",
      "before_title" => "<h3>",
      "after_title" => "</h3>",
    )
  );

  add_theme_support("post-thumbnails");

  // Table of Content
  function my_add_content( $content ) {
    if ( is_single() ) {
      // 属性を持たないh2・h3要素を正規表現で表すパターン
      $pattern = '/<h[3]>(.*?)<\/h[3]>/i';
      // 本文の中から、すべてのh2・h3要素を検索
      preg_match_all( $pattern, $content, $matches, PREG_SET_ORDER );
      
          // ページ内のh2・h3要素が3つ以上の場合に目次を出力
      if( count( $matches ) > 3 ){ 
        // 目次の出力に使用する変数
        $toc = '<h3>目次</h3><ol class="tableOfContent">';
        // 目次の階層の判断に使用する変数
        $hierarchy = NULL;
        // ループ回数を数える変数
        $i = 0;
        
              // 本文内のh2・h3要素を上から順番にループで処理
        foreach( $matches as $element ){ 
          // ループ回数を1加算
          $i++;
          // h2・h3に指定するIDの属性値を作成
          $id = 'chapter-' . $i;
          // h2・h3タグにIDを追加
          $chapter = preg_replace( '/<(.+?)>(.+?)<\/(.+?)>/',  '<$1 id ="' . $id . '">$2</$3>', $element[0] );
          // ページ内のh2・h3要素を、IDが追加されているh2・h3要素に置換
          $content = preg_replace( $pattern, $chapter, $content, 1);
          
          // 現在のループで扱う要素を判断する条件分岐
          if( strpos( $element[0], '<h2' ) === 0 ){ 
            $level = 0;
          }else{        
            $level = 1;
          }
          
          //現在の状態を判断する条件分岐
          if( $hierarchy === $level ){ // h2またはh3がそれぞれ連続する場合
            $toc .= '</li>';
          }elseif( $i == 1 ){ // ループ1回目の場合
            $hierarchy = 0;
          }
          
          // 目次の項目で使用する要素を指定
          $title = $element[1]; 
          // 目次の項目を作成。※次のループで<li>の直下に<ol>タグを出力する場合ががあるので、ここでは<li>タグを閉じていません。
          $toc .= '<li><a href="#' . $id . '">' . $title . '</a>';
        }
        
        // 目次の最後の項目をどの要素から作成したかによりタグの閉じ方を変更
        if( $level == 0 ){
          $toc .= '</li></ol>';
        }elseif( $level == 1 ){
          $toc .= '</li></ol></li></ol>';
        }
        
        // 本文に目次を追加
        $content = $toc . $content;
      }
    }
    return $content;
  }
  add_filter( 'the_content', 'my_add_content' );

  // Shortcodes
  function shortcode_ig() {
    return "<a href='#'>Follow Me!</a>";
  }
  add_shortcode("ig", "shortcode_ig");
?>