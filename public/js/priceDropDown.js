function updatePriceRange(value) {
    const [min, max] = value.split('-').map(Number);
    document.getElementById('min_price').value = min || '';
    document.getElementById('max_price').value = max || '';
}

/*
function updatePriceRange(value) {
    // eg. string value is '100-200'
    const string = value.split('-').map(Number);
    const min= string[0];
    const max= string[1];
    //after converting string to an array with split, and then with map, iterating through each item to convert to a number value 
    //[100, 200]
    document.getElementById('min_price').value = min || '';
    document.getElementById('max_price').value = max || '';
}
*/