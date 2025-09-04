$(document).ready(function () {
    $('#image').on('change', function (e) {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          $('#preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(file);
      }
    });

    $('#upimage').on('change', function (e) {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          $('#uppreview').attr('src', e.target.result);
        }
        reader.readAsDataURL(file);
      }
    });
});