/**
 * function for add goods
 */
function addToCart ( itemId ) {
    console.log ( "js - addToCart()" );
    $.ajax ( {
        type : 'POST',
        async : false,
        url : "/cart/addtocart/" + itemId + '/',
        dataType : 'json',
        success : function ( data ) {
            if ( data[ 'success' ] ) {
                $ ( '#cartCntItems' ).html ( data[ 'cntItem' ] );
                $ ( '#addCart_' + itemId ).hide ();
                $ ( '#removeCart_' + itemId ).show ();
            }
        }
    } );
}

function removeFromCart ( itemId ) {
    console.log ( "js - removeFromCart(" + itemId + ")" );
    $.ajax ( {
        type : 'POST',
        async : false,
        url : "/cart/removefromcart/" + itemId + '/',
        dataType : 'json',
        success : function ( data ) {
            if ( data[ 'success' ] ) {
                $ ( '#cartCntItems' ).html ( data[ 'cntItems' ] );
                $ ( '#addCart_' + itemId ).show ();
                $ ( '#removeCart_' + itemId ).hide ();
            }
        }
    } );
}

function conversionPrice ( itemId ) {
    let newCnt = $ ( '#itemCnt_' + itemId ).val ();
    let itemPrice = $ ( '#itemPrice_' + itemId ).attr ( 'value' );
    let itemRealPrice = newCnt * itemPrice;

    $ ( '#itemRealPrice_' + itemId ).html ( itemRealPrice );
}
