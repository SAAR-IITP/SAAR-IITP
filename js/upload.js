var abc = 0;      // Declaring and defining global increment variable.
$(document).ready(function () {
    //  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
    $('#add_more').click(function () {
        $(this).before($("<div/>", {
            id: 'filediv'
        }).fadeIn('slow').append($("<input/>", {
            name: 'file[]',
            type: 'file',
            id: 'file'
        }), $("<br/><br/>")));
    });
    // Following function will executes on change event of file input to select different file.
    $('body').on('change', '#file', function () {
        if (this.files && this.files[0]) {
            abc += 1; // Incrementing global variable by 1.
            var z = abc - 1;
            var x = $(this).parent().find('#previewimg' + z).remove();
            $(this).before("<div id='abcd" + abc + "' class='abcd' style='width:200px'><img id='previewimg" + abc + "' src='' style='width:90%;border:1px solid #e8debd;'/></div>");
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
            $(this).hide();
            $("#abcd" + abc).append($("<img/>", {
                id: 'img',
                src: 'https://img.icons8.com/cotton/2x/delete-sign.png',
                alt: 'delete',
                style: 'width: 10%'
            }).click(function () {
                $(this).parent().parent().remove();
            }));
        }
    });
    // To Preview Image
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };

});