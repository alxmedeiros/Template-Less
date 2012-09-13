require([

		// Carregados em todas as páginas
		'js/libs/jquery.js',
        'js/libs/less.js',
		'js/libs/modernizr.js',		
        'js/modules/common.js',

        // Páginas específicas 
        'js/modules/home.js',

    ], function(jquery, less, modernizr, common, home){        

    	// Scripts carregados em todas as páginas
    	common.init();

        var page = $('body').attr('rel');

    	// Carregado arquivo de cada página
    	eval(page).init();
        
    });