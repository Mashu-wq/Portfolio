let menu = document.querySelector("#menu-btn");
let header = document.querySelector(".header");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  header.classList.toggle("active");
  document.body.classList.toggle("active");
};

window.onscroll = () => {
  if (window.innerWidth < 991) {
    menu.classList.remove("fa-times");
    header.classList.remove("active");
    document.body.classList.remove("active");
  }
  document.querySelectorAll("section").forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if ((top) => offset && top < offset + height) {
      document.querySelectorAll(".header .navbar a").forEach((links) => {
        links.classList.remove("active");
        document
          .querySelector(".header .navbar a[href*=" + id + "]")
          .classList.add("active");
      });
    }
  });
};

function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

window.onscroll = function () {
  var scrollUpBtn = document.getElementById("scroll-up-btn");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollUpBtn.style.display = "block";
  } else {
    scrollUpBtn.style.display = "none";
  }
};

function sendEmail() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var body = document.getElementById("body").value;
  window.open("index.html");
}
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

// Function to send AJAX requests
function sendRequest(url, method, data, callback) {
  var xhr = new XMLHttpRequest();
  xhr.open(method, url, true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      callback(xhr.responseText);
    }
  };

  xhr.send(data);
}

// Function to update data (placeholder)
function updateData(section, id) {
  var confirmation = confirm("Are you sure you want to update this data?");
  if (confirmation) {
    // Implement your update logic here
    // You might want to open a form to edit data
    // and send an AJAX request to update data on the server
  }
}

// Function to delete data (placeholder)
function deleteData(section, id) {
  var confirmation = confirm("Are you sure you want to delete this data?");
  if (confirmation) {
    // Implement your delete logic here
    // Send an AJAX request to delete data on the server
    var data = "action=delete_" + section + "&id=" + id;
    sendRequest("admin.php", "POST", data, function (response) {
      // Handle the server response, e.g., refresh the data table
      location.reload();
    });
  }
}

// Add more functions as needed for other client-side interactions
