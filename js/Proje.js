function showElement() {
  var element = document.getElementById("myElement");
  element.classList.remove("hidden");
}

const logout = () => {
  // Send an AJAX request to the server to delete the session ID
  console.log("test");
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'logout.php', true);
  xhr.onreadystatechange = function () {
    console.log(xhr.readyState);
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Reload the page to reflect the logout state
      location.reload();
    }
  };
  xhr.send();
}

