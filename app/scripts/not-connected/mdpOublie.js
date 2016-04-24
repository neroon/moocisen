// --------------- REGEX --------------------
$.validator.addMethod("mailRegex", function(value, element) {
  return this.optional(element) || /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/i.test(value);
});

// --------------- Formulaire JqueryValidator ---------
var form = $("#myform");
form.validate({
  //prendre le name
  errorElement: 'span',
  errorClass: 'help-block',
  highlight: function(element, errorClass, validClass) {
    $(element).closest('.form-group').addClass("has-error");
  },
  unhighlight: function(element, errorClass, validClass) {
    $(element).closest('.form-group').removeClass("has-error");
  },
  rules: {
    email: {
      required: true,
      mailRegex: true,
      minlength: 3,
    },
  },
  messages: {
    email: {
      required: "Entrer une adresse mail valide",
    },
  }
});

// --------------- Login JqueryValidator ---------
var login = $("#myLogin");
login.validate({
  //prendre le name
  errorElement: 'span',
  errorClass: 'help-block',
  highlight: function(element, errorClass, validClass) {
    $(element).closest('.form-group').addClass("has-error");
  },
  unhighlight: function(element, errorClass, validClass) {
    $(element).closest('.form-group').removeClass("has-error");
  },
  rules: {
    email: {
      required: true,
      mailRegex: true,
      minlength: 3,
    },
  },
  messages: {
    email: {
      required: "Entrer une adresse mail valide",
    },
  }
});