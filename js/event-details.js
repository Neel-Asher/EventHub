const events = {
  1: {
    title: "Digital Marketing Workshop",
    description: "Learn the latest digital marketing strategies...",
    date: "Sun, Sep 22, 2025",
    time: "10:00 AM",
    location: "Mumbai Marketing Hub, India",
    registered: "142/150",
    price: "12499",
    image: "images/digitalMarketingWorkshop.jpeg"
  },
  2: {
    title: "Startup Networking Meet",
    description: "Connect with budding entrepreneurs...",
    date: "Fri, Oct 11, 2025",
    time: "6:00 PM",
    location: "Bangalore Startup Hub, India",
    registered: "98/120",
    price: "999",
    image: "images/startupImage.jpg"
  },
  3: {
    title: "Music Concert",
    description: "Experience live performances from top artists...",
    date: "Sat, Nov 16, 2025",
    time: "7:30 PM",
    location: "Delhi Concert Arena, India",
    registered: "480/500",
    price: "2499",
    image: "images/concert.jpg"
  }
};

const urlParams = new URLSearchParams(window.location.search);
const eventId = urlParams.get("id");

if (events[eventId]) {
  document.getElementById("eventTitle").textContent = events[eventId].title;
  document.getElementById("eventDescription").textContent = events[eventId].description;
  document.getElementById("eventDate").textContent = events[eventId].date;
  document.getElementById("eventTime").textContent = events[eventId].time;
  document.getElementById("eventLocation").textContent = events[eventId].location;
  document.getElementById("eventRegistered").textContent = events[eventId].registered;
  document.getElementById("eventPrice").textContent = events[eventId].price;
  document.getElementById("eventImage").src = events[eventId].image;
}
    