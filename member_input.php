<?php
// 회원가입 폼

if (!isset($_POST['chk']) || $_POST['chk'] != 1) {
    die("<script>
            alert('약관 등을 동의하시고 접근하시기 바랍니다.')
            self.location.href='./stipulation.php'
        </script>"
    );
}