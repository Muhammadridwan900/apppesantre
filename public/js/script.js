$(function()
{
    $('.simpanData[type=submit]').on('click', function(){
        const id =$(this).data('id');

        $.ajax({
            URL:'http://localhost/apppesantren/public/Data_santri/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                
            }
        });
    });
});