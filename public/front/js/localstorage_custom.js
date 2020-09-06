$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
  showcart();
  showtable();
  $('.addtocartBtn').click(function(){
    var id = $(this).data('id');
    var price = $(this).data('price');
    var photo = $(this).data('photo');
    var items = {'id':id,'price':price,'photo':photo,'qty':1};
    var item=localStorage.getItem('mycart');
      if (!item) {
        var item = '{"itemlist":[]}';
      }
      var itemObject = JSON.parse(item);
      var itemArr = itemObject.itemlist;
      var hasid=false;
      $.each(itemArr,function(i,v){
        if (v.id==id) {
          hasid=true;
          v.qty++;
        }
      })
      if (!hasid) {
        itemArr.push(items);
      }
      
      var itemString = JSON.stringify(itemObject);
      localStorage.setItem('mycart', itemString);
      showtable();
      showcart();
  });

  function showtable()
    {
      var item = localStorage.getItem('mycart');
      if(item)
      {
        var itemObject = JSON.parse(item);
        var itemArr = itemObject.itemlist;
        var data = '';
        var j=1;
        var total=0;
        var tfoot = '';
        $.each(itemArr,function(i,v){
          var id=v.id;
          var price = v.price;
          var photo = v.photo;
          var qty = v.qty;
          var subtotal = qty*price;
          total+=(subtotal);

          data += `<tr>
              
              <td> 
                <img src="${photo}" class="cartImg" width=100 height=100 >            
              </td>
             
              <td>
                <button class="btn btn-outline-secondary plus_btn" data-id=${id}> 
                  <i class="icofont-plus"></i> 
                </button>
              </td>
              <td>
                <p> ${qty} </p>
              </td>
              <td>
                <button class="btn btn-outline-secondary minus_btn" data-id=${i}> 
                  <i class="icofont-minus"></i>
                </button>
              </td>
              <td>
                <p class="text-danger"> 
                  ${price} Ks
                </p>
               
              </td>
              <td>
                ${price} Ks
              </td>
          
            <td>
                <button class="btn btn-outline-danger remove btn-sm" data-id="${i}" style="border-radius: 50%"> 
                  <i class="icofont-close-line"></i> 
                </button> 
              </td>
                </tr>`;
        

        })
            data+=`<tr>
        		<td colspan="5">Total:</td>
        		<td colspan="3">${total}</td>
        		<tr>`;
         $('#shoppingcart_table').html(data);
         $('total').text(total);
         $('.alltotal').html(total);
     
}
        
      else{
        $('#shoppingcart_tfoot').html('');
      }
      
    }


    function showcart()
    {
      var item = localStorage.getItem('mycart');
      if(item){
        var itemObject = JSON.parse(item);
        var itemArr = itemObject.itemlist;
        var qtyy=0;
        $.each(itemArr,function(i,v){
          qtyy += v.qty;
        })
        $('.cartNoti').text(qtyy);
      }
    }


    $('#shoppingcart_table').on('click','.plus_btn',function(){
      var id = $(this).data('id');
      //alert(id);
      var item = localStorage.getItem('mycart');
      if(item){
        var itemObject = JSON.parse(item);
        var itemArr = itemObject.itemlist;
        $.each(itemArr,function(i,v){
          if(id==v.id)
          {
            var qty=v.qty++;
            var itemString = JSON.stringify(itemObject);
            localStorage.setItem('mycart',itemString);
            showtable();
            showcart();
          }
          
        })
        
      }
      
    });


    $('#shoppingcart_table').on('click','.remove',function(){
            var id = $(this).data('id');
            var itemString = localStorage.getItem('mycart');
            if(itemString)
            {
                var itemArray = JSON.parse(itemString);
                var itemArr = itemArray.itemlist;
                itemArr.splice(id,1);
                var itemData = JSON.stringify(itemArray);
                localStorage.setItem('mycart',itemData);
                showtable();
                showcart();
            }
    });

    $('#shoppingcart_table').on('click','.minus_btn',function(){
            var qtyid = $(this).data('id');
            var itemString = localStorage.getItem('mycart');
            if(itemString){
                var itemArray = JSON.parse(itemString);
                var itemArr = itemArray.itemlist;
                $.each(itemArr,function(i,v){
                    if(qtyid==i){

                    var qty=v.qty--;

                    if(qty=='1'){
                        itemArr.splice(i,1);
                    }
                    var itemData = JSON.stringify(itemArray);
                    localStorage.setItem('mycart',itemData);
                    showtable();
                    showcart();
                    }
                    
                })
            }
    })

    //For Buy Now

    $('.buy_now').on('click',function(){
    	// alert('hi');
    	var notes = $('.notes').val();
    	//var total = $('.total').val();

    	var shopString = localStorage.getItem("mycart");//string
    	var shopArr=JSON.parse(shopString);
    	var shop_data=shopArr.itemlist;
    	if(shopString){
    		//var shopArray = JSON.parse(shopString);

    		$.post('/orders',{shop_data:shop_data,notes:notes},function(response){
    			if(response){
    				alert(response);
    				localStorage.clear();
    				showtable();
    				location.href="/";
    			}
    		})

    	}
    })
 
})

   



