<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>약관</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="js/member.js?v=<?php echo date('YmdHis') ?>"></script>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="images/logo.svg" style="width:2rem" class="me-2">
                <span class="fs-4">ㅇㅇㅇ</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">회사소개</a></li>
                <li class="nav-item"><a href="#" class="nav-link">회원가입</a></li>
                <li class="nav-item"><a href="#" class="nav-link">게시판</a></li>
                <li class="nav-item"><a href="#" class="nav-link">로그인</a></li>
            </ul>
        </header>
        <main class="p-5 border rounded-5">
            <h1 class="text-center">회원 약관 및 개인정보 취급방침 동의</h1>
            <h4>회원 약관</h4>
            <textarea name="" id="" cols="30" rows="10" class="form-control">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </textarea>

            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="chk_member1">
                <label class="form-check-label" for="chk_member1">
                    위 약관에 동의하시겠습니까?
                </label>
            </div>

            <h4 class="mt-3">개인정보 취급방침</h4>
            <textarea name="" id="" cols="30" rows="10" class="form-control">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </textarea>

            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="chk_member2">
                <label class="form-check-label" for="chk_member2">
                    위 개인정보 취급방침에 동의하시겠습니까?
                </label>
            </div>

            <div class="mt-4 d-flex justify-content-center gap-2">
                <button class="btn btn-primary w-50" id="btn_member">회원가입</button>
                <button class="btn btn-secondary w-50">가입취소</button>
            </div>

            <form method="post" name="stipulation_form" action="member_input.php" style="display:none" >
                <input type="hidden" name="chk" value="0">
            </form>

        </main>
    </div>

    <footer class="footer mt-5 py-3 bg-primary">
        <div class="container d-flex gap-1">
            <img src="images/logo.svg" style="width:5rem" class="me-2">
            <div class="d-flex flex-column">
                <span class="text-bg-primary">서울시 강남구 역삼대로 123번지 빌딩 14층 (우) 111134</span>
                <span class="text-bg-primary">대표이사 : Tero</span>
                <span class="text-bg-primary">Tel : 02-1111-2222 FAX: 02-2222-3333</span>
            </div>
        </div>
    </footer>
</body>
</html>