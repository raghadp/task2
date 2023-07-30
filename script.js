 function saveData(direction) {
      // Send an AJAX request to the server with the direction data
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "save-data.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
          console.log(xhr.responseText);
        }
      };
      xhr.send("direction=" + direction);
    }