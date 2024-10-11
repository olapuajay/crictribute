document.getElementById('vk-page').addEventListener('click', () => {
    window.location.href = 'viratkohli.php';
});
document.getElementById('sachin-page').addEventListener('click', () => {
    window.location.href = 'sachin.php';
});
document.getElementById('MSD-page').addEventListener('click', () => {
    window.location.href = 'msdhoni.php';
});
document.getElementById('Videos').addEventListener('click', () => {
    window.location.href = 'video.php';
})
document.getElementById('Login').addEventListener('click', () => {
    window.location.href = 'signIn.php';
});

$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});
document.getElementById('submitbtn').addEventListener('click', () => {
    // Get form inputs
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('textMessage').value;
    var successMessage = document.getElementById('successMessage');

    // Check if inputs are filled
    if (name && email && message) {
        // Display success message
        successMessage.textContent = 'Message sent successfully!';
        successMessage.style.color = 'green';
        // Clear input fields
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('textMessage').value = '';
    } else {
        // Display error message if any field is empty
        successMessage.textContent = 'Please fill out all fields.';
        successMessage.style.color = 'red';
    }
});
// Add an event listener to the form submission
document.querySelector('form').addEventListener('submit', function(event) {
// Prevent the default form submission behavior
event.preventDefault();

// Get the value entered in the search box
var searchQuery = document.querySelector('.search-box').value.toLowerCase();

// Check the search query and redirect accordingly
if (searchQuery === 'virat kohli' || searchQuery === 'Virat kohli' || searchQuery === 'viratkohli' || searchQuery === 'Virat Kohli') {
window.location.href = 'viratkohli.php';
} else if (searchQuery === 'sachin tendulkar' || searchQuery === 'Sachin tendulkar' || searchQuery === 'sachintendulkar' || searchQuery === 'Sachin Tendulkar') {
window.location.href = 'sachin.php';
} else if (searchQuery === 'ms dhoni' || searchQuery === 'msdhoni' || searchQuery === 'MS Dhoni' || searchQuery === 'Ms Dhoni' || searchQuery === 'dhoni' || searchQuery === 'Dhoni') {
window.location.href = 'msdhoni.php';
} else if (searchQuery === '') {
alert('Search for any player.');
}
else {
// If the search query doesn't match any player, you can display an error message or handle it in any other way
alert('Player not found. Please try again.');
}
});