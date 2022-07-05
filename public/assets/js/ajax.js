jQuery(document).ready(function($){
    $('body').on('change', 'select', function(event) {
        var data_json = {'hafte':$(this).val()};
        //data_json._token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: 'http://localhost/p4cup.V3/public/ajax_get_hafte',
            data: data_json, // form data
            type:'get', // POST
            beforeSend:function(xhr){
                $('.table#baziha').html('لطفا صبر کنید...')
            },
            success:function(data){
                 $('.table#baziha').html(data)

            }
        });
    });
});
