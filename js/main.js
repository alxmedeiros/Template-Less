var Namespace = {};

require([
    "jquery", 
    /* Libs de terceiros: Jquery.tools, jquery.validate, etc. */
    /*'libs/lib',*/
    
    'modules/common',
    // Páginas específicas 
    'modules/home'

], function($) {
    $(function() {
        Namespace.common.init();

        /* 
         * Adicionar o atributo rel em cada página, dessa forma você pode ter um js (home.js) para cada página.*/
        var pageName = $('body').attr('rel');

        if( (pageName != 'undefined') && (pageName != '') ) {
            Namespace[pageName].init();
        }
    });
});