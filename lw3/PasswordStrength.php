<?php
function PasswordStrength($password){
   $len_password = strlen($password);
   $reliability = 0;
   $count_num;
   $count_upper_case_char;
   $count_lower_case_chars;
   $repetitions;

   for($i = 0; $i <= $len_password; $i++){
      if(is_numeric($password[$i])){
         $count_num++;
      }
      if(ctype_upper($password[$i])){
         $count_upper_case_chars++;
      }
      if(ctype_lower($password[$i])){
         $count_lower_case_chars++;
      }
   }

   if($len_password <> 0){
      $reliability = $len_password * 4; //прибавляем количество символов * 4
   }

   if($count_num <> 0){
      $reliability += $count_num * 4; //прибфвляем количество цифр * 4
   }

   if($count_upper_case_chars <> 0){
      if(!ctype_upper($password)){
         $reliability += ($len_password - $count_upper_case_chars) * 2; //прибавляем количество символов - кол-во в верх рег *2
      }
   }

   if($count_lower_case_chars <> 0){
      if(!ctype_lower($password)){
         $reliability += ($len_password - $count_lower_case_chars) * 2; ////прибавляем количество символов - кол-во в ниж рег *2
      }
   }

   if(ctype_alpha($password)){
      $reliability -= $len_password; //если все буквы, то вычитаем кол симв
   }

   if(is_numeric($password)){
      $reliability -= $len_password; //если все цифры, то вычитаем кол симв
   }

   foreach (count_chars($password, 1) as $i => $val) {
      if($val <> 1){
         $reliability -= $val; //вычитаем кол повторяющихся симв
      }
   }
   return $reliability;
}

echo PasswordStrength($_GET['password']);