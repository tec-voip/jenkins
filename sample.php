<?php
	$zip = new ZipArchive();
	// ZIPファイルを開く
	$res = $zip->open('test.zip', ZipArchive::CREATE);
	// zipファイルが作れなかったら終了
	if ($res !== true) {
		echo "zipファイル作成失敗\n";
		return;
	}
	// addFileでzipに追加するファイルを指定
	$zip->addFile('data/001.jpeg');
	$zip->addFile('data/002.jpeg');
	$zip->addFile('data/003.jpeg');
	// ZIPファイルをクローズ
	$zip->close();
S?>
