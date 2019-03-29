$(function() {
    var targets = $('[placeholder]');

    if('placeholder' in document.createElement('input')) { //check for placeholder support
        return;
    }

    targets.each(function() {
        var input = $(this);
        var placeholder = input.attr('placeholder');
        var isPassword = input.attr('type') == 'password';

        function onblur() {
            if(input.val().length == 0)
            {
                input.val(placeholder).addClass('ie-placeholder');
                if(isPassword)
                {
                    //ie8 will crash
                    try {
                        input.attr('type', 'text');
                    } catch(e) { }
                }
            }
        }

        onblur();

        function setCaret() {
            if(input[0].createTextRange) {
                var range = input[0].createTextRange();
                range.move('character', 0);
                range.select();
            }
            else if(input[0].setSelectionRange)
            {
                input[0].setSelectionRange(0, 0);
            }
        }

        input.on('focus', function() {
            if(input.hasClass('ie-placeholder'))
            {
                setCaret();

                input.one('keydown', function() {
                    input.val('').removeClass('ie-placeholder');
                    if(isPassword)
                    {
                        try {
                            input.attr('type', 'password');
                        } catch(e) { }
                    }
                });
            }
        });

        input.select(function() {
            if(input.hasClass('ie-placeholder'))
            {
                setCaret();
                return false;
            }
        });

        input.blur(onblur);

        input.parents('form').on('submit', function() {
            if(input.hasClass('ie-placeholder')) {
                input.val('');
            }

            return true;
        });
    });
})