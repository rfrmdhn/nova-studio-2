// Page code (e.g. Home.c1dmp / attached to the page holding the consultation form)
// Rename the $w element IDs below to match whatever you name the inputs/button
// in the Wix Editor (click each element -> ID field in the top toolbar).

import { submitConsultationRequest } from 'backend/consultation.jsw';

$w.onReady(function () {
    $w('#btnSubmit').onClick(async () => {
        $w('#btnSubmit').disable();
        $w('#formMessage').hide();

        const result = await submitConsultationRequest({
            name: $w('#inputName').value,
            email: $w('#inputEmail').value,
            company: $w('#inputCompany').value,
            message: $w('#inputMessage').value,
        });

        $w('#formMessage').text = result.message;
        $w('#formMessage').show();
        $w('#btnSubmit').enable();

        if (result.success) {
            $w('#inputName').value = '';
            $w('#inputEmail').value = '';
            $w('#inputCompany').value = '';
            $w('#inputMessage').value = '';
        }
    });
});
