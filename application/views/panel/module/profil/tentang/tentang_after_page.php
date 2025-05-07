<script>
   $(document).ready(function() {
      $('#summernote').summernote({
         placeholder: 'Masukkan Isi Berita',
         tabsize: 2,
         height: 100,
         callbacks: {
            onImageUpload: function(files) {
               // Menggunakan FormData untuk mengirim gambar ke server
               var formData = new FormData();
               formData.append('file', files[0]);

               // Mengirim data gambar ke server menggunakan AJAX
               $.ajax({
                  url: 'your_upload_url', // Ganti dengan URL yang sesuai untuk menangani unggahan gambar
                  method: 'POST',
                  data: formData,
                  contentType: false,
                  processData: false,
                  success: function(response) {
                     // Menyisipkan gambar ke dalam editor setelah diunggah
                     $('#summernote').summernote('insertImage', response.url);
                  },
                  error: function(xhr, textStatus, error) {
                     console.error(xhr.statusText);
                  }
               });
            }
         }
      });
   })
</script>