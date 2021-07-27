jQuery(document).ready(function($) {
    const actualBtn = document.getElementsByClassName('actual-btn');
    const fileChosen = document.getElementsByClassName('file-chosen');

    for (let i = 0; i < actualBtn.length; i++) {
        actualBtn[i].addEventListener('change', function() {

            fileChosen[i].textContent = this.files[0].name

            if (this.files.length > 1)
                fileChosen[i].textContent += " and " + (this.files.length - 1) + " more"
        })
    }

})