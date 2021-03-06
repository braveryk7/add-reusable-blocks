# このリポジトリについて
add-reusable-blocksはWordPress管理メニューに再利用ブロックを追加するための便利なリポジトリです。

このリポジトリは以下の2つで構成されています。

* functions.php
* add-reusable-blocks/add-reusable-blocks.php

詳しい解説、使い方は全ての以下で解説しています。

[WordPressのメニューに再利用ブロックリンクを追加する | L'7 Records](https://www.braveryk7.com/wordpress-reusable-blocks-add-menu/)

## functions.php
functions.phpは、WordPressのテーマ構成ファイルの1つであるfunctions.phpに追記しての使用を想定しています。

functions.phpの改変は必ず最終行にペースト（貼り付け）する形で行ってください（記述間違えによるエラーを防ぐため）。

また、PHPコードを追加・管理できる[Code Snippets](https://ja.wordpress.org/plugins/code-snippets/)の利用も推奨しております。

いつでも気軽にON/OFFできるので、特段の理由が無い限りCode Snippetsの利用をおすすめします。

## add-reusable-blocks/add-reusable-blocks.php
add-reusable-block.phpはWordPressにプラグインとして追加することを想定しています。

実装内容は先述したfunctions.phpと全く同一です。

以下のリンクからダウンロードしてWordPressのプラグインページより追加してください。

[zipファイルをダウンロード](https://github.com/braveryk7/add-reusable-blocks/releases/download/1.1.0/add-reusable-blocks.zip)
# 免責事項
当プログラムを利用したいかなる不都合も製作者は責任を負いかねます。

# 更新履歴

## Ver1.1.0 2021/9/7
通常ブロックに変換していない状態の時に背景色をつける機能の追加

## Ver1.0.0 2021/8/21

* 制作開始
* 公開