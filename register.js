const emri = document.getElementById('fullName');
const Passwordi = document.getElementById('password')
const form = document.getElementById('main-user-info')
const pNumber = document.getElementById('phoneNumber')
const emaili = document.getElementById('email')


form.addEventListener('submit', (e) => {
    let messages = [];

    // validimi i emrit
    if (emri.value.length < 8) {
        messages.push('Emri duhet te jete me  gjate se 8 karaktere');
    }
    else if (!/^[A-Za-z0-9-]*$/.test(emri.value)) {
        messages.push('Emri duhet te permbaje shkronja, numra, dhe \'-\'')
    }

    // validimi i passwordit
    if (Passwordi.value.length < 8) {
        alert("Fjalkalimi duhet te kete me shume se 8 karaktere");
fjalkalimi.focus();
return false;
}
    else if (!/[0-9]/.test(Passwordi.value) || /^[A-Za-z0-9]*$/.test(Passwordi.value)) {
        messages.push('Passwordi duhet te kete se paku nje numer dhe nje karakter');
    }

    if (pNumber.value === "") {
        alert("Ju lutem shtoni numrin e telefonit.");
        pNumber.focus();
        return false;
        }
        if (emaili.value === "") {
        alert("Ju lutem shtoni emailin tuaj.");
        emaili.focus();
        return false;
        }
    
})