const wrapperMenu = document.querySelector( '.wrapper-menu' );
const navigation = document.querySelector( '.navigation' );

wrapperMenu.addEventListener( 'click', function() {
	wrapperMenu.classList.toggle( 'open' );
	navigation.classList.toggle( 'open' );
} );
