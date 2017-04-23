/**
 * Created by Chuongnv on 21/04/2017.
 */

$(function () {
    $('#create_order').click(function () {
        $('#create_order_modal').modal('show')
            .find('#create_order_modal_content')
            .load($(this).attr('value'));
    });
});