$(function(){
    $("body").on("click", ".btnAddCmTestServices", function(){
        modalUrl = '/melis/MelisCore/MelisGenericModal/emptyGenericModal';
        melisHelper.createModal("id_cmtestservices_modal", "cmtestservices_modal", false, {}, modalUrl);
    });

    $("body").on("click", ".btnSaveCmTestServices", function(){
        var btn = $(this);
        var id = $(this).data("id");
        submitForm($("form#cmTestServicesForm"), id, btn);
    });

    var submitForm  = function(form, id, btn){

        form.unbind("submit");

        form.on("submit", function(e) {

            e.preventDefault();

            btn.attr('disabled', true);

            var formData = new FormData(this);

            formData.append('lang_cms_id', id);



            $.ajax({
                type: 'POST',
                url: '/melis/CmTestServices/Properties/save',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
            }).done(function (data) {
                if(data.success){
                    // Notifications
                    melisHelper.melisOkNotification(data.textTitle, data.textMessage);

                    $("#id_cmtestservices_modal_container").modal("hide");
                    melisHelper.zoneReload("id_cmtestservices_content", "cmtestservices_content");
                }else{
                    melisHelper.melisKoNotification(data.textTitle, data.textMessage, data.errors);
                    melisHelper.highlightMultiErrors(data.success, data.errors, "#id_cmtestservices_modal");
                }

                btn.attr('disabled', false);
            }).fail(function () {
                alert(translations.tr_meliscore_error_message);
            });
        });

        form.submit();
    };

    $("body").on("click", ".btnEditCmTestServices", function(){
        var id = $(this).parents("tr").attr("id");
        var modalUrl = '/melis/MelisCore/MelisGenericModal/emptyGenericModal';
        melisHelper.createModal("id_cmtestservices_modal", "cmtestservices_modal", false, {id : id}, modalUrl);
    });

    $("body").on("click", ".btnDeleteCmTestServices", function(){
        var id = $(this).parents("tr").attr("id");

        melisCoreTool.confirm(
            translations.tr_cmtestservices_common_button_yes,
            translations.tr_cmtestservices_common_button_no,
            translations.tr_cmtestservices_delete_title,
            translations.tr_cmtestservices_delete_confirm_msg,
            function(data) {
                $.ajax({
                    type        : 'GET',
                    url         : '/melis/CmTestServices/List/deleteItem?id='+id,
                    dataType    : 'json',
                    encode		: true,
                    success		: function(data){
                        // refresh the table after deleting an item
                        melisHelper.zoneReload("id_cmtestservices_content", "cmtestservices_content");

                        // Notifications
                        melisHelper.melisOkNotification(data.textTitle, data.textMessage);

                        
                    }
                });
            });
    });
});