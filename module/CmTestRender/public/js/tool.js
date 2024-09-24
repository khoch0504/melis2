$(function(){
    $("body").on("click", ".btnAddCmTestRender", function(){
        modalUrl = '/melis/MelisCore/MelisGenericModal/emptyGenericModal';
        melisHelper.createModal("id_cmtestrender_modal", "cmtestrender_modal", false, {}, modalUrl);
    });

    $("body").on("click", ".btnSaveCmTestRender", function(){
        var btn = $(this);
        var id = $(this).data("id");
        submitForm($("form#cmTestRenderForm"), id, btn);
    });s

    var submitForm  = function(form, id, btn){

        form.unbind("submit");

        form.on("submit", function(e) {

            e.preventDefault();

            btn.attr('disabled', true);

            var formData = new FormData(this);

            formData.append('lang_cms_id', id);



            $.ajax({
                type: 'POST',
                url: '/melis/CmTestRender/Properties/save',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
            }).done(function (data) {
                if(data.success){
                    // Notifications
                    melisHelper.melisOkNotification(data.textTitle, data.textMessage);

                    $("#id_cmtestrender_modal_container").modal("hide");
                    melisHelper.zoneReload("id_cmtestrender_content", "cmtestrender_content");
                }else{
                    melisHelper.melisKoNotification(data.textTitle, data.textMessage, data.errors);
                    melisHelper.highlightMultiErrors(data.success, data.errors, "#id_cmtestrender_modal");
                }

                btn.attr('disabled', false);
            }).fail(function () {
                alert(translations.tr_meliscore_error_message);
            });
        });

        form.submit();
    };

    $("body").on("click", ".btnEditCmTestRender", function(){
        var id = $(this).parents("tr").attr("id");
        var modalUrl = '/melis/MelisCore/MelisGenericModal/emptyGenericModal';
        melisHelper.createModal("id_cmtestrender_modal", "cmtestrender_modal", false, {id : id}, modalUrl);
    });

    $("body").on("click", ".btnDeleteCmTestRender", function(){
        var id = $(this).parents("tr").attr("id");

        melisCoreTool.confirm(
            translations.tr_cmtestrender_common_button_yes,
            translations.tr_cmtestrender_common_button_no,
            translations.tr_cmtestrender_delete_title,
            translations.tr_cmtestrender_delete_confirm_msg,
            function(data) {
                $.ajax({
                    type        : 'GET',
                    url         : '/melis/CmTestRender/List/deleteItem?id='+id,
                    dataType    : 'json',
                    encode		: true,
                    success		: function(data){
                        // refresh the table after deleting an item
                        melisHelper.zoneReload("id_cmtestrender_content", "cmtestrender_content");

                        // Notifications
                        melisHelper.melisOkNotification(data.textTitle, data.textMessage);

                        
                    }
                });
            });
    });
});