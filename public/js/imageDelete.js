
//html script version
// function imageDelete(imageId, element) {
//     fetch(`/listings/image/${imageId}`, {
//         method: 'DELETE',
//         headers: {
//             'X-CSRF-TOKEN': '{{ csrf_token() }}',
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify({ id: imageId })
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.status === 'deleted') {
//             element.closest('li').remove();
//         }
//         // Optionally handle other statuses or errors
//     })
//     .catch(error => console.error('Error:', error));
// }


function imageDelete(imageId, element) {
    fetch(`/listings/image/${imageId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ id: imageId })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'deleted') {
            element.closest('li').remove();
        } else {
            console.error('Failed to delete image:', data.message);
        }
    })
    .catch(error => console.error('Error:', error));
}

// fetch is the route, make sure you put the right method, stringify the id 
// we create a status string if successful then we do this if not then error