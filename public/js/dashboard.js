document.addEventListener('DOMContentLoaded', function() {
  function ucwords(str) {
    return str.replace(/\b\w/g, function(char) {
        return char.toUpperCase();
    });
}

  var baseurl = $('#baseurl').val(); console.log('base = ',baseurl);
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  function callAjax(categ = '', search = ''){
    $.ajax({
        url: baseurl+'/get-data?categ='+categ+'&search='+search, 
        type: 'GET',
        data: {
            categ: categ,
            search: search
        },
        success: function(response) { 
          if(response.length != 0 && typeof response.length != undefined){
            toastr.success('Data Found');
            var htmldata = '';
            $.each(response, function(key, val){
              htmldata += '<div class="col-md-3 col-sm-6 mb-4">';
                htmldata += '<img src="./public/'+val.image+'" class="card-img-top" alt="'+ucwords(val.name)+'">';
                htmldata += '<div class="card-body">';
                  htmldata += '<h5 class="card-title">'+ucwords(val.name)+'</h5>';
                  htmldata += '<p class="card-text">'+val.price_range_start+' - '+val.price_range_end+'</p>';
                  htmldata += '<a href="#" class="btn btn-book-now w-100">Book Now</a>';
                htmldata += '</div>';
              htmldata += '</div>';
            });

            $('#ins-search-data').html(htmldata);
          } else {
            toastr.warning('Empty Search Results');
          }
          
        },
        error: function(xhr, status, error) {
          toastr.error(error);
        }
    });
  
  }

  var searchval = $('#searchinput').val();
  var id = '';
  
  $('.category-item').on('click', function() {
    $('.category-item').removeClass('active');
    $(this).addClass('active');
    id = this.id;
    searchval = $('#searchinput').val();
    callAjax(id, searchval)
  });

  $('#searchbtn').on('click', function(){ 
    searchval = $('#searchinput').val();
    callAjax('', searchval)
  });

});