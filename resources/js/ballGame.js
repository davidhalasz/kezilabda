 // Get all the person elements
 const persons = document.querySelectorAll('.person');

 // Get the ball element
 const ball = document.querySelector('.ball');

 let randomPerson = 0;
 let prevRandomPerson = 1;

 // Move the persons randomly
 setInterval(() => {
     do {
         randomPerson = Math.floor(Math.random() * persons.length);
     } while (randomPerson === prevRandomPerson);

     prevRandomPerson = randomPerson;

     for (i = 0; i < persons.length; i++) {
         const person = persons[i];
         const x = Math.floor(Math.random() * 480) + 10;
         const y = Math.floor(Math.random() * 480) + 10;
         person.style.transform = `translate(${x}px, ${y}px)`;

         if (i === randomPerson) {
             ball.style.transform = `translate(${x-8}px, ${y}px)`;
         }
     }
 }, 1500);
