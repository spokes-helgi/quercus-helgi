(function($){
    $(document).on('carbonFields.apiLoaded', function(e, api) {
        var fields = $(".group-name");
        var number = 0;
        for (var i = fields.length - 1; i >= 0; i--) {
            $personName = api.getFieldValue('employee['+number+']/qr_employee_name');
            $(fields[number]).html($personName);
            number++;
        }
    });
})(jQuery)