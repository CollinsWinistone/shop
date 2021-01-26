/**
 * Validates inputs from forms
 * Ensures all inputs are as expected by the site 
 */

 function validate()
 {
     /**
      * validates email on client side
      * @param {string} email 
      */
     this.email = function(email)
     {
         var valid = /\w@gmail.com/.test(email);
        //validate email
        if(valid)
        {
            return true;
        }
        return false;
     };

     /**
      * validates password
      * @param {string} password
      */
     this.password = function(password)
     {
         if(password.length >= 5)
         {
             return true;
         }
         return false;
     };

     /**
      * validates username
      * @param {string} username 
      */
     this.username = function(username)
     {
         if(username.length >= 5)
         {
             return true;
         }
         return false;
     };

     /**
      * validates price
      * @param {number} price 
      */
     this.price = function(price)
     {
         //check if price is not a string
     };
     this.contact = function(contact)
     {
         if(contact.length >= 5)
         {
             return true;
         }
         return false;
     }
 }
 //end of validate function decalaration
