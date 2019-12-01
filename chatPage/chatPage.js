$(document).ready(function () {
    $(".chatList").click(function(e) {
        $(".outgoingMessage, .incomingMessage").addClass("hidden");
        var sel_conv = this.className.split(' ')[1].split('-')[1];
        $(".id-" + sel_conv).removeClass("hidden");
        $(".chatList").removeClass("activeChat");
        $(this).addClass("activeChat");
    });
});