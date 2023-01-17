<button id="popup-button">Open Pop-up</button>
  <div class="popup-container">
    <div class="popup-content">
      <p>This is a pop-up!</p>
    </div>
  </div>


  <style>
  .popup-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: none;
  }

  .popup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 20px;
    text-align: center;
  }
</style>

<script>
  // Get the button and container elements
  var button = document.getElementById("popup-button");
  var container = document.querySelector(".popup-container");

  // Show the pop-up when the button is clicked
  button.addEventListener("click", function() {
    container.style.display = "block";
  });

  // Close the pop-up when clicked outside of it
  container.addEventListener("click", function(e) {
    if (e.target === container) {
      container.style.display = "none";
    }
  });
</script>