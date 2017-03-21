# Set lại mật khẩu cho tài khoản NukeViet 4

Để sư dụng cách này bạn cần làm theo các bước sau.

- Tải về công cụ tại địa chỉ web: https://github.com/nukeviet/set-password/archive/master.zip
- Giải nén, upload file có được lên host (ngang hàng với các file index.php, mainfile.php,…)
- Sửa nội dung file set-password.php cho phù hợp.
```
$username = 'vuthao'; // thay vuthao thành tài khoản tối cao mà bạn cần thay mật khẩu.
$newpassword = 'xxyyzz'; // thay xxyyzz thành mật khẩu của bạn.

$client_ip = '113.190.237.5';// IP của máy tính reset mật khẩu, có thể lấy thông số này qua trang http://checkip.dyndns.org hoặc checkip.org
$sitekey = 'sitekey-sitekey-sitekey-sitekey'; //sitekey của site, lấy từ file config.php với biến là $global_config[‘sitekey’]
```
- upload file set-password.php lên host (ngang hàng với các file index.php ở thư mục gốc của site)

- Truy cập vào đường dẫn website dạng như sau: http://domain.com/set-password.php

- Sau khi truy cập đường dẫn đó bạn sẽ nhận được thông báo “Reset password success. Delete this file immediately” tức là bạn đã thay mật khẩu thành công và bây giờ thì xóa file set-password.php đó đi.

