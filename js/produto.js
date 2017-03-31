;(function() {
  let output = document.querySelector('output[for=tamanho]');
  let input = document.querySelector('#tamanho');

  input.oninput = () => output.value = input.value;
})();
