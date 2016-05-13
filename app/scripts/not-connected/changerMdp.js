/*!
 *
 *  Google
 *  Copyright 2015 Google Inc. All rights reserved.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *    https://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License
 *
 */

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