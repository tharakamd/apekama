(function(){
    
    // adding validation constraints
    var constraints = {
      seller_user_name:{
        presence: true,
        length:{
            minimum:3,
            maximum: 20
        },
        format:{
            pattern: "[a-z0-9]+",
            flags: "i",
            message: "can only contain letters and numbers"
        }
      },  
      seller_email:{
          presence: true,
          email:true
      },
      seller_zip_code:{
          presence: true,
          length:{
              minimum:5,
              maximum:10
          }
      },
      seller_first_name:{
          presence: true,
          format:{
              pattern: "[a-z]+",
              flags: "i",
              message:"can only contain letters"
          },
          length:{
              minimum:1,
              maximum:100
          }
      },
      seller_last_name:{
          presence: true,
          format:{
              pattern: "[a-z]+",
              flags: "i",
              message:"can only contain letters"
          },
          length:{
              minimum:2,
              maximum:100
          }
      },
      seller_street:{
          presence:true,
          length:{
              minimum:2,
              maximum:200
          }
      },
      seller_city:{
          presence:true,
          length:{
              maximum:200
          }
      },
      seller_state:{
          presence:true,
          length:{
              maximum:200
          }
      },
      seller_password:{
          presence:true,
          length:{
              minimum:4,
              maximum:20
          }
      },
      seller_confirm_password:{
          presence: true,
          equality: "seller_password"
      }
    };
    // preventing form being validating
     document.querySelector("form#seller_signup")
        .addEventListener("submit", function(ev) {
          ev.preventDefault();
          handleFormSubmit(this);
        });
        
    //handle form submition 
    function handleFormSubmit(form){
         var values = validate.collectFormValues(form);
         var errors = validate(values, constraints);
         showErrors(form, errors || {});
         if (!errors) {
          showSuccess();
        }
     }
      // Updates the inputs with the validation errors
      function showErrors(form, errors) {
        // We loop through all the inputs and show the errors for that input
        _.each(form.querySelectorAll("input[name], select[name]"), function(input) {
          // Since the errors can be null if no errors were found we need to handle
          // that
          showErrorsForInput(input, errors && errors[input.name]);
        });
      }
      // Shows the errors for a specific input
      function showErrorsForInput(input, errors) {
        // This is the root of the input
        var formGroup = closestParent(input.parentNode, "form-group")
          // Find where the error messages will be insert into
          , messages = formGroup.querySelector(".messages");
        // First we remove any old messages and resets the classes
        resetFormGroup(formGroup);
        // If we have errors
        if (errors) {
          // we first mark the group has having errors
          formGroup.classList.add("has-error");
          // then we append all the errors
          _.each(errors, function(error) {
            addError(messages, error);
          });
        } else {
          // otherwise we simply mark it as success
          formGroup.classList.add("has-success");
        }
      }
       // Recusively finds the closest parent that has the specified class
      function closestParent(child, className) {
        if (!child || child == document) {
          return null;
        }
        if (child.classList.contains(className)) {
          return child;
        } else {
          return closestParent(child.parentNode, className);
        }
      }
      function resetFormGroup(formGroup) {
        // Remove the success and error classes
        formGroup.classList.remove("has-error");
        formGroup.classList.remove("has-success");
        // and remove any old messages
        _.each(formGroup.querySelectorAll(".help-block.error"), function(el) {
          el.parentNode.removeChild(el);
        });
      }
 // Adds the specified error with the following markup
      // <p class="help-block error">[message]</p>
      function addError(messages, error) {
        var block = document.createElement("p");
        block.classList.add("help-block");
        block.classList.add("error");
        block.innerText = error;
        messages.appendChild(block);
      }
       function showSuccess() {
        // We made it \:D/
       // alert("Success!");
        document.getElementById('seller_signup').submit();
      }

     
     
})();