var products = [
	{ name: 'apple', price: 30 },
	{ name: 'bacon', price: 80 },
	{ name: 'banana', price: 45 },
	{ name: 'cherry', price: 20 },
]

function Customer(name, cash) {
	this.name = name;
	this.cash = cash;

	this.buy = function (nameProduct) {
		for (var i = 0; i < products.length; i++) {
			if (products[i].name == nameProduct) {
				if (this.cash >= products[i].price) {
					this.cash -= products[i].price;
					return this.name + ' bought ' + nameProduct + '. Cash = -' + products[i].price + '$';
				} else {
					return 'You don\'t have enough money to buy ' + nameProduct;
				}
			} 
		}
		throw 'Don\'t have such meal in SM. So sorry, ' + this.name + '!';
	}
}

var client1 = new Customer();
client1.name = prompt("Hello! You are a new customer in our SM! What is your name?");
client1.cash = Number(prompt('Nice to meet you, ' + client1.name + '. What about cash? \'Ex:(100)\''));
while (isNaN(client1.cash))  {
	client1.cash = Number(prompt(client1.name + ', you need to input a number value, like 100. Just do it, please:'));
}

console.log('New customer: ' + client1.name + '\nCash: ' + client1.cash + '$');

console.log('Output prise list:');
for (var i = 0; i < products.length; i++){
	console.log(products[i].name + ' - ' + products[i].price + '$' );
}

var inSM = true;
do {
	var userBuyingChoise = prompt("Do you choose apple, bacon, banana or cherry?");
	console.log(client1.buy(userBuyingChoise.toLowerCase()));

	console.log (client1.name + ' has ' + client1.cash + '$ left');
	var userChoise = prompt('Would you like to buy anything else in SM? Just answer y/n');
	if (userChoise.toLowerCase() == 'no' || userChoise.toLowerCase() == 'n') {
		inSM = false;
	}
} while (inSM);

console.log ('Bye-bye ' + client1.name + '. See you!');
