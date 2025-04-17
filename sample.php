<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Card Display</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    nav {
      background-color: #333;
      color: white;
      padding: 10px;
      text-align: center;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .card {
      width: 200px;
      margin: 20px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: white;
    }

    .search-container {
      text-align: center;
      padding: 20px;
    }

    input[type="text"] {
      width: 200px;
      padding: 8px;
    }
  </style>
</head>

<body>

  <nav>
    <h2>Card Display</h2>
    <div class="search-container">
      <label for="location">Search by Location:</label>
      <input type="text" id="location" placeholder="Enter Location" oninput="searchByLocation()">
    </div>
  </nav>

  <div class="card-container" id="cardContainer">
    <!-- Card content will be dynamically generated here -->
  </div>

  <script>
    // Sample data with locations
    const cardsData = [
      { name: "Card 1", location: "Kadapa" },
      { name: "Card 2", location: "Rayachoti" },
      { name: "Card 3", location: "Vempalli" },
      // Add more cards with different locations
      // ...
      { name: "Card 12", location: "Rayachoti" },
    ];

    // Function to generate HTML for cards
    function generateCards(cards) {
      const cardContainer = document.getElementById("cardContainer");
      cardContainer.innerHTML = ""; // Clear existing content

      cards.forEach(card => {
        const cardElement = document.createElement("div");
        cardElement.className = "card";
        cardElement.innerHTML = `
          <h3>${card.name}</h3>
          <p>Location: ${card.location}</p>
        `;
        cardContainer.appendChild(cardElement);
      });
    }

    // Function to filter cards based on location
    function searchByLocation() {
      const locationInput = document.getElementById("location");
      const searchTerm = locationInput.value.toLowerCase();

      const filteredCards = cardsData.filter(card =>
        card.location.toLowerCase().includes(searchTerm)
      );

      generateCards(filteredCards);
    }

    // Initial display of cards
    generateCards(cardsData);
  </script>

</body>

</html>

