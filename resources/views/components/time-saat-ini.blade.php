      <script>
          // Function to update the date and time
          function updateDateTime() {
              var now = new Date();
              var year = now.getFullYear();
              var month = String(now.getMonth() + 1).padStart(2, '0');
              var day = String(now.getDate()).padStart(2, '0');
              var hours = String(now.getHours()).padStart(2, '0');
              var minutes = String(now.getMinutes()).padStart(2, '0');
              var seconds = String(now.getSeconds()).padStart(2, '0');

              var dateTimeString = 'Waktu saat ini : ' + year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;

              // Update the content of the div with id "currentDateTime"
              document.getElementById('currentDateTime').textContent = dateTimeString;
          }

          // Update the date and time immediately when the page loads
          window.onload = function() {
              updateDateTime();

              // Update the date and time every second
              setInterval(updateDateTime, 1000);
          };
      </script>
      <div class="text-[16px] flex items-center text-center" id="currentDateTime"></div>
