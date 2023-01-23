const imgDiv = document.querySelector('profile-pic');
const img = document.querySelector('#fotop');
const file = document.querySelector('#file');
const upBtn = document.querySelector('#upBtn');

file.addEventListener('change', function(){
    const choosedFile = this.files[0];

    if (choosedFile) {
        const reader = new FileReader();
        
        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);
    }
})
