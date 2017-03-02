/**
* Created by 036 on 10.02.2017.
*/
// $(document).ajaxSend(function(event, request, settings) {
//     alert('alert');
//      $('#loading-indicator').show();
// });
//
// $(document).ajaxComplete(function(event, request, settings) {
//     $('#loading-indicator').hide();
// });
jQuery('#loading-indicator').showLoading();
jQuery('#loading-indicator').load(
    '/path/to/my/url',
    {},
    function() {
        //
        //this is the ajax callback
        //
        jQuery('#loading-indicator').hideLoading();
    }
);
