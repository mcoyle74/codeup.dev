(function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;
    var person = {};

    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    person.firstName = 'Michael';
    person.lastName = 'Coyle'

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    person.sayHello = function() {
    	alert('Hello, ' + this.firstName + ' ' + this.lastName + '. How are things going at Codeup?');
    }
    // Say hello from the person object.

    person.sayHello();
})();
