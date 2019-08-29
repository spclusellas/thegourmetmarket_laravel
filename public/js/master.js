
window.onload = function(){
    //let formulario = document.forms[0];
    let formulario = document.querySelector('.formregis');
    // console.log(formulario);
    formulario.elements.name.focus();
    // console.log(formulario.elements);

    formulario.onsubmit = function(evento){
        if(!validaciones()){
            evento.preventDefault();
        }else{
            formulario.submit();
        }
    }
    function validaciones(){
        //var email = formulario.elements.email;
        let {name,surname,email} = formulario.elements;
        // console.log(surname);
        //console.log("Estoy en las validaciones");
        if (!validateName(name)) return false;
        if (!validateSurname(surname)) return false;
        if (!validateEmail(email)) return false;
        return true;
        }
        function validateName(name) {
            let errorNombre = document.getElementById('errorNombre');
            if (name.value.length <= 2){
              errorNombre.innerHTML = "Nombre no puede tener menos de 2 caracteres";
              errorNombre.classList.add('alert-danger');
              name.classList.add('is-invalid');
              return false;
            } else{
              errorNombre.innerHTML = "";
              errorNombre.classList.remove('alert-danger');
              name.classList.remove('is-invalid');
              name.classList.add('is-valid');
              formulario.elements.email.focus();
              return true;
            }
          }
          function validateSurname(surname) {
              let errorSurname = document.getElementById('errorSurname');
              console.log(errorSurname);
              if (surname.value.length <= 2){
                errorSurname.innerHTML = "Apellido no puede tener menos de 2 caracteres";
                errorSurname.classList.add('alert-danger');
                surname.classList.add('is-invalid');
                return false;
              } else{
                errorSurname.innerHTML = "";
                errorSurname.classList.remove('alert-danger');
                surname.classList.remove('is-invalid');
                surname.classList.add('is-valid');
                formulario.elements.email.focus();
                return true;
              }
            }
            function validateEmail(email) {
              let re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
              let error = document.getElementById('errorEmail');
              if (!re.test(email.value)){
                email.classList.add('is-invalid');
                console.log(errorEmail);
                error.innerHTML= "Debe colocar un email válido";
                error.classList.add('alert-danger');
                //errorEmail.classList.add('alert-danger');
               // email.addEventListener('change',cambioNombre);
              return false
             }else{
              error.innerHTML= "";
              error.classList.remove('alert-danger');
              email.classList.remove('is-invalid');
              email.classList.add('is-valid');
              formulario.elements.password.focus()
              return true;
             }
            }
          /*  let boton = document.querySelectorAll('.cerrarsesion');
            boton.addEventListener("mouseover", function(){
              Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
}) */



}
