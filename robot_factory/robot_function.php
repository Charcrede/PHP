<?php
class Robot
{
    private $name;
    public function __construct()
    {
        // private string $name;
        // generateRandomName($name);
    }
    function constructor()
    {

    }
    private function generateRandomName()
    {
    }

    public function getRandomName()
    {
        $num = rand(1000, 9999);
        $letters = range("A", "Z");
        $name = $letters[array_rand($letters)] . $letters[array_rand($letters)] . "-" . $num;
        if (empty($_POST['nom'])) {
            return $this->setName($name)->name;
        } else {
            return $this->setName($_POST['nom'])->name;
        }
    }
    public function greet()
    {
        return "Salut, humain. Je suis " . $this->getRandomName();
    }
    public function getCurrentDateTime()
    {
        return "Nous sommes le " . date("d-m-y") . ", il est " . date("H:i:sa");
    }
    public function chooseRandomNumberAndParity()
    {
        $number = rand(0, 10);
        return $this->checkEvenOdd($number);
    }
    private function checkEvenOdd($number)
    {
        if ($number % 2 === 0) {
            return "J'ai choisi le nombre " . $number . " C'est un nombre pair";
        } else {
            return "J'ai choisi le nombre " . $number . " C'est un nombre impair";
        }

    }
    public function reverseName()
    {
        return strrev($this->name);
    }

    public function robotBehavior()
    {
        if (empty($_POST['behavior'])) {
            $y = rand(0, 9);
            if ($y >= 0 && $y <= 5) {
                return "Vous voulez un café ?";
            } else {
                return "<strong style='color:red;'> Extermination ! Extermination ! </strong>";
            }
        } else {
            return "{$_POST['behavior']}";
        }

    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }
}
?>