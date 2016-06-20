(function() {

var app = angular.module('gemStore', [ ]);

app.controller("StoreController", function() { 
    this.products = gems;
});

var gems = [
{
    name: "Sapphire",
    price: 110.50,
    description: "Once upon a time, there is a big chance but I don't cherish it",
    canPurchase: true
},

{
    name: "Jade",
    price: 253.50,
    description: "My Wife has a pretty One and now it's her favourite",
    canPurchase: true
}
    
];

})();