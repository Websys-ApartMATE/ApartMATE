var user_id = 1;

function hideMessages(target) {
    $(".outgoingMessage, .incomingMessage").addClass("hidden");
    var sel_conv = target.attr("class").split(' ')[1].split('-')[1];
    $(".id-" + sel_conv).removeClass("hidden");
    $(".chatList").removeClass("activeChat");
    $(target).addClass("activeChat");
}


$(document).ready(function () {
    // $(".chatList").first().addClass("activeChat");
    hideMessages($(".chatList").first());
    $(".chatList").click(function(e) {
        hideMessages($(this));
    });

    $(".chatList").each(function(i, data) {
        var conv = $(data).attr("class").split(' ')[1].split('-')[1];
        $(data).find("p").text($(".id-" + conv).last().find("p").text());
    });
    $(".messageSendBtn").click(function() {
        var active_conv = $(".activeChat").attr("class").split(' ')[1].split('-')[1];
        $("#msg_to").val(active_conv);
        $("#msg_from").val(user_id);
        $("form").submit();
    });

});


