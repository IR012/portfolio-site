function notificationClose() {
    const notification = document.querySelector(".notification");
    const closeNotification = document.querySelector(".notification .close-button");
    const closeNotePostRequest = document.querySelector("#notification-close");

    closeNotification.addEventListener("click", function() {
        notification.style.display = "none";
        closeNotePostRequest.value = "close";
    });
};

function terminalText() {
    var terminalCode = document.querySelector(".terminal-window code"); 
    var terminalCursor = document.querySelector(".terminal-window .cursor");
    var fullText = "Hello World!";
    var textIndex = 0;
    var timer;

    function typeText() {
        terminalCode.innerHTML = fullText.substring(0, textIndex++ + 1); 

        if (terminalCode.innerHTML === fullText) {
            clearInterval(timer);
            setTimeout(function() {
                timer = setInterval(deleteText, 100);
            }, 1000);
        }
    }

    function deleteText() {
        terminalCode.innerHTML = fullText.substring(0, textIndex-- - 1); 

        if (terminalCode.innerHTML === "") {
            clearInterval(timer);
            setTimeout(function() {
                timer = setInterval(typeText, 150);
            }, 1000);
        }
    }

    timer = setInterval(typeText, 100);
}

function burgerNav() {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector("header ul");

    burger.addEventListener("click", function() {
        nav.classList.toggle("nav-active");
    });
}

// Swiper JS

const swiper = new Swiper('.swiper', {
    // Optional parameters
    //direction: 'vertical',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

// Call functions
notificationClose();
terminalText();
burgerNav();

