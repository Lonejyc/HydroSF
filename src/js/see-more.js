

// // $ = jQuery
let currentPage = 1;
document.querySelector('.load-more').addEventListener('click', () => {
  currentPage++;

  const el = document.querySelector('.publication-list');
  const siteURL = el.dataset.url;

  const form = new FormData();
  form.append('action', 'weichie_load_more');
  form.append('paged', currentPage);
  
  fetch(`${siteURL}/wp-admin/admin-ajax.php`, {
    body: form,
    method: 'POST'
  }).then((res) => {
    return res.json();
  }).then((data) => {
    const previousHTML = el.innerHTML; // on récupère l'HTML de publication-list existant (les posts)

    el.innerHTML = previousHTML + data.html;

    if (currentPage + 1 >= data.max) {
      document.querySelector('.load-more').style.display = 'none';
      document.querySelector('.load-more').classList.add('hide');
    } 
  })

});


// $('.load-more').on('click', function() {
//     currentPage++;
//     $.ajax({
//         type: 'POST',
//         url: '/wp-admin/admin-ajax.php',
//         dataType: 'html',
//         data: {
//           action: 'weichie_load_more',
//           paged: currentPage,
//         },
//         success: function (res) {
//           $('.publication-list').append(res);
//         }
//       });
// });