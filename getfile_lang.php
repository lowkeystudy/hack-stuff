<?php
echo "<pre>\n";
// Dùng highlight_file hoặc show_source để hiển thị mã nguồn PHP mà không bị thực thi
if (file_exists('index.php')) {
    highlight_file('index.php');
} else {
    // Dự phòng đọc đường dẫn tuyệt đối
    highlight_file('/challenge/web-serveur/ch13/index.php');
}
echo "\n</pre>";
?>
