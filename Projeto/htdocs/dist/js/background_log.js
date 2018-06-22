/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var i = 1;
function test() {
    $(".imgback").each(function (index) {
        $(this).hide();
        $(this).delay(8000 * index).fadeIn(8000).fadeOut();
        if (index == 2)
        {
            setTimeout(
                    function ()
                    {
                        test();
                    }, 8000 * 3);
        }
    });
}
window.document.body.onload = test();