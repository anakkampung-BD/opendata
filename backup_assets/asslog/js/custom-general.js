Array.prototype.lastArray = function() {return this[this.length-1];}
$(document).ready(function () {
    timeout()
});
//LOGOUT CONFIRMATION
$('[data-click="swal-confirmation-logout"]').click(function (e) {
    e.preventDefault();
    playAudio('alert');
    swal({
        title: 'Are you sure want to exit?',
        icon: 'info',
        buttons: {
            cancel: {
                text: 'Cancel',
                value: null,
                visible: true,
                className: 'btn btn-default',
                closeModal: true,
            },
            confirm: {
                text: 'Ok',
                value: true,
                visible: true,
                className: 'btn btn-primary',
                closeModal: false,
            }
        }
    }).then(function (isConfirm) {
        if (isConfirm) {
            window.location.href = 'admin/do_logout';
        } else {

        }
    })
});

function timeout() {
    var o;
    $("body").append(""), $.idleTimeout("#idle-timeout-dialog", ".modal-content button:last", {
        idleAfter: 60*15,
        timeout: 3e4,
        pollingInterval: 60*15,
        keepAliveURL: "/keep-alive",
        serverResponseEquals: "OK",
        onTimeout: function () {
            window.location = "admin/do_logout"
        },
        onIdle: function () {
            $("#idle-timeout-dialog").modal("show"), o = $("#idle-timeout-counter"), $("#idle-timeout-dialog-keepalive").on("click", function () {
                $("#idle-timeout-dialog").modal("hide")
            })
        },
        onCountdown: function (e) {
            o.html(e)
        }
    })
}

/* PLAY SOUND FUNCTION */
function playAudio(file) {
    if (file === 'alert')
        document.getElementById('audio-alert').play();
    if (file === 'fail')
        document.getElementById('audio-fail').play();
}
/* END PLAY SOUND FUNCTION */

function access_error() {
    swal('You do not have access rights to do this action..');
}

function start_loading(panel_id) {
    var target = $(panel_id);
    if (!$(target).hasClass('panel-loading')) {
        var targetBody = $(target).find('.panel-body');
        var spinnerHtml = '<div class="panel-loader"><span class="spinner-small fa-spin"></span></div>';
        $(target).addClass('panel-loading');
        $(targetBody).prepend(spinnerHtml);
    }
}

function stop_loading(panel_id) {
    var target = $(panel_id);
    $(target).removeClass('panel-loading');
    $(target).find('.panel-loader').remove();
}

function start_modal_loading(modal_id) {
    var target = $(modal_id);
    if (!$(target).hasClass('modal-loading')) {
        var targetBody = $(target).find('.modal-body');
        var spinnerHtml = '<div class="modal-loader"><span class="spinner-small fa-spin"></span></div>';
        $(target).addClass('modal-loading');
        $(targetBody).prepend(spinnerHtml);
        $(modal_id + " .modal-footer").addClass('d-none');
    }
}

function stop_modal_loading(modal_id) {
    var target = $(modal_id);
    $(target).removeClass('modal-loading');
    $(target).find('.modal-loader').remove();
    $(modal_id + " .modal-footer").removeClass('d-none');
}

function change_tab(value) {
    var key = 'tabopen';
    baseUrl = [location.protocol, '//', location.host, location.pathname].join('');
    urlQueryString = document.location.search;
    var newParam = key + '=' + value, params = '?' + newParam;

    // If the "search" string exists, then build params from it
    if (urlQueryString) {
        keyRegex = new RegExp('([\?&])' + key + '[^&]*');
        // If param exists already, update it
        if (urlQueryString.match(keyRegex) !== null) {
            params = urlQueryString.replace(keyRegex, "$1" + newParam);
        } else { // Otherwise, add it to end of query string
            params = urlQueryString + '&' + newParam;
        }
    }
    if (value == 1) {
        // console.log(ctx);
    }
    window.history.replaceState({}, "", baseUrl + params);
}