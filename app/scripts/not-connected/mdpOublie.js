// --------------- REGEX --------------------
$.validator.addMethod("usernameRegex", function(value, element) {
  return this.optional(element) || /^[a-z\u00E0-\u00FC_.+-]+$/i.test(value);
});

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
        name: {
          required: true,
          usernameRegex: true,
          minlength: 2,
      },
      surname: {
          required: true,
          usernameRegex: true,
          minlength: 2,
      },
      pseudo: {
          required: true,
          minlength: 2,
      },
      password : {
          required: true,
          minlength: 4,
      },
      city:{
          required: true,
      },
      name: {
          required: true,
          usernameRegex: true,
          minlength: 3,
      },
      email: {
          required: true,
          mailRegex: true,
          minlength: 3,
      },
  },
  messages: {
    username: {
      required: "Username required",
  },
  name: {
      required: "name required",
  },
  password : {
      required: "Password required",
  },
  name: {
      required: "Name required",
  },
  email: {
      required: "Email required",
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
        name: {
          required: true,
          usernameRegex: true,
          minlength: 2,
      },
      password : {
          required: true,
          minlength: 4,
      },
      email: {
          required: true,
          mailRegex: true,
          minlength: 3,
      },
  },
  messages: {
    password : {
        required: "Password required",
    },
    email: {
        required: "Email required",
    },
 }
});