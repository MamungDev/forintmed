<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#ffffff">
  <title>Know Your Food</title>
  <link rel="stylesheet" href="food-cards.css">
  <script src="food-cards.js" defer></script>
</head>
<body>
  <main class="food-background" aria-label="Know Your Food interactive dishes">
    <button class="dish pizza" type="button" data-dish="pizza" aria-label="Explore pizza" aria-pressed="false">
      <img src="../assets/food%20photo/transparent/pizza.webp" alt="" draggable="false">
    </button>
    <button class="dish pasta-plate" type="button" data-dish="pasta" aria-label="Explore pasta" aria-pressed="false">
      <img src="../assets/food%20photo/transparent/pasta.webp" alt="" draggable="false">
    </button>
    <button class="dish steak" type="button" data-dish="steak" aria-label="Explore steak" aria-pressed="false">
      <img src="../assets/food%20photo/transparent/steak.webp" alt="" draggable="false">
    </button>
    <button class="dish soup" type="button" data-dish="pho" aria-label="Explore pho" aria-pressed="false">
      <img src="../assets/food%20photo/transparent/pho.webp" alt="" draggable="false">
    </button>
    <button class="dish roast" type="button" data-dish="cordon" aria-label="Explore cordon bleu" aria-pressed="false">
      <img src="../assets/food%20photo/transparent/cordon%20blu.webp" alt="" draggable="false">
    </button>
    <button class="dish stirfry" type="button" data-dish="stirfry" aria-label="Explore stir-fry" aria-pressed="false">
      <img src="../assets/food%20photo/transparent/stirfry.webp" alt="" draggable="false">
    </button>
    <button class="dish chicken" type="button" data-dish="chicken" aria-label="Explore chicken and fries" aria-pressed="false">
      <img src="../assets/food%20photo/transparent/chickandfries.webp" alt="" draggable="false">
    </button>

    <h1 id="page-title">
      <button id="start-tour" type="button">Know Your Food!<span class="start-hint">Click to explore the dishes</span></button>
    </h1>

    <section class="info-card" id="info-card" aria-label="Dish information" aria-hidden="true" inert>
      <article class="card-copy copy-right pizza-copy" data-card="pizza" aria-hidden="true" inert>
        <h2>What is a Pizza?</h2>
        <p>Every year, roughly 3 billion pizzas are consumed globally around the world by us consumers. The pizzas we have today wouldn't be here in today's modern era without beginning. All the way from Naples, Italy, lies the birth of pizzas. This was during the late 18th century, and it's well-known as a friendly-budget meal for the working class.</p>
        <p>There was a Chef named Raffaele Esposito, the individual who made the iconic Margherita pizza to honor the Italian flag with Tomatoes (Red), Mozzarella (White), and Basil (Green). This dish made history when it traveled to the American Continent with the help of Italian Immigrants. This lead to the grand opening of Lombardi's in New York in the 90s! The very first licensed pizzeria in the United States of America.</p>
      </article>
      <article class="card-copy copy-left feature-copy" data-card="pasta" aria-hidden="true" inert>
        <h2>PASTA</h2>
        <p>A staple food made from unleavened wheat dough mixed with water or eggs, shaped into hundreds of varieties, and cooked by boiling.</p>
        <p>Italy leads the world in production and consumption, and October 25 is celebrated globally as World Pasta Day.</p>
      </article>
      <!-- The steak card is intentionally blank until its content is available. -->
      <article class="card-copy copy-left" data-card="steak" aria-label="Steak - content coming later" aria-hidden="true" inert></article>
      <article class="card-copy copy-left" data-card="pho" aria-hidden="true" inert>
        <h2>PHO</h2>
        <p>Pho originated in northern Vietnam in the early 20th century, particularly around Hanoi, and is believed to have been influenced by both Vietnamese cooking traditions and French colonial cuisine. The dish consists of a flavorful broth simmered with spices such as star anise, cinnamon, and cloves, served with rice noodles, thinly sliced beef or chicken, and fresh herbs. Pho gradually spread throughout Vietnam and gained international popularity after the Vietnam War, when Vietnamese refugees introduced it to other countries, especially the United States. Today, pho is considered one of Vietnam's most iconic dishes and is enjoyed worldwide for its rich broth and comforting flavors.</p>
      </article>
      <article class="card-copy copy-left cordon-copy" data-card="cordon" aria-hidden="true" inert>
        <h2>CORDON BLEU</h2>
        <p>Cordon Bleu originates from the 16th-century French Ordre du Saint-Esprit, whose knights wore prestigious blue ribbons during lavish banquets, turning the phrase into an idiom for culinary excellence. Despite its French name and association with the world-famous Le Cordon Bleu culinary school founded in 1895, the dish itself was created in Switzerland during the 1940s as a variation of schnitzel. Traditionally prepared by pounding meat thin, wrapping it around ham and melting cheese, and frying it in breadcrumbs, it gained widespread international popularity in the 1960s with the rise of Chicken Cordon Bleu.</p>
        <p><strong>Interesting fact:</strong> In the United States, April 4th is officially recognized as National Chicken Cordon Bleu Day.</p>
      </article>
      <article class="card-copy copy-right feature-copy" data-card="stirfry" aria-label="Stir-fry" aria-hidden="true" inert>
        <p>Stir-fry is both a cooking technique and a type of dish that uses different ingredients cooked over high heat. It is a quick and versatile way to prepare meals, combining protein and vegetables while using less oil than deep-frying.</p>
        <p>Originating in China over 2,000 years ago, it has become popular in other countries, each developing its own variations, such as Thai stir-fry and Japanese yakisoba.</p>
      </article>
      <article class="card-copy copy-right chicken-copy" data-card="chicken" aria-label="Chicken and fries" aria-hidden="true" inert>
        <p><strong>Chicken and Fries</strong> is a popular fast-food combination consisting of cooked chicken, usually fried until crispy and golden brown, served with French fries made from sliced potatoes. It is commonly paired with dipping sauces, ketchup, or gravy and is enjoyed as a meal or snack.</p>
        <p><strong>Why Is Chicken and Fries a Good Combination and Why Does It Sell Well in Fast-Food Restaurants?</strong></p>
        <p>Chicken and fries are a popular combination because of their crispy texture, savory flavor, and satisfying taste. Chicken provides protein, while fries add carbohydrates, making the meal filling. It appeals to customers of all ages and is convenient to prepare and serve. Its affordability, delicious taste, and popularity make it a successful fast-food choice.</p>
      </article>
    </section>

    <nav class="card-controls" aria-label="Dish navigation" hidden>
      <button id="previous-dish" type="button" aria-label="Previous dish">&#8592;</button>
      <span id="card-counter" aria-hidden="true">1 / 7</span>
      <button id="next-dish" type="button" aria-label="Next dish">&#8594;</button>
      <span class="control-divider" aria-hidden="true"></span>
      <button id="close-tour" type="button" aria-label="Return to all dishes">&#10005;</button>
    </nav>
    <p id="card-status" class="sr-only" role="status" aria-live="polite"></p>
  </main>
</body>
</html>
