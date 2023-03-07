/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

$( document ).ready(function() 
{
    
    console.log( "ready!" );
    $('.popup').click(function()
    {
        var src = $(this).attr('src');
        $('.modal').modal('show');
        $('#popup-img').attr('src',src);
    });
    
});

/*
* This function toggles the nav menu active/inactive status as
* different pages are selected. It should be called from $(document).ready()
* or whenever the page loads.
*/
function activateMenu()
{
    var current_page_URL = location.href;
    $(".navbar-nav a").each(function()
    {
        var target_URL = $(this).prop("href");
        if (target_URL === current_page_URL)
        {
            $('nav a').parents('li, ul').removeClass('active');
            $(this).parent('li').addClass('active');
            return false;
        }
    });
}


