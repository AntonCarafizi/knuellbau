jQuery(function($) {
    $('.share-button').on('click', function(){
        window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;
    });
});