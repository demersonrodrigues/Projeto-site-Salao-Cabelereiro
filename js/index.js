let homeButton = document.getElementById("home")
let sobreButton = document.getElementById("sobreNos")
let sobre2Button = document.getElementById("sobreNos2")
let servicoButton = document.getElementById("servicos")
let servico2Button = document.getElementById("servicos2")
let newsletterButton = document.getElementById("newsletter")
let contatoButton = document.getElementById("contato")
let ultimoPedidosBtn = document.getElementById("ultimo-pedidos-btn");
let ultimoPedidosPanel = document.getElementById("ultimo-pedidos-panel");

console.log(123);
console.log(ultimoPedidosPanel);

homeButton.addEventListener('click', () => document.getElementById("homeContainer").scrollIntoView({behavior: "smooth"}))
sobreButton.addEventListener('click', () => document.getElementById("aboutContainer").scrollIntoView({behavior: "smooth"}))
sobre2Button.addEventListener('click', () => document.getElementById("aboutContainer").scrollIntoView({behavior: "smooth"}))
servicoButton.addEventListener('click', () => document.getElementById("servicosContainer").scrollIntoView({behavior: "smooth"}))
servico2Button.addEventListener('click', () => document.getElementById("servicosContainer").scrollIntoView({behavior: "smooth"}))
newsletterButton.addEventListener('click', () => document.getElementById("newsletterContainer").scrollIntoView({behavior: "smooth"}))
contatoButton.addEventListener('click', () => document.getElementById("contatoContainer").scrollIntoView({behavior: "smooth"}))

ultimoPedidosBtn.addEventListener('click', () => console.log(123));  
