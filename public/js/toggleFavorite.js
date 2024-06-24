
// function toggleFavorite(listingId, element) {
//     fetch(`/favorites/${listingId}`, {
//         method: 'POST',
//         headers: {
//             'X-CSRF-TOKEN': '{{ csrf_token() }}',
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify({ id: listingId })
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.status === 'saved') {
//             element.closest('li').classList.add('favorite');
//         }
//         // Optionally handle other statuses or errors
//     })
//     .catch(error => console.error('Error:', error));
// }


function toggleFavorite(listingId, element) {
    fetch(`/favorites/${listingId}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ id: listingId })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'saved') {
            element.closest('li').classList.add('favorite');
        }

    })
    .catch(error => console.error('Error:', error));
}
