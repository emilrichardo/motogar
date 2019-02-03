$(document).ready(function(){
   
    //set the index counter
    var i = 0;

    //convert all .nav-tabs, except those with the class .keep-tabs
    $('.nav-tabs').not( ".keep-tabs" ).each(function(){

        //init variables
        var $select,
            c       = 0,
            $select = $('<select class="mobile-nav-tabs-' +i+ ' mobile-tab-headings "></select>');

        //add unique class to nav-tabs, so each select works independently
        $(this).addClass('nav-tabs-index-'+i);

        //loop though each <li>, building each into an <option>, getting the text from the a href
        $(this).children('li').each(function() {
            $select.append('<option value="'+c+'">' + $(this).text() + '</option>');
            c++;
        });

        //insert new <select> above <ul nav-tabs>
        $(this).before($select);

        //increase index counter
        i++
    });

    //on changing <select> element
    $('[class^=mobile-nav-tabs]').on('change', function (e) {

        //get index from selected option
        classArray      = $(this).attr('class').split(" ");
        tabIndexArray   = classArray[0].split("mobile-nav-tabs-")
        tabIndex        = tabIndexArray[1];

        //using boostrap tabs, show the selected option tab
        $('.nav-tabs-index-'+tabIndex+' li a').eq($(this).val()).tab('show');
    });
    
});
Raw
 styles.scss