function isPrimeNumber(n) {
   function isPrime(number) {
      if (number < 0) {
         console.log(number, 'is not prime number');
         return;
      }
      
      if (number === 0) {
         console.log(number, 'is not number');
         return;
      }

      for (let i = 2; i * i <= number; i++) {
         if (number % i === 0) {
            console.log(number, 'is not prime number')
            return;
         }
      }
      console.log(number, 'is prime number');
      return;
   }

   if (Number.isInteger(n)){
      isPrime(n);
   } 
   else if (Array.isArray(n)) {
      if (n.length === 0){
         console.log('Массив не может быть пустым');
         return;
      }

      let notNumberInArray = false;
      n.forEach((element) => {
         if (typeof(element) !== 'number'){
            console.log('В переданном массиве дожны быть только числа');
            notNumberInArray = true;
         }
      });
      if (notNumberInArray) {
         return;
      }
      n.forEach(elem => isPrime(elem));
      
   } else {
      console.log('Переданный параметр не являтся числом или массивом или является дробным числом');
   }
}

isPrimeNumber(1);
isPrimeNumber(-1);
isPrimeNumber(0);
isPrimeNumber(10);
isPrimeNumber(10.7);
isPrimeNumber(2);
isPrimeNumber(100);
isPrimeNumber(107);
isPrimeNumber('dfs')
isPrimeNumber([1, 2, 3])
isPrimeNumber([-1, 0, 5, 10, 25, 113])
isPrimeNumber([]);
isPrimeNumber([1, 'ad']);