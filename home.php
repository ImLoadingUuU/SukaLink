<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>I-am-a.gay</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function createUrl() {


      let customUrl = document.getElementById("customURL").value || Math.random().toString(36).slice(-8);
      let url = document.getElementById("link").value
      let xhr = new XMLHttpRequest()
      xhr.open("POST", "./create", true)
      xhr.onload = () => {
        let parsed = JSON.parse(xhr.responseText)
        if (parsed.status) {
          Swal.fire(
            'Create',
            `Your shorted url will be: https://i.am-a.gay/${customUrl}`,
            'success'
          )
        } else {
          Swal.fire(
            'Failed to create',
            parsed.message,
            'error'
          )
      }
      }
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
      xhr.send(`toUrl=${url}&url=${customUrl}`)
    }
  </script>
</head>

<body>
<div class="col-xl-10 col-xxl-8 container px-4 py-5">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
      <h1 class="display-4 fw-bold text-body-emphasis lh-1 mb-3">i.am-a.gay&nbsp;<br><span
          style="font-weight: normal !important;">shortlink</span></h1>
      <p class="fs-4 col-lg-10">i.am-a.gay is a very easy to remember link, so we provide short link service</p>
      <ul class="list-unstyled">
        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"
                                      style="background-color: var(--bs-danger);color: var(--bs-light);"><svg
              xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
              class="bi bi-x">
                                <path
                                  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                            </svg></span><span>No Illegal Content</span></li>
        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"
                                      style="background-color: var(--bs-danger);color: var(--bs-light);"><svg
              xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
              class="bi bi-x">
                                <path
                                  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                            </svg></span><span>No NSFW Content</span></li>
        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"
                                      style="background-color: var(--bs-danger);color: var(--bs-light);"><svg
              xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
              class="bi bi-x">
                                <path
                                  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                            </svg></span><span>Abuse Isn't allowed</span></li>
      </ul>
    </div>
    <div class="col-md-10 col-lg-5 mx-auto">
      <div class="bg-body-tertiary p-4 p-md-5 border rounded-3">
        <div class="form-floating mb-3">
          <input class="form-control form-control" type="text" id="link" placeholder="https://google.com">
          <label class="form-label" for="link">Link</label></div>

        <div class="form-floating mb-3">
          <input class="form-control form-control form-control" type="text" id="customURL" placeholder="niceSite">
          <label class="form-label form-label" for="customURL">Custom URL (Optional)</label></div>
        <button class="btn btn-primary btn-lg w-100 rounded-pill" type="submit"
                style="background-color: var(--bs-indigo);" onclick="createUrl()">Short
        </button>
        <hr class="my-4">
        <small class="text-body-secondary">By clicking short, you agree to the terms of use.</small>
      </div>
    </div>
  </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
