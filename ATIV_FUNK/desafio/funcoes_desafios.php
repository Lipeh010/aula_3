<?php
// Funcão para verificar aceitação do desafio 1
   function verificarAceitacao($nome, $sexo, $idade) {
   if ($sexo == 'feminino' && $idade <25) {
      return "$nome ACEITA";
   } else {
      return "$nome NÃO ACEITA";
   }
}

   // Função para ordenar números do desafio 2
function ordenarNumeros($num1, $num2, $num3) {
   $lista = array($num1, $num2, $num3);
   rsort($lista);
   return implode(", ",$lista);
}

// Função para calcular média do desafio 3
   function calcularMediaAluno($nota1, $nota2, $nota3) {
         return ($nota1 + $nota2 + $nota3) / 3;
      }
?>
