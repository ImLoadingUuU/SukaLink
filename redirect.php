<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Redirecting...</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script>
        setTimeout(() => {
            let url = new URL(window.location.href);

            let split = url.pathname.split("/")
            let xhr = new XMLHttpRequest();
            xhr.open("POST", `./lookup?id=${split[split.length - 1]}`, true);
            xhr.onload = () => {
                let parsed = JSON.parse(xhr.responseText);
                if (parsed.status) {
                    // redirect to parsed.url
                    window.location = parsed.url
                }
            }
            xhr.send();
        }, 3000);
    </script>
</head>

<body>
    <div class="container my-5">
        <div class="text-center bg-body-tertiary p-5 rounded-3"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloud-fog2-fill" style="width: 100px;height: 100px;">
                <path d="M8.5 3a5.001 5.001 0 0 1 4.905 4.027A3 3 0 0 1 13 13h-1.5a.5.5 0 0 0 0-1H1.05a3.51 3.51 0 0 1-.713-1H9.5a.5.5 0 0 0 0-1H.035a3.53 3.53 0 0 1 0-1H7.5a.5.5 0 0 0 0-1H.337a3.5 3.5 0 0 1 3.57-1.977A5.001 5.001 0 0 1 8.5 3z"></path>
            </svg>
            <h1 class="text-body-emphasis">You will be redirected in 3 seconds</h1>
            <p class="fs-5 text-muted mx-auto col-lg-8">Before being redirect, please check the url isn't illegal content</p>
            <div class="d-inline-flex gap-2 mb-5"><button class="btn btn-primary btn-lg d-inline-flex align-items-center px-4 rounded-pill" type="button"> Redirect<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-play bi ms-2">
                        <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"></path>
                    </svg></button></div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>