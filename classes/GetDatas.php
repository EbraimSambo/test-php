<?php

require_once "Insert.php";

class GetDatas
{
    private string $name;
    private string $email;

    public function __construct($name="", $email=""){
             $this->name = $name;
             $this->email = $email;
             
             $this->GetData($this->name,$this->email);
    }

    
    private function GetData($name, $email)
    {

        $erros;

        if (!$this->inputValue($name)) {
          $erros = "<div class='aviso' > O campo nome não pode estar vazio </div>";
          $this->showResponse ($erros);
          return;
        }

        if (!$this->inputValue($email)) {
            $erros = "<div class='aviso' > Esqueceu-se de inserir o seu emaail </div>";
            $this->showResponse ($erros);
            return;
         }

         if (!$this->countLetter($name, 12)) {
            $erros = "<div class='aviso' > Este campo deve conter no min 6 e no max 13 </div>";
            $this->showResponse ($erros);
            return;
         }
         if (!$this->FilterEmaial($email)) {
            $erros = "<div class='aviso' > Formato de Email invalido </div>";
            $this->showResponse ($erros);
            return;
         }

        $inaert = new Insert();
        $inaert-> Insert ($name, $email);
         
    }

    private function inputValue($input){
        if (empty($input)) {
         return false;
        }
        return true;
    } 

    private function countLetter($input, $max){

        if (strlen($input) < $max ) {
            return false;
        }
        return true;

    }

    private function FilterEmaial($input){
        if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    private function showResponse($erros){
        echo $erros;
    }

}


?>