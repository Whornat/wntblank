$(function () {
        $('[data-paroller-factor]').paroller();
        $('.paroller').paroller({
            factor: 0.4,
            type: 'foreground'
        });
    });