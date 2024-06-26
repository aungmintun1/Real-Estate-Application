let offer="sale"

salePrice = document.getElementById('salePrice');
rentPrice = document.getElementById('rentPrice');

rentPrice.classList.add('hidden')

function updateOffer(value) {
     offer=value

     if(offer=="rent"){
        salePrice.classList.add('hidden')
        rentPrice.classList.remove('hidden')
       }
       
       if(offer=="sale"){
           rentPrice.classList.add('hidden')
           salePrice.classList.remove('hidden')
       }
}

