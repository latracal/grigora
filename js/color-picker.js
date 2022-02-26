jQuery(document).ready(function($){
    $('.color-picker').spectrum({
        type: "color",
        showButtons: false,
        allowEmpty: false,
        preferredFormat: "hex"
      });
});