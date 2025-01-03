let products = [
    {image: "tomato.png", name: "Heirloom tomato", price: 5.99, place:"San Juan Capistrano, CA"},
    {image: "ginger.png", name: "Organic ginger", price: 12.99, place:"Huntington Beach, CA"},
    {image: "onion.png", name: "Sweet onion", price: 2.99, place:"Paso Robles, CA"}
];

for (let i = 0; i < 3; i++) {
    document.getElementById("cards").innerHTML+=`
    <div class='card'>
        <img class='card__image' src='images/${products[i].image}' alt='tomato' width='100%'>
        <h3 class='card__title'>${products[i].name}</h3>
        <p class='card__price'>$${products[i].price} / lb</p>
        <p class='card__place'>Grown in ${products[i].place}</p>
    </div>`
}