<!-- <div class="container">
  <div class="row mt-5">
    <div class="col mt-5">
      <span class="btn btn-outline-info btn-block btn-xl" id="btn_enviar">Eviar</span>
    </div>
    <div class="col mt-5">
      <input type="text" id="mensaje" readonly></input>
    </div>
  </div>
</div>
<script src="manager/manager_inicio.js"></script> -->
<div class="container">
  <div class="row">
    <div class="col">
      <button type="button" class="btn btn-indigo-600" id="liveToastBtn">Show live toast</button>
      <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
var toastElList = [].slice.call(document.querySelectorAll('.toast'))
var toastList = toastElList.map(function (toastEl) {
  return new bootstrap.Toast(toastEl, option).show()

})
</script>