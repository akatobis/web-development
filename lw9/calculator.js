function calc(arithmeticExpression) {
   let bracket = null;
   let reverseBracket = null;
   arithmeticExpression.forEach(elem => {
      if (elem == '(') {
         bracket = elem;
      }
      if (elem == ')') {
         reverseBracket = elem;
      }
   });
   calc(arithmeticExpression)
}