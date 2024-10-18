document.getElementById("vk-page").addEventListener("click", () => {
  window.location.href = "viratkohli.php";
});
document.getElementById("sachin-page").addEventListener("click", () => {
  window.location.href = "sachin.php";
});
document.getElementById("MSD-page").addEventListener("click", () => {
  window.location.href = "msdhoni.php";
});
document.getElementById("Videos").addEventListener("click", () => {
  window.location.href = "video.php";
});


$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $("#back-to-top").fadeIn();
    } else {
      $("#back-to-top").fadeOut();
    }
  });
  $("#back-to-top").click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      400
    );
    return false;
  });
});

// Select the form and search input
document.getElementById("searchForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent the form from submitting and reloading the page

  // Get the value entered in the search box
  var searchQuery = document.querySelector(".search-box").value.toLowerCase().trim();

  // Check the search query and redirect accordingly
  if (
      searchQuery === "virat kohli" || 
      searchQuery === "viratkohli"
  ) {
      window.location.href = "viratkohli.php";
  } else if (
      searchQuery === "sachin tendulkar" || 
      searchQuery === "sachintendulkar"
  ) {
      window.location.href = "sachin.php";
  } else if (
      searchQuery === "ms dhoni" || 
      searchQuery === "msdhoni" || 
      searchQuery === "dhoni"
  ) {
      window.location.href = "msdhoni.php";
  } else if (searchQuery === "") {
      alert("Search for any player.");
  } else {
      alert("Player not found. Please try again.");
  }
});